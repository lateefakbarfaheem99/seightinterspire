<?php
require_once ISC_BASE_PATH."/lib/class.galleryimagedir.php";
define("ITEMS_PER_PAGE", 10);
/**
 * Gallery Image Manager
 * This class is used to manage all the images within the gallery directory of this website
 *
 */

class ISC_ADMIN_GALLERYIMAGEMANAGER  extends ISC_ADMIN_BASE
{

	protected $imageDirectory = '';

	/**
	 * The constructor.
	 */
	public function __construct()
	{
		parent::__construct();
        $this->galleryDirectory = GetConfig('galleryDir');
		$this->engine->LoadLangFile('galleryimagemanager');
	}

	public function HandleToDo($do)
	{
		/*if (!$GLOBALS['ISC_CLASS_ADMIN_AUTH']->HasPermission(AUTH_Manage_Gallery_Images)) {
			$GLOBALS['ISC_CLASS_ADMIN_ENGINE']->DoHomePage(GetLang('Unauthorized'), MSG_ERROR);
		}*/

		$GLOBALS['BreadcrumEntries'] = array(
			GetLang('Home') => 'index.php',
		);

		switch (isc_strtolower($do)) {
            case 'previewgallery':
                $this->PreviewGallery();
                break;
			case 'creategallery':
                $GLOBALS['BreadcrumEntries'] = array(GetLang('Home') => "index.php", GetLang('Gallery') => "index.php?ToDo=manageGalleryImages", GetLang('CreateGallery') => "index.php?ToDo=createGallery");

                $GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintHeader();
                $this->CreateGalleryStep1();
                $GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintFooter();
                die();
				break;
            case 'creategallery2':
                $GLOBALS['BreadcrumEntries'] = array(GetLang('Home') => "index.php", GetLang('Gallery') => "index.php?ToDo=manageGalleryImages");

                $GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintHeader();
                $this->CreateGalleryStep2();
                $GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintFooter();
                die();
                break;
            case 'deletegallery':
                $GLOBALS['BreadcrumEntries'] = array(GetLang('Home') => "index.php", GetLang('Gallery') => "index.php?ToDo=manageGalleryImages");

                $GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintHeader();
                $this->DeleteGallery();
                $GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintFooter();
                die();
                break;
            case 'editgallery':
                $GLOBALS['BreadcrumEntries'] = array(GetLang('Home') => "index.php", GetLang('Gallery') => "index.php?ToDo=manageGalleryImages", GetLang('EditGallery') => "index.php?ToDo=editGallery");

                $GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintHeader();
                $this->EditGalleryStep1();
                $GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintFooter();
                die();
                break;
            case 'editgallery2':
                $GLOBALS['BreadcrumEntries'] = array(GetLang('Home') => "index.php", GetLang('Gallery') => "index.php?ToDo=manageGalleryImages");

                $GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintHeader();
                $this->EditGalleryStep2();
                $GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintFooter();
                die();
                break;
            case 'uploadgalleryimages':
                $GLOBALS['BreadcrumEntries'] = array(GetLang('Home') => "index.php", GetLang('Gallery') => "index.php?ToDo=manageGalleryImages", GetLang('UploadImages') => "index.php?ToDo=uploadgalleryimages");

                $this->UploadImagesView();
                die();
                break;
            case 'downloadgalleryimage':
                $this->DownloadImage();
                break;                
			default:
				$this->View();
		}
	}
    
    public function CreateGalleryStep1()
    {
        $GLOBALS['Title'] = GetLang('CreateGallery');
        $GLOBALS['Intro'] = GetLang('CreateGalleryIntro');
        $GLOBALS['FormAction'] = "creategallery2";

        $GLOBALS['NewsVisible'] = 'checked="checked"';

        $this->template->display('galleries.form.tpl');
    }    

    public function CreateGalleryStep2()
    {
        // Commit the values to the database
        $directoryName = $_POST['galtitle'];
        $pathname = ISC_BASE_PATH . '/' . $this->galleryDirectory.'/'.$_POST['galtitle'].'/thumbs';
        $st = mkdir($pathname, 0777, true);
        $error = '';
        if($st) {
            $error = $this->_CommitGallery();
        } else {
            $error = "Cannot gallery directory.";
        }
        if (empty($error)) {
            $this->ManageGallery(GetLang('NewsAddedSuccessfully'), MSG_SUCCESS);
        } else {
            $this->ManageGallery(sprintf(GetLang('ErrNewsNotAdded'), $error), MSG_ERROR);
        }
    }

    public function _CommitGallery($GalleryId=0)
    {
        // Commit the details for the news post to the database
        include_once(ISC_BASE_PATH.'/lib/api/gallery.api.php');
        $gallery = new API_GALLERY();

        if ($GalleryId == 0) {
            $_POST['galcount'] = 0;
            $GalleryId = $gallery->create();
        } else {
            $gallery->load($GalleryId);
            $directoryName = $_POST['galtitle'];
            $oldgalname = $gallery->galtitle;
            $oldgalname = ISC_BASE_PATH . '/' . $this->galleryDirectory.'/'.$oldgalname;
            $newgalname = ISC_BASE_PATH . '/' . $this->galleryDirectory.'/'.$_POST['galtitle'];
            $st = rename($oldgalname, $newgalname);
            if($st)
                $gallery->save();
            else
                $gallery->error = "Cannot rename gallery directory.";
        }

        if(!$gallery->error) {
            // Log this action
            $GLOBALS['ISC_CLASS_LOG']->LogAdminAction($GalleryId, $_POST['galtitle']);
        }

        return $gallery->error;
    }
    
    public function DeleteGallery()
    {
        $filteredIdx = array();

        if (isset($_POST['gallery']) && is_array($_POST['gallery'])) {
            $filteredIdx = array_filter($_POST['gallery'], "isId");
        }

        if (is_array($filteredIdx) && !empty($filteredIdx)) {
            $query = "SELECT galtitle FROM [|PREFIX|]galleries ga WHERE galid IN(" . implode(",", $filteredIdx) . ")";
            $result = $GLOBALS['ISC_CLASS_DB']->Query($query);
            while ($row = $GLOBALS["ISC_CLASS_DB"]->Fetch($result)) {
                $directory = ISC_BASE_PATH . '/'.$this->galleryDirectory.'/'.$row['galtitle'].'/thumbs';
                $handle=opendir($directory);
                while (($file = readdir($handle))!==false) {
                    @unlink($directory.'/'.$file);
                }
                closedir($handle);                
                rmdir($directory);

                $directory = ISC_BASE_PATH . '/'.$this->galleryDirectory.'/'.$row['galtitle'];
                $handle=opendir($directory);
                while (($file = readdir($handle))!==false) {
                    @unlink($directory.'/'.$file);
                }
                closedir($handle);                
                rmdir($directory);
            }
            $GLOBALS["ISC_CLASS_DB"]->DeleteQuery("galleries", "WHERE galid IN(" . implode(",", $filteredIdx) . ")");
            $err = $GLOBALS["ISC_CLASS_DB"]->Error();

            if ($err != "") {
                $this->ManageGallery($err, MSG_ERROR);
            } else {
                // Log this action
                $GLOBALS['ISC_CLASS_LOG']->LogAdminAction(count($_POST['gallery']));

                $this->ManageGallery(GetLang('GalleryDeletedSuccessfully'), MSG_SUCCESS);
            }
        } else {
            $this->ManageGallery();
        }
    }
    
	private function View()
	{
		$GLOBALS['BreadcrumEntries'][GetLang('Gallery')] = 'index.php?ToDo=manageGalleryImages';

        if(isset($_GET['searchQuery'])) {
            $GLOBALS['BreadcrumEntries'] = array(GetLang('Home') => "index.php", GetLang('Gallery') => "index.php?ToDo=viewGallery", GetLang('SearchResults') => "index.php?ToDo=viewGallery");
        }
        else {
            $GLOBALS['BreadcrumEntries'] = array(GetLang('Home') => "index.php", GetLang('Gallery') => "index.php?ToDo=viewGallery");
        }

        if(!isset($_REQUEST['ajax'])) {
            $GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintHeader();
        }

        $this->ManageGallery();

        if(!isset($_REQUEST['ajax'])) {
            $GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintFooter();
        }
	}
    
    public function ManageGallery($MsgDesc = "", $MsgStatus = "")
    {
        $numGallery = 0;
        // Fetch any results, place them in the data grid
        $GLOBALS['GalleryDataGrid'] = $this->ManageGalleryGrid($numGallery);

        // Was this an ajax based sort? Return the table now
        if(isset($_REQUEST['ajax']) && $_REQUEST['ajax'] == 1) {
            echo $GLOBALS['GalleryDataGrid'];
            return;
        }

        if ($MsgDesc != "") {
            $GLOBALS['Message'] = MessageBox($MsgDesc, $MsgStatus);
        }

        // Do we need to disable the delete button?
        if (/*!$GLOBALS["ISC_CLASS_ADMIN_AUTH"]->HasPermission(AUTH_Delete_Gallery) ||*/ $numGallery == 0) {
            $GLOBALS['DisableDelete'] = "DISABLED";
        }

        $GLOBALS['GalleryIntro'] = GetLang('ManageGalleryIntro');

        if($numGallery == 0) {
            // No results
            $GLOBALS['DisplayGrid'] = "none";
            if(count($_GET) > 1) {
                if ($MsgDesc == "") {
                    $GLOBALS['Message'] = MessageBox(GetLang('NoGalleryResults'), MSG_ERROR);
                }
            }
            else {
                $GLOBALS['Message'] = MessageBox(GetLang('NoGallery'), MSG_SUCCESS);
                $GLOBALS['DisplaySearch'] = "none";
            }
        }

        $this->template->display('galleries.manage.tpl');
    }    
    
    public function ManageGalleryGrid(&$numGallery)
    {
        $page = 0;
        $start = 0;
        $numGallery = 0;
        $numPages = 0;
        $GLOBALS['GalleryGrid'] = "";
        $GLOBALS['Nav'] = "";
        $max = 0;
        $searchURL = '';

        if (isset($_GET['searchQuery'])) {
            $query = $_GET['searchQuery'];
            $GLOBALS['Query'] = $query;
            $searchURL = '&amp;searchQuery='.$query;
        } else {
            $query = "";
            $GLOBALS['Query'] = "";
        }

        if (isset($_GET['sortOrder']) && $_GET['sortOrder'] == 'desc') {
            $sortOrder = 'desc';
        } else {
            $sortOrder = "asc";
        }

        $sortLinks = array(
            "Title" => "ga.galtitle",
            "Count" => "ga.galcount",
        );

        if (isset($_GET['sortField']) && in_array($_GET['sortField'], $sortLinks)) {
            $sortField = $_GET['sortField'];
            SaveDefaultSortField("ManageGallery", $_REQUEST['sortField'], $sortOrder);
        }
        else {
            $sortField = "ga.galtitle";
            list($sortField, $sortOrder) = GetDefaultSortField("ManageGallery", "ga.galtitle", $sortOrder);
        }

        if (isset($_GET['page'])) {
            $page = (int)$_GET['page'];
        } else {
            $page = 1;
        }

        $sortURL = sprintf("&sortField=%s&sortOrder=%s", $sortField, $sortOrder);
        $GLOBALS['SortURL'] = $sortURL;

        // Limit the number of questions returned
        if ($page == 1) {
            $start = 1;
        } else {
            $start = ($page * ISC_GALLERIES_PER_PAGE) - (ISC_GALLERIES_PER_PAGE-1);
        }

        $start = $start-1;

        // Get the results for the query
        $galleryResult = $this->GetGalleryList($query, $start, $sortField, $sortOrder, $numGallery);
        $numPages = ceil($numGallery / ISC_GALLERIES_PER_PAGE);

        // Add the "(Page x of n)" label
        if($numGallery > ISC_GALLERIES_PER_PAGE) {
            $GLOBALS['Nav'] = sprintf("(%s %d of %d) &nbsp;&nbsp;&nbsp;", GetLang('Page'), $page, $numPages);
            $GLOBALS['Nav'] .= BuildPagination($numGallery, ISC_GALLERIES_PER_PAGE, $page, sprintf("index.php?ToDo=manageGalleryImages%s", $sortURL));
        }
        else {
            $GLOBALS['Nav'] = "";
        }

        $GLOBALS['Nav'] = rtrim($GLOBALS['Nav'], ' |');
        $GLOBALS['SearchQuery'] = $query;
        $GLOBALS['SortField'] = $sortField;
        $GLOBALS['SortOrder'] = $sortOrder;

        BuildAdminSortingLinks($sortLinks, "index.php?ToDo=manageGalleryImages&amp;".$searchURL."&amp;page=".$page, $sortField, $sortOrder);

        // Workout the maximum size of the array
        $max = $start + ISC_GALLERIES_PER_PAGE;

        if ($max > count($galleryResult)) {
            $max = count($galleryResult);
        }
       
        if($numGallery > 0) {
            // Display the news
            while ($row = $GLOBALS["ISC_CLASS_DB"]->Fetch($galleryResult)) {
                $GLOBALS['GalleryID'] = $row['galid'];
                $GLOBALS['Title'] = isc_html_escape($row['galtitle']);
                $GLOBALS['Count'] = intval($row['galcount']);
                $GLOBALS['EditGalleryLink'] = sprintf("<a title='%s' class='Action' href='index.php?ToDo=editGallery&amp;id=%d'>%s</a>", GetLang('GalleryEdit'), $row['galid'], GetLang('Edit'));
                $GLOBALS['UploadGalleryImageLink'] = sprintf("<a title='%s' class='Action' href='index.php?ToDo=uploadgalleryimages&amp;id=%d'>%s</a>", GetLang('GalleryImageUpload'), $row['galid'], GetLang('GalleryImageUpload'));
                $GLOBALS['PreviewGalleryLink'] = sprintf("<a title='%s' class='Action' href='".GetConfig('ShopPathNormal')."/custom-cycling-clothing/gallery?gallery_id=%d' target='_blank'>%s</a>", GetLang('GalleryPreview'), $row['galid'], GetLang('Preview'));
                $GLOBALS['GalleryGrid'] .= $this->template->render('galleries.manage.row.tpl');
            }
            return $this->template->render('galleries.manage.grid.tpl');
        }        
    }

    private function GetGalleryList(&$Query, $Start, $SortField, $SortOrder, &$NumResults)
    {
        // Return an array containing details about Gallery.
        // Takes into account search too.

        // PostgreSQL is case sensitive for likes, so all matches are done in lower case
        $Query = trim($Query);

        $query = "SELECT * FROM [|PREFIX|]galleries ga";
        $countQuery = "SELECT COUNT(galid) FROM [|PREFIX|]galleries ga";

        $queryWhere = '';
        if($Query != '') {
            $queryWhere .= " WHERE galtitle LIKE '%".$GLOBALS['ISC_CLASS_DB']->Quote($Query)."%'";
        }

        // Add any conditions on to the query
        $query .= $queryWhere;
        $countQuery .= $queryWhere;

        $query .= " ORDER BY ".$SortField." ".$SortOrder;

        $result = $GLOBALS['ISC_CLASS_DB']->Query($countQuery);
        $NumResults = $GLOBALS['ISC_CLASS_DB']->FetchOne($result);

        // Add the limit
        $query .= $GLOBALS["ISC_CLASS_DB"]->AddLimit($Start, ISC_GALLERIES_PER_PAGE);
        $result = $GLOBALS["ISC_CLASS_DB"]->Query($query);
        return $result;
    }    
    
    private function UploadImagesView()
    {
        $GLOBALS['BreadcrumEntries'][GetLang('ManageImages')] = 'index.php?ToDo=uploadgalleryimages';
        
        if(!isset($_GET['id'])) {
            $this->engine->PrintHeader();
            $this->ManageGallery();
            $this->engine->PrintFooter();
            return;
        }
        $query = "SELECT galtitle FROM [|PREFIX|]galleries ga WHERE galid = " . $_GET['id'] . ";";
        $result = $GLOBALS['ISC_CLASS_DB']->Query($query);
        $row = $GLOBALS["ISC_CLASS_DB"]->Fetch($result);
        $cur_galname = $row['galtitle'];
        $this->template->Assign('GalleryName', $cur_galname);
        $this->template->Assign('GalleryNameUrl', urlencode($cur_galname) );
        $this->template->Assign('GalleryID', $_GET['id']);

        // Display within the template
        $this->template->Assign('PageTitle', 'Manage Images');
        $this->template->Assign('PageIntro', 'ManageCatIntro');
        $this->template->Assign('CreateItem', 'CreateCategory');
        $this->template->Assign('DisplayFilters', 0);
        $this->template->Assign('MaxFileSize', GetMaxUploadSize());

        $currentPage = max((int)@$_GET['page'], 1);

        if(isset($_GET['perpage'])){
            $perPage = (int)$_GET['perpage'];
        }elseif(isset($_SESSION['galleryImageManagerPagingPerPage']) && (int)$_SESSION['galleryImageManagerPagingPerPage'] > 0){
            $perPage = (int)$_SESSION['galleryImageManagerPagingPerPage'];
        }elseif(isset($_COOKIE['galleryImageManagerPagingPerPage']) && (int)$_COOKIE['galleryImageManagerPagingPerPage'] > 0){
            $perPage = (int)$_COOKIE['galleryImageManagerPagingPerPage'];
        }else{
            $perPage = ITEMS_PER_PAGE;
        }

        $validSort = array("name.asc", "name.desc", "modified.asc", "modified.desc", "size.asc", "size.desc");
        $sortby = '';

        if(isset($_GET['sortby'])){
            $sortby = $_GET['sortby'];

        }elseif(isset($_SESSION['galleryImageManagerSortBy'])){
            $sortby = $_SESSION['galleryImageManagerSortBy'];
        }elseif(isset($_COOKIE['galleryImageManagerSortBy'])){
            $sortby = $_COOKIE['galleryImageManagerSortBy'];
        }

        if(empty($sortby) || !in_array($sortby, $validSort, true)){
            $sortby = 'name.asc';
        }

        setcookie('galleryImageManagerSortBy', $sortby, time()+(60*60*24*365), '/');
        $_SESSION['galleryImageManagerSortBy'] = $sortby;

        $sortBits = explode('.', $sortby);
        $sortField = $sortBits[0];
        $sortDirection = $sortBits[1];
        $this->template->Assign('Sort'.ucfirst(isc_strtolower($sortField)).ucfirst(isc_strtolower($sortDirection)), "selected=\"selected\"");

        setcookie('galleryImageManagerPagingPerPage', $perPage, time()+(60*60*24*365), '/');
        $_SESSION['galleryImageManagerPagingPerPage'] = $perPage;

        $imageDir = new ISC_GALLERYIMAGEDIR($this->galleryDirectory, $cur_galname, $sortDirection, $sortField);
        $dirCount = $imageDir->CountDirItems();

        if($imageDir->CountDirItems() == 0){
            $this->template->Assign('hasImages', false);
        }else{
            $this->template->Assign('hasImages', true);
        }

        $imageDir->sortField = $sortField;
        $imageDir->sortDirection = $sortDirection;

        if ($perPage > 0) {
            $imageDir->start = ($perPage * $currentPage) - $perPage;
            $imageDir->finish = ($perPage * $currentPage);
        }

        $numPages = 1;
        if ($perPage == 0) {
            $this->template->Assign('PerPageAllSelected', "selected=\"selected\"");
        }
        else {
            $numPages = ceil($dirCount / $perPage);
            $this->template->Assign('paging', $this->GetNav($currentPage, $dirCount, $perPage));
            $this->template->Assign('PerPage'.$perPage.'Selected', "selected=\"selected\"");
        }

        $this->template->Assign('PageNumber', $currentPage);
        $this->template->Assign('sessionid', SID);
        // authentication checks the token stored in the cookie, however the flash uploader doesn't send cookies so we need to store the token in the session and then retrieve it
        $_SESSION['STORESUITE_CP_TOKEN'] = $_COOKIE['STORESUITE_CP_TOKEN'];

        if ($numPages > 1) {
            $this->template->Assign('ImagesTitle', sprintf(GetLang('imageManagerCurrentImages'), $imageDir->start+1, min($imageDir->finish, $dirCount), $dirCount));
        } else {
            $this->template->Assign('ImagesTitle', sprintf(GetLang('imageManagerCurrentImagesSingle'), $dirCount, $dirCount));
        }

        // generate list of images
        $images = $imageDir->GetImageDirFiles();
        $imagesList = "";
        foreach ($images as $image) {
            $image_name = isc_html_escape($image['name']);
            $image_size = isc_html_escape(Store_Number::niceSize($image['size']));
            
            if($image['width']) {
                $imagesList .= sprintf("AdminImageManager.AddImage('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');\n",
                    isc_html_escape($image['name']),
                    isc_html_escape($image['url']),
                    isc_html_escape($image['thumburl']),
                    isc_html_escape(Store_Number::niceSize($image['size'])),
                    $image['width'],
                    $image['height'],
                    $image['origheight'] . " x " . $image['origwidth']."px",
                    $image['id']
                );
            } else {
                $imagesList .= sprintf("AdminImageManager.AddImage('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');\n",
                    isc_html_escape($image['name']),
                    isc_html_escape($image['url']),
                    isc_html_escape($image['thumburl']),
                    isc_html_escape(Store_Number::niceSize($image['size'])),
                    '',
                    '',
                    '',
                    $image['id']
                );                
            }
        }
        $this->template->Assign("imagesList", $imagesList);
        $this->template->Assign("sessionid", session_id());


        if (!empty($images)) {
            $this->template->Assign('hideHasNoImages', 'none');
        }
        else {
            $this->template->Assign('hideImages', 'none');
        }

        $this->engine->PrintHeader();
        $this->template->display('galleryimgman.view.tpl');
        $this->engine->PrintFooter();
    }    
    
    
	/**
	* Builds the pagination and navigation links
	*
	* @param int $page The current page we're on
	* @param int $total_items The total number of items to be paginated
	*/
	private function GetNav($page, $total_items, $items_per_page)
	{
		$searchURL = $this->GetSearchURL();

		$numPages = ceil($total_items / $items_per_page);

		// Add the "(Page x of n)" label
		if($total_items > $items_per_page) {
			$nav = sprintf("(%s %d %s %d) &nbsp;&nbsp;&nbsp;", GetLang('Page'), $page, GetLang('LittleOf'), $numPages);

			$nav .= BuildPagination($total_items, $items_per_page, $page, "index.php?ToDo=" . $_GET['ToDo'] . $searchURL);
		}
		else {
			$nav = "";
		}

		return rtrim($nav, ' |');
	}

    public function EditGalleryStep1()
    {
        // Show the form to edit a news
        $galId = (int)$_GET['id'];
        $arrData = array();

        if (GalleryExists($galId)) {
            $this->_GetGalleryData($galId, $arrData);

            $GLOBALS['GalleryId'] = $galId;
            $GLOBALS['GalleryTitle'] = $arrData['galtitle'];

            $GLOBALS['Title'] = GetLang('EditGalleryTitle');
            $GLOBALS['Intro'] = GetLang('EditGalleryIntro');
            $GLOBALS['FormAction'] = "editgallery2";
            
            $this->template->display('galleries.form.tpl');
        } else {
            $this->ManageGallery(GetLang('GalleryDoesntExist'), MSG_ERROR);
        }
    }

    public function EditGalleryStep2()
    {
        // Get the information from the form and add it to the database
        $galId = (int) $_POST['galId'];

        $error = $this->_CommitGallery($galId);

        if (empty($error)) {
            $this->ManageGallery(GetLang('GalleryUpdatedSuccessfully'), MSG_SUCCESS);
        } else {
            $this->ManageGallery(sprintf(GetLang('ErrGalleryNotUpdated'), $error), MSG_ERROR);
        }
    }    
    
	private function GetSearchURL($remove_sort = false)
	{
		// Build the pagination URL
		$searchURL = '';
		foreach($_GET as $k => $v) {
			if ($k == "ToDo" || $k == "page" || !$v) {
				continue;
			}
			if ($remove_sort && ($k == "sortField" || $k == "sortOrder")) {
				continue;
			}
			$searchURL .= sprintf("&%s=%s", $k, urlencode($v));
		}

		return $searchURL;
	}

	private function DownloadImage()
	{
		if (!isset($_GET['image'])) {
			die;
		}

		$imagefile = basename($_GET['image']);
        $imagepath = ISC_BASE_PATH . '/' . $this->galleryDirectory.'/'.$_GET['gal_name'].'/'.$imagefile;
		if (!file_exists($imagepath)) {
			die();
		}

		Interspire_Download::downloadFile($imagepath);
	}

    private function _GetGalleryData($GalId, &$RefArray)
    {
        if ($GalId == 0) {
            $RefArray['galid'] = 0;
            $RefArray['galtitle'] = $_POST['galtitle'];
            $RefArray['galcount'] = $_POST['galcount'];
        } else {
            // Get the data for this news post from the database
            $query = sprintf("select * from [|PREFIX|]galleries where galid='%s'", $GLOBALS['ISC_CLASS_DB']->Quote($GalId));
            $result = $GLOBALS["ISC_CLASS_DB"]->Query($query);

            if ($row = $GLOBALS["ISC_CLASS_DB"]->Fetch($result)) {
                $RefArray = $row;
            }
        }
    }
    
}


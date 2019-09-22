<?php

/**
* Implements the sitemap panel
*
*/
CLASS ISC_SITEMAP_PANEL extends PANEL {

	/**
	* Sets up data for displaying this panel and routes to more specific handling methods if necessary
	*
	*/
	public function SetPanelSettings()
	{
		$GLOBALS['SNIPPETS']['SitemapContent'] = '';
		$GLOBALS['SitemapContent'] = getConfig('SitemapContent');
		
		$template = $GLOBALS['ISC_CLASS_TEMPLATE'];

		$firstPageItemCount = 20;

		//$models = array('PAGES', 'CATEGORIES', 'BRANDS', 'VENDORS');
        $models = array('PAGES', 'CATEGORIES');
        $new_tree[0] = new ISC_SITEMAP_ROOT();
        $new_tree[1] = new ISC_SITEMAP_ROOT();
        
        $index = 0;
        foreach ($models as &$model) {
            $modelType = ucfirst(strtolower($model));
            $className = 'ISC_SITEMAP_MODEL_' . $model;
            $model = new $className();
            $subsection = $model->getSubsectionUrl();

            if ($subsection) {
                $tree = $model->getTree($firstPageItemCount);
            } else {
                $tree = $model->getTree();
            }
            
            if (!$tree->countChildren()) {
                continue;
            }
            $childNodes = $tree->getChildren();
            $childCnt = $tree->countChildren();
            for($i=0; $i<$childCnt; $i++) {
                $childNode = $childNodes[$i];
                $childLabel = $childNode->getLabel();
                switch($childLabel) {
                    case 'Home' :
                        $new_tree[0]->insertChild($childNode, 0);
                        $HomeNode = $childNode;
                        break;
                    case 'Info' :
                        $new_tree[0]->insertChild($childNode, 2);
                        break;
                    case 'Gallery' :
                        $new_tree_childNodes = $new_tree[0]->getChildren();
                        $new_tree_childNodes[0]->insertChild($childNode, 3);
                        break;
                    case 'Contact Us' :
                        $new_tree_childNodes = $new_tree[0]->getChildren();
                        $new_tree_childNodes[0]->insertChild($childNode, 4);
                        break;
                    case 'Community' :
                        $new_tree[1]->insertChild($childNode, 0);
                        break;                    
                    case 'MyTeamShop' :
                        $childNode->removeChild();
                        $new_tree_childNodes = $new_tree[0]->getChildren();
                        $new_tree_childNodes[0]->insertChild($childNode, 0);
                        
                        $query = "select *  from [|PREFIX|]pages where pageparentid = 4 order by pagetitle;";
                        $result = $GLOBALS['ISC_CLASS_DB']->Query($query);

                        $childNode1 = new ISC_SITEMAP_NODE();
                        $childNode1->setLabel($childNode->getLabel());
                        $childNode1->setUrl($childNode->getUrl());
                        $childNode1->setAlt($childNode->getAlt());
                        $childNode1->setParent($childNode->getParent());
                        $childNode1->setSummary($childNode->getSummary());
                        
                        if($GLOBALS['ISC_CLASS_DB']->CountResult($result) > 0) {
                            while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
                                $subnode = new ISC_SITEMAP_NODE();
                                $subnode->setLabel($row['pagetitle']);
                                $subnode->setUrl(pageLink($row['pageid'], $row['pagetitle']));
                                $subnode->setAlt('');
                                $subnode->setSummary('');
                                $subnode->setParent($childNode1);
                                
                                $childNode1->appendChild($subnode);
                            }
                        }
                        
                    $new_tree[0]->insertChild($childNode1, 1);
                    break;
                case 'Tiffany Jane' :
                    $new_tree_childNodes = $new_tree[0]->getChildren();
                    $new_tree_childNodes[0]->insertChild($childNode, 2);
                    break;
                case 'Products' :
                    $new_tree[1]->insertChild($childNode, 1);
                    break;                    
                }
            }
            $ModelSubsectionURL[$index] = $model->getSubsectionUrl();
            if ($subsection && $model->countAll() > $firstPageItemCount)
                $ModelHideAllLink = 1;
            $ModelHeading[$index] = isc_html_escape($model->getHeading());
        }
               
        // add News in home column
        if($HomeNode) {
            $childNode = new ISC_SITEMAP_NODE();
            $childNode->setLabel('News');
            $childNode->setUrl($GLOBALS['ShopPath'].'/news.php');
            $childNode->setParent($HomeNode);
            $HomeNode->insertChild($childNode, 1);
        }
               
        for($index = 0; $index < 2; $index++) {
            if (!$new_tree[$index]->countChildren()) {
                return;
            }

            $html = $new_tree[$index]->generateNodeHtml();

            $template->assign('ModelHideAllLink', 'display: none');
            $template->assign('ModelSubsectionURL', $ModelSubsectionURL[$index]);
            if ($ModelHideAllLink) {
                $template->assign('ModelHideAllLink', '');
            }

            $template->assign('ModelType', 'Pages');
            $template->assign('ModelHeading', $ModelHeading[$index]);
            $template->assign('ModelBody', $html);
            $GLOBALS['SNIPPETS']['SitemapContent'] .= $template->getSnippet('SitemapSection');
        }        

		/*foreach ($models as &$model) {
			$modelType = ucfirst(strtolower($model));
			$className = 'ISC_SITEMAP_MODEL_' . $model;
			$model = new $className();
			$subsection = $model->getSubsectionUrl();

			if ($subsection) {
				$tree = $model->getTree($firstPageItemCount);
			} else {
				$tree = $model->getTree();
			}

			if (!$tree->countChildren()) {
				continue;
			}

			$html = $tree->generateNodeHtml();

			$template->assign('ModelHideAllLink', 'display: none');
			$template->assign('ModelSubsectionURL', $model->getSubsectionUrl());
			if ($subsection && $model->countAll() > $firstPageItemCount) {
				$template->assign('ModelHideAllLink', '');
			}

			$template->assign('ModelType', $modelType);
			$template->assign('ModelHeading', isc_html_escape($model->getHeading()));
			$template->assign('ModelBody', $html);
			$GLOBALS['SNIPPETS']['SitemapContent'] .= $template->getSnippet('SitemapSection');

		
		} */

	
	}
}	

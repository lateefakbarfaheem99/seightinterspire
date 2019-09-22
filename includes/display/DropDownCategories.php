<?php
class ISC_DROPDOWNCATEGORIES_PANEL extends  PRODUCTS_PANEL
{
	public function SetPanelSettings() {
		$count = 0;
		$GLOBALS['SNIPPETS']['DropDownCategories'] = '';
		$GLOBALS['SNIPPETS']['DropDownCategoryItem'] = '';
        $GLOBALS['SNIPPETS']['SubCategories'] = '';
        $GLOBALS['SNIPPETS']['SubCategories1'] = '';
		$GLOBALS['SNIPPETS']['SubCategoryProducts'] = '';
        
	    $query=$this->getMainCategoriesQuery();  
		$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
        
        $GLOBALS['SNIPPETS']['SubCategories'] .= '<div id="slides" class="category-slides"  style="display: none;">';
        $GLOBALS['SNIPPETS']['SubCategories'] .= '<div class="nav-drop-arrow-l "></div>';
        $GLOBALS['SNIPPETS']['SubCategories'] .= '<div class="nav-drop-slide-frame ">';
        
        $GLOBALS['SNIPPETS']['SubCategories1'] .= '<ul id="nav-drop-sub-nav">';
		while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
            $GLOBALS['CategoryMainURL'] = CatLink('', $row['catname'], true);
		    $this->setCategoryGlobals($row);
			$GLOBALS['SNIPPETS']['DropDownCategories'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("DropDownCategoryItem");
            $categoryid = (int)$row['categoryid'];
            
            if ( $categoryid==14 ) {
                $query = $this->getSubCategoriesQuery($categoryid);
                $subCategoryies = $GLOBALS['ISC_CLASS_DB']->Query($query);
                $GLOBALS['SNIPPETS']['SubCategories'] .= '    <div class="nav-drop-slide-container" id="nav-drop-slide-container">';

                while ($row1 = $GLOBALS['ISC_CLASS_DB']->Fetch($subCategoryies)) {
                    $CategoryLink = CatLink($row1['categoryid'], $row1['catname'], false);
                    if(!empty($row1['catimagefile'])) {
                        list($width, $height, $type, $attr) = getimagesize('product_images/'.$row1['catimagefile']);
                        if($width)
                            $dimension = 'width="'.$width.'" height="'.$height.'"';
                        else
                            $dimension = '';
                        $CatThumb='<img src="'.$GLOBALS['ISC_CFG']['ShopPath'].'/product_images/'.$row1['catimagefile'].'" '.$dimension.' alt="'.$row1['catname'].'"/>';
                    } else {
                        list($width, $height, $type, $attr) = getimagesize('templates/Seight/images/ProductDefault.gif');
                        if($width)
                            $dimension = 'width="'.$width.'" height="'.$height.'"';
                        else
                            $dimension = '';
                        $CatThumb='<img src="'.$GLOBALS['ISC_CFG']['ShopPath'].'/templates/Seight/images/ProductDefault.gif" '.$dimension.' alt="Coming Soon"/>';
                    }
                    $GLOBALS['SNIPPETS']['SubCategories'] .= '
						<div style="clear: none; float: left;" class="slide-container-item">
                        	<a class="sub_sub_cat" href="'.$CategoryLink.'">
								<table>
									<tr>
										<td class="MenuCatImage"> '.$CatThumb.' </td>
									</tr>
									<tr>
										<td class="MenuCatName"> '.$row1['catname'].' 
											<span class="category-hint">
												View Category &gt;
											</span>
										</td>
									</tr>
								</table>
                        	</a>
						</div>';
                }
                $GLOBALS['SNIPPETS']['SubCategories'] .= '</div> <!-- .nav-drop-slide-container -->';
            } else {
                $query = $this->getSubCategoriesQuery($categoryid);
                $subCategoryies = $GLOBALS['ISC_CLASS_DB']->Query($query);
                
                while ($row1 = $GLOBALS['ISC_CLASS_DB']->Fetch($subCategoryies)) {
                    $CategoryLink= CatLink($row1['categoryid'], $row1['catname'], false);
                    $GLOBALS['SNIPPETS']['SubCategories1'] .= '<li id="subcat-'.$row1['categoryid'].'"><a href="'.$CategoryLink.'">'.$row1['catname'].'</a></li>';
                    
                    $query1 = $this->getProductsByCategory($row1['categoryid']);
                    $products = $GLOBALS['ISC_CLASS_DB']->Query($query1);
                    
                    $GLOBALS['SNIPPETS']['SubCategoryProducts'] .= '        <div class="nav-drop-slide-container" id="nav-drop-slide-'.$row1['categoryid'].'">';

                    while ($row2 = $GLOBALS['ISC_CLASS_DB']->Fetch($products)) {
                        $ProductId= (int)$row2['productid'];
                        $ProductName= isc_html_escape($row2['prodname']);
                        $ProductLink= ProdLink($row2['prodname']);
                        $desc = strip_tags($row2['proddesc']);
                        //$ProductThumb= ImageThumb($row);
                        $query2 = 'SELECT  pi.imagefilethumb FROM [|PREFIX|]product_images pi WHERE  pi.imageprodid='.$ProductId;
                        $result2 = $GLOBALS['ISC_CLASS_DB']->Query($query2);
                        $row3 = $GLOBALS['ISC_CLASS_DB']->Fetch($result2);
                        if(!empty($row3['imagefilethumb'])) {
                            list($width, $height, $type, $attr) = getimagesize('product_images/'.$row3['imagefilethumb']);
                            if($width)
                                $dimension = 'width="'.$width.'" height="'.$height.'"';
                            else
                                $dimension = '';
                            $ProductThumb='<img alt="'.$row2['prodname'].'" src="'.$GLOBALS['ISC_CFG']['ShopPath'].'/product_images/'.$row3['imagefilethumb'].'" '.$dimension.'/>';
                        }else{
                            list($width, $height, $type, $attr) = getimagesize('templates/Seight/images/ProductDefault.gif');
                            if($width)
                                $dimension = 'width="'.$width.'" height="'.$height.'"';
                            else
                                $dimension = '';
                            $ProductThumb='<img alt="Coming Soon" src="'.$GLOBALS['ISC_CFG']['ShopPath'].'/templates/Seight/images/ProductDefault.gif" '.$dimension.'/>';
                        }

                        $GLOBALS['SNIPPETS']['SubCategoryProducts'] .= '
							<div style="clear: none; float: left;" class="slide-container-item">
								<a class="sub_sub_cat" href="'.$ProductLink.'">
									<table>
										<tr>
											<td class="MenuProductImage"> '.$ProductThumb.' </td>
										</tr>
										<tr>
											<td class="MenuProductName"> '.$ProductName.' 
												<span class="category-hint">
													View Product &gt;
												</span>
											</td>
										</tr>
									</table>
								</a>
							</div>';
                    }
                    $GLOBALS['SNIPPETS']['SubCategoryProducts'] .= '</div> <!-- .nav-drop-slide-container -->';
                }
            }            
		}
        $GLOBALS['SNIPPETS']['SubCategories'] .= $GLOBALS['SNIPPETS']['SubCategoryProducts'];
        $GLOBALS['SNIPPETS']['SubCategories'] .= '</div> <!-- .nav-drop-slide-frame -->';
        $GLOBALS['SNIPPETS']['SubCategories'] .= '<div class="nav-drop-arrow-r"></div>';
        $GLOBALS['SNIPPETS']['SubCategories'] .= '</div>';
        $GLOBALS['SNIPPETS']['SubCategories1'] .= '</ul>';
        $GLOBALS['SNIPPETS']['SubCategories'] = $GLOBALS['SNIPPETS']['SubCategories1'].$GLOBALS['SNIPPETS']['SubCategories'];
        $GLOBALS['testygh'] = 'test';
    }
    
    public function getMainCategoriesQuery() {
		$query = "
			SELECT c.* "."
			FROM [|PREFIX|]categories c
			WHERE c.catvisible=1 AND c.catparentid=0 order by categoryid asc";
		
		return $query;
	}
	
	public function setCategoryGlobals($row) {
		$GLOBALS['CategoryId'] = (int)$row['categoryid'];
		$GLOBALS['CategoryName'] = isc_html_escape($row['catname']);
        $GLOBALS['CategoryNameURL'] = MakeURLSafe(isc_html_escape($row['catname']));
		$GLOBALS['CategoryDescription'] = isc_html_escape($row['catdesc']);
	}
    
    public function getSubCategoriesQuery($catid)
    {
        /*$query = "
                SELECT c.* "."
                FROM [|PREFIX|]categories c
                WHERE c.catvisible=1 AND c.catparentid=".$catid;
        */
        $query = "
                SELECT c.categoryid,c.catname ,c.catimagefile "."
                FROM [|PREFIX|]categories c
                WHERE c.catvisible=1 AND c.catparentid=".$catid;
        return $query;
    }
    
    public function getProductsByCategory($catid)
    {
        $query = 'SELECT DISTINCT p.productid,p.prodname,p.proddesc    FROM [|PREFIX|]products p,[|PREFIX|]categoryassociations caperm
        WHERE  p.prodvisible=1 AND   caperm.productid = p.productid AND caperm.categoryid='.$catid  ;
        return $query;
    }
    
}

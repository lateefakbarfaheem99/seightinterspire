<?php

	class ISC_CHANGEURLBYWAS33M
	{

		private $prod 		= '';
		private $Category 	= '';
		private $Brand 		= '';
	
		public	function GetProductUrl($prod){

			// By	https://www.odesk.com/users/~~344b11d6d5ab2afb (mwaseemriaz@gmail.com).
			// Change product name to product link.
			$linkSql 		= 	"SELECT `prodlink` FROM [|PREFIX|]products WHERE	`prodname`	=	'$prod'";
			$linkQuery		=	$GLOBALS['ISC_CLASS_DB']->Query($linkSql);
			$linkResult		=	$GLOBALS['ISC_CLASS_DB']->Fetch($linkQuery);
			
			if($linkResult['prodlink']	==	''){
			
				$GLOBALS['ISC_CLASS_DB']->Query("UPDATE [|PREFIX|]products SET `prodlink` = `prodname` WHERE `prodname` = '$prod' ");
				$linkQuery		=	$GLOBALS['ISC_CLASS_DB']->Query($linkSql);
				$linkResult		=	$GLOBALS['ISC_CLASS_DB']->Fetch($linkQuery);
			
			}
			
			return	MakeUrlSafe($linkResult['prodlink']);

		}

		public function ChangeProductLinkToName($prodLink){

			// Get product info from database.
			$Sql	=	"SELECT `prodlink`, `prodname`,`prodpagename` FROM [|PREFIX|]products	";
			$Query	=	$GLOBALS['ISC_CLASS_DB']->Query($Sql);
			while($Prod	=	$GLOBALS['ISC_CLASS_DB']->Fetch($Query)){
			
				if(	MakeUrlSafe($Prod['prodlink'])	==	$prodLink	){
					return MakeUrlSafe($Prod['prodpagename']);
				
				}
			
			}

		}

		public	function GetCategoryUrl($CategoryName){

			// Edited By	https://www.odesk.com/users/~~344b11d6d5ab2afb (mwaseemriaz@gmail.com).
			//Change category name to category link.
			$linkSql 		= 	"SELECT `catlink` FROM [|PREFIX|]categories WHERE	`catname`	=	'$CategoryName'";
			$linkQuery		=	$GLOBALS['ISC_CLASS_DB']->Query($linkSql);
			$linkResult		=	$GLOBALS['ISC_CLASS_DB']->Fetch($linkQuery);
		
			if($linkResult['catlink']	==	''){
		
				// fill catlink with catname
				$GLOBALS['ISC_CLASS_DB']->Query("UPDATE [|PREFIX|]categories	SET		`catlink` = `catname` 
																				WHERE	`catname` = '$CategoryName' 
												");
			
				$linkSql 		= 	"SELECT `catlink` FROM [|PREFIX|]categories WHERE	`catname`	=	'$CategoryName'";
				$linkQuery		=	$GLOBALS['ISC_CLASS_DB']->Query($linkSql);
				$linkResult		=	$GLOBALS['ISC_CLASS_DB']->Fetch($linkQuery);
		
			}
		
			return	$linkResult['catlink'];

		}

		public function ChangeCategoryLinkToName($cats){

			foreach ($cats	AS	$key => $catLink){

				$catLink	=	MakeUrlSafe($catLink);
				// Get product info from database.
				$Sql	=	"SELECT `catlink`, `catname` FROM `[|PREFIX|]categories	";
				$Query	=	$GLOBALS['ISC_CLASS_DB']->Query($Sql);
				
				while($Cat	=	$GLOBALS['ISC_CLASS_DB']->Fetch($Query)){
				
					if(MakeUrlSafe($Cat['catlink'])	!=	$catLink)
						continue;
				
					$cats[$key]	= MakeUrlSafe($Cat['catname']);
//					$cats[$key]	= str_replace(' ','-', $cats[$key]);

				}

			}
/*
			foreach ($cats	AS	$key => $catLink){
				echo $catLink.'<br />';
			}
*/			
			return $cats;

		}

	}
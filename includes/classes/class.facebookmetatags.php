<?php

	class ISC_FACEBOOKMETATAGS
	{

		public	function get_thumbnails($item_type, $item_type_id){
			
			if($item_type	==	'products')
				$item_type	=	1;
			else	
			if($item_type	==	'news')
				$item_type	=	2;

			$thumbnails	=	'';
			$facebook_thumbnails	=	"	SELECT `item_thumb`	FROM 		`isc_facebook_thumbnails`	
																WHERE		`type`			=	'$item_type'	
																AND			`type_id`		=	'$item_type_id'
																AND			`visibility`	=	'1'
																ORDER BY	`position`	ASC
										";					
			$facebook_thumbnails	=	$GLOBALS['ISC_CLASS_DB']->Query($facebook_thumbnails);
	
			while($thumb		=	$GLOBALS['ISC_CLASS_DB']->Fetch($facebook_thumbnails)){
	
				$thumbnails	.=	'	<meta property="og:image" content="'.$GLOBALS['ShopPath'].'/facebook_thumbnails/'.$thumb['item_thumb'].'" />
';
	
			}
		
			return $thumbnails;
				
		}

	}
<?php
	/*include(dirname(__FILE__)."/init.php");
	$GLOBALS['ISC_CLASS_NEWS'] = GetClass('ISC_NEWS');
	$GLOBALS['ISC_CLASS_NEWS']->HandlePage();*/
    include(dirname(__FILE__)."/init.php");
    $GLOBALS['ISC_CLASS_TEMPLATE']->SetPageTitle('News');
    $GLOBALS['ISC_CLASS_TEMPLATE']->SetTemplate("lastnews");
    $GLOBALS['ISC_CLASS_TEMPLATE']->ParseTemplate();
?>    
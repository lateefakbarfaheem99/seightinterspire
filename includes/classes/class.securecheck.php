<?php

class ISC_SECURECHECK
{
    function HandlePage()
    {
        // Simply show the 403 page
        $GLOBALS['ISC_CLASS_TEMPLATE']->SetTemplate("securecheck");
        $GLOBALS['ISC_CLASS_TEMPLATE']->ParseTemplate();
    }
}
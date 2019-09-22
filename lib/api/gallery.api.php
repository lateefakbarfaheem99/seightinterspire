<?php
    require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'class.api.php');

    class API_GALLERY extends API
    {
        // {{{ Class variables
        public $fields = array (
            'galid',
            'galtitle',
            'galcount',
        );

        public $galid = 0;
        public $galtitle = '';
        public $galcount = 0;

        // }}}

        // {{{ setupDatabase()
        /**
        * Setup the connection to the database and some other database
        * properties
        *
        * @return void
        */
        public function setupDatabase()
        {
            $this->db = $GLOBALS['ISC_CLASS_DB'];
            $tableSuffix = 'galleries';
            $this->table = '[|PREFIX|]'.$tableSuffix;
            $this->tablePrefix = '[|PREFIX|]';
        }
        // }}}

    }
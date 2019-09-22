<?php

	function check_dublicate($table,$block_name,$product_id){
		
		$data_query	=	"	SELECT	*	FROM	`".$table."`	WHERE	`block_name`	=	'$block_name' 
																AND		`product_id`	=	'$product_id'
																LIMIT	1
						";
			
		$data_result	=	$GLOBALS['ISC_CLASS_DB']->Query($data_query);

		if(	$GLOBALS['ISC_CLASS_DB']->CountResult($data_result)	>	0	){

			header('location:'.$_SERVER['HTTP_REFERER']);
			exit();

		}

	}

	function getUrl(){

		$incoming_url 	= 	$_SERVER['HTTP_REFERER'];

		if(stristr($incoming_url, '&ok') == TRUE)
			return 	strtok($incoming_url, "&ok");
		else
		if(stristr($incoming_url, '&error') == TRUE)
			return 	strtok($incoming_url, "&error");
		else
			return 	$incoming_url;

	}


	function genRandomString($length) {

		$string	=	"";
		$characters = '0123456789abcdefghijklmnopqrstuvwxyz';

		for ($p = 0; $p < $length; $p++) {
			$string .= $characters[mt_rand(0, strlen($characters))];
		}
		return $string;
	}

	function	get_all_records($table, $groupby, $orderby, $order){

		$query	= 	"SELECT	*	FROM	`".$table."`	WHERE		`deleted`	=	'0'
														GROUP BY	`".$groupby."`	
														ORDER BY 	`".$orderby."`	".$order
					;

		return $GLOBALS['ISC_CLASS_DB']->Query($query);

	}

	function	get_some_records($table,$visible, $groupby, $orderby, $order){

		$query	= 	"SELECT	*	FROM	`".$table."`	WHERE		`visible`	=	'".$visible."'
														AND			`deleted`	=	'0'
														GROUP BY	`".$groupby."`	
														ORDER BY 	`".$orderby."`	".$order
					;

		return $GLOBALS['ISC_CLASS_DB']->Query($query);

	}

	function get_current_record($table,$field,$value){

		$sql = $GLOBALS['ISC_CLASS_DB']->Query("SELECT * 	FROM	`".$table."`	
															WHERE	`".$field."`	=	'".$value."'
															LIMIT	1	
												");

		return	$GLOBALS['ISC_CLASS_DB']->fetch($sql);

	}

	function file_upload($name, $size, $photo_path){
		
		if($name	!=	""	AND	$size	!=	""){

			$allowed_ext	=	array("jpeg", "jpg", "png", "gif","swf");
			$allowed_size	=	524288*2; // 1 MB
			$ext			=	strrchr($name, '.');

			if (in_array($ext, $allowed_ext, false)	||	$size >	$allowed_size	) {

				return 'error';

			}else{
			
				// Your file name you are uploading 
				$file_name = $name;
	
				// random 4 digit to add to our file name 
				// some people use date and time in stead of random digit 
				$random_digit=rand(0000,9999);

				//combining random digit to your file name to create new file name
				//use dot (.) to combine these two variables

				$new_file_name=$random_digit.$file_name;

				if($name != ''){

					$photo= $photo_path.$new_file_name;
					if(move_uploaded_file($_FILES['banner']['tmp_name'],$photo)){
						return $new_file_name;

					}
				}
			}
		}
	}

	function delete_file($file, $table , $field, $id){

		if (file_exists($file))
			unlink($file);

		mysql_query("	UPDATE	`" .$table. "`	SET	`".$field."`	=	''	WHERE	`id`	=	'$id'	");

	}

	#####################################
	##	Convert Numbers to words Start ##
	#####################################
	
	function convert_number($number){ 
    
		if (($number < 0) || ($number > 999999999)){ 
			throw new Exception("Number is out of range");
		} 

		$Gn 	= floor($number / 1000000);  /* Millions (giga) */ 
		$number -= $Gn * 1000000; 
		$kn 	= floor($number / 1000);     /* Thousands (kilo) */ 
		$number -= $kn * 1000; 
		$Hn 	= floor($number / 100);      /* Hundreds (hecto) */ 
		$number -= $Hn * 100; 
		$Dn 	= floor($number / 10);       /* Tens (deca) */ 
		$n 		= $number % 10;               /* Ones */ 

		$res = ""; 

		if ($Gn){ 
			$res .= convert_number($Gn) . " Million"; 
		} 

		if ($kn){ 

			$res .= (empty($res) ? "" : " ") . 
            convert_number($kn) . " Thousand"; 
		} 

		if ($Hn){ 

			$res .= (empty($res) ? "" : " ") . 
            convert_number($Hn) . " Hundred"; 
		} 

		$ones = array(	"", "One", "Two", "Three", "Four", "Five", "Six",	"Seven", "Eight", "Nine", 
						"Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", 
						"Seventeen", "Eightteen",	"Nineteen"); 

		$tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty",	"Seventy", "Eigthy", "Ninety"); 

		if ($Dn || $n){ 
		
			if (!empty($res)){ 
		
				$res .= " and "; 
			} 

			if ($Dn < 2){ 
				$res .= $ones[$Dn * 10 + $n]; 
			
			}else{
			
				$res .= $tens[$Dn]; 

				if ($n){ 

					$res .= "" . $ones[$n]; 
				} 
			} 
		} 

		if (empty($res)){ 
			$res = "zero"; 
		} 

		return $res; 

	}
	###################################
	##	Convert Numbers to words END ##
	###################################
	

?>
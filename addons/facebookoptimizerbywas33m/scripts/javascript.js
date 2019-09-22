// JavaScript Document

	function digitsOnly(evt){
		
    	var charCode = (evt.which) ? evt.which : event.keyCode
        
		if	(charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46){
			alert("Only Numbers and dot are allowed in this field !");
  	    	return false;
		}else{
  	 		return true;
		}

	}

	function get_confirm(){
		if (confirm(" Are you sure ! "))
			return true;

		else 
			return false;

	}

	function SubmitForm(process,form) {
		document.forms[form].action	=	'action.php?' + process;
		
	}
	
	// check uncheck all check boxes
	function checkUncheck(source) {
		checkboxes = document.getElementsByTagName('input');
		for(var i in checkboxes)
			if(checkboxes[i].type == 'checkbox'	&&	checkboxes[i].id	==	'check')
				checkboxes[i].checked = source.checked;
	}
	
	// Atleast one checkbox should be selected
	function CheckedCkeckBoxes() {
		var CheckedCkeckBoxes	=	0;
		var checkboxes = document.getElementsByTagName('input');
		for(var i in checkboxes){
			if(checkboxes[i].type == 'checkbox'	&&	checkboxes[i].id	==	'check'	&&	checkboxes[i].checked	==	true)
				CheckedCkeckBoxes++;
		}

		return	CheckedCkeckBoxes;
			

	}
	
/* JavaScript Document
	Created By Muhammad Waseem Riaz.
	03324514134.
	www.waseemsite.tk
	If you need any help in this then do contact me.
*/


$(document).ready(function(){

		// Stop form process function if validation errors come
		var checkValidation = function() {
			if($("#check_validation").html()	==	'error'	){
				$("#check_validation").html('');
				return false;
			}
		
		};


		// Toggle prodfeatured
		$(".prodfeatured").click(function(){
			
			var table	=	'';
			
			var table	=	'isc_products';
				
			var Id			=	$(this).attr("id");
			var featured	=	$(this).attr("accesskey");
					
			$.post("?ToDo=runAddon&addon=addon_changeurlbywas33m&actionMode",{ 	Ajax		:	'toggle_prodfeatured',
																				Id			:	Id,
																				Table		:	table,
																				featured	:	featured
			
			},function(response){

				var	pattern 		= 	/<response_msg>(.*?)<\/response_msg>/;
				var matches 		= 	response.match(pattern);
				response 			= 	matches[1];

					if(response	==	1)
						$('.prodfeatured'+Id).html('<img src="images/addons/tick.png"> ');
					else
						$('.prodfeatured'+Id).html('<img src="images/addons/cross.png"> ');

						$('.prodfeatured'+Id).attr('accesskey',response);

				});

			return false;
			
		});

		// Toggle visibility
		$(".visible").click(function(){
			
			var table	=	'';
			
			if($(this).hasClass('products')){
				var type	=	'products';
				var table	=	'isc_products';
				
			}else
			if($(this).hasClass('categories')){
				var type	=	'categories';
				var table	=	'isc_categories';
			}

				var Id			=	$(this).attr("id");
				var visibility	=	$(this).attr("accesskey");
					
				$.post("?ToDo=runAddon&addon=addon_changeurlbywas33m&actionMode",{ 	Ajax		:	'toggle_visibility',
																					Id			:	Id,
																					Table		:	table,
																					Type		:	type,
																					visibility	:	visibility
			
				},function(response){

					var	pattern 		= 	/<response_msg>(.*?)<\/response_msg>/;
					var matches 		= 	response.match(pattern);
					response 			= 	matches[1];

					if(response	==	1)
						$('.visible'+Id).html('<img src="images/addons/tick.png"> ');
					else
						$('.visible'+Id).html('<img src="images/addons/cross.png"> ');

						$('.visible'+Id).attr('accesskey',response);

				});

			return false;
			
		});

		//Delete Selected Records.
		$('.DelSelected').click(function(){
			
			if(CheckedCkeckBoxes()	==	0){
				alert('Please select atleast one');
				return false;
			}
			
			if (confirm(" Are you sure ! ")){

				var total	=	$("#TotalRows").val();

				while (total	>=	1){

					if($('input:checkbox:checked.check'+total).val()	!==	undefined){

						var Table	=	'isc_mindviewstudio_sampleorder';

						var DelId = $('input:checkbox:checked.check'+total).val();
							
						$.post("?ToDo=runAddon&addon=addon_sampleorderbymindviewstudio&actionMode",{ 	Ajax	:	'DelSelected',
																										Table	:	Table,
																										Id		:	DelId
						},	function(){});

					}

					total--;
					
				}

			}
		
			setTimeout(location.reload, 1500);

		});

	//Update Selected Records.
	$('.UpdateSelected').click(function(){
			
		if(CheckedCkeckBoxes()	==	0){
			alert('Please select atleast one');
			return false;
		}
			
		var total	=	$("#TotalRows").val();

		while (total	>=	1){

			if($('input:checkbox:checked.check'+total).val()	!==	undefined){

				var Id 				= 	$('input:checkbox:checked.check'+total).val();
				var	Edit			=	$('#Edit'+Id).val();
				var	product_id		=	$('#product_id'+Id).val();
				var	sample_size		=	$('#sample_size'+Id).val();
				var	sample_price	=	$('#sample_price'+Id).val();
							
				$.post($('.update_sample_order').attr('action'),{ 	Edit			:	Edit,
																	product_id		:	product_id,
																	sample_size		:	sample_size,
																	sample_price	:	sample_price
				},	function(){});

			}

			total--;
						
		}

	});

	$('.update').submit(function(){
	
		$('#MainMessage').fadeOut('slow');

		var Type		=	$(this).hasClass('products')	?	'products' : 'categories';

		var Id			=	$(this).attr('name');
		var	itemLink	=	Type	==	'products'	?	$('#prodlink'+Id).val()	:	$('#catlink'+Id).val();

		$.post(	$(this).attr('action'),	{ 	Edit		:	Id,
											Type		:	Type,
											itemLink	:	itemLink

		},	function(response){

				var	pattern 		= 	/<response_msg>(.*?)<\/response_msg>/;
				var matches 		= 	response.match(pattern);
				response 			= 	matches[1];
				$('.MessageBox').text(response);
				$('.MessageBox').addClass('MessageBoxSuccess');
				$('#MainMessage').fadeIn('slow');
			
		});
	
		return false;	
	});

});

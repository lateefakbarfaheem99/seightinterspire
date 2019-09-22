/* JavaScript Document
	Created By Muhammad Waseem Riaz.
	03324514134.
	www.waseemsite.tk
	If you need any help in this then do contact me.
*/

$(document).ready(function(){

		// All flip functions
			$("#newFlip").click(function(){
			    $("#newPanel").slideToggle("slow");
				return false;
			});

		// Stop form process function if validation errors come
		var checkValidation = function() {
			if($("#check_validation").html()	==	'error'	){
				$("#check_validation").html('');
				return false;
			}
		
		};

		// Drag and drop function
		$("#contentLeft ul").sortable({ opacity: 0.6, cursor: 'move', update: function() {

			var Table	=	$('#table_name').val();
			
			var order = $(this).sortable("serialize") + '&Table='+Table+'&Ajax=DragAndDropSorting';
			
			$.post("?ToDo=runAddon&addon=addon_galleryeditorbywas33m&actionMode", order, function(response){

					var	pattern 		= 	/<response_msg>(.*?)<\/response_msg>/;
					var matches 		= 	response.match(pattern);
					response 			= 	matches[1];
//					alert(response);
			}); 															 

		}								  

		});
		
		// Toggle visibility
		$(".visible").click(function(){
			
				var table	=	'isc_mindviewstudio_sampleorder';
					
				var Id			=	$(this).attr("id");
				var visibility	=	$(this).attr("accesskey");
					
				if(	$(this).hasClass('All')	){
					$.post("?ToDo=runAddon&addon=addon_galleryeditorbywas33m&actionMode",{ 	Ajax		:	'toggle_visibility',
																									Table		:	table,
																									productId	:	Id,
																									visibility	:	visibility
			
					},function(response){

						var	pattern 		= 	/<response_msg>(.*?)<\/response_msg>/;
						var matches 		= 	response.match(pattern);
						response 			= 	matches[1];
						
						if(response	==	1)
							$('.visible'+Id).html('<img src="images/addons/tick.png"> ');
						else
							$('.visible'+Id).html('<img src="images/addons/cross.png"> ');
				
						$('.visible'+Id).attr("accesskey",response);

					});

				}else{

					$.post("?ToDo=runAddon&addon=addon_galleryeditorbywas33m&actionMode",{ 	Ajax	:	'toggle_visibility',
																									Table	:	table,
																									Id		:	Id
			
					},function(response){

						var	pattern 		= 	/<response_msg>(.*?)<\/response_msg>/;
						var matches 		= 	response.match(pattern);
						response 			= 	matches[1];

						if(response	==	1)
							$('.visible'+Id).html('<img src="images/addons/tick.png"> ');
						else
							$('.visible'+Id).html('<img src="images/addons/cross.png"> ');
				
					});

				}

			return false;
			
		});

		// Toggle gallery thumbnail
		$(".gallery_thumbnail_radio").live('click', function(){

				var table =	'isc_galleries_images';
				var Id = $(this).attr("id");
				var galleryId = $("#galleryId").val();
				
				$(".gallery_thumbnail_radio").each(function(index, element) {

					if($(this).attr('id')	!=	Id){
						$(this).removeAttr('checked')
					
					}

				});				
				
				$.post("?ToDo=runAddon&addon=addon_galleryeditorbywas33m&actionMode",{ 	Ajax	:	'toggle_thumbnail',
																						Table	:	table,
																						Id		:	Id,
																						galleryId : galleryId
		
				},function(response){

					var	pattern 		= 	/<response_msg>(.*?)<\/response_msg>/;
					var matches 		= 	response.match(pattern);
					response 			= 	matches[1];
					/* alert(response) */
		
				});
			
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
							
						$.post("?ToDo=runAddon&addon=addon_galleryeditorbywas33m&actionMode",{ 	Ajax	:	'DelSelected',
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

	$('.update_image_name').submit(function(){
	
		$('#MainMessage').fadeOut('slow');

		var ImageId				=	$(this).attr('name');
		var	image_display_name	=	$('#image_title'+ImageId).val();
		
		$.post(	$(this).attr('action'),	{ 	Edit				:	ImageId,
											image_display_name	:	image_display_name
		},	function(){
			
			$('.MessageBox').text('The changes you made have been saved.');
			$('.MessageBox').addClass('MessageBoxSuccess');
			$('#MainMessage').fadeIn('slow');
			
		});
	
		return false;	
	});

});

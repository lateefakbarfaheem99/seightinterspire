/*!
 * Drop Menu
 *
*/
var one_width = 182;
$(document).ready(function($) {
    var animating=false;
     // Primary Nav Dropdown Functions
    var id = 0;
     
	$("#nav-primary li").mouseenter(function(e) {
	//get the id of the category
	  id=$(this).attr('id').substr(4, 6);
	  if(id==33){
		$("#nav-drop").hide();
		return;
	  }
	  
      //get the sub menu for the selected menu
	  if(id==14) {
			$(".nav-drop").css('height','250px');
            $(".nav-drop-slide-container").css('display', 'none');
            $("#nav-drop-slide-container").css('display','block');
			$("#nav-drop-sub-nav").hide();
			$(".category-slides").show();
            
            setLeftRightButtonState(id);
            
			//show hints on mouse enter
			$('.slide-container-item').mouseenter(function() {
					$('.drop-slide-image').css('top', '0px');
					$('.category-hint').css('top' ,'200px');
					//$(this).find('.drop-slide-image').animate({top: 20}, 150);
					//$(this).find('.category-hint').animate({top: 100}, 150);
                    $(this).find('.drop-slide-image').css('top','20px');
                    $(this).find('.category-hint').css('top','100px');
			});	
		} else {
			$("#nav-drop-sub-nav").show();
			$(".category-slides").hide('');
			$(".nav-drop").css('height','38px');
		}
		
        $(".nav-drop").slideDown(50, function() {
		    // slide down and end animation
		    // Secondary Nav Dropdown Functions
			$("#nav-drop-sub-nav li").mouseenter(function(f) {
			//get the id of the category
			  id=$(this).attr('id').substr(7, 9);
              
              $(".nav-drop-slide-container").css('display', 'none');
			  
              $("#nav-drop-slide-"+id).css('display','block');
              setLeftRightButtonState(id);
              
			  //get the sub menu for the selected menu
			  $(".nav-drop").css('height','250px');
			  $(".category-slides").slideDown(50, function() {
					//show hints on mouse enter
					$('.slide-container-item').mouseenter(function() {
							$('.drop-slide-image').css('top', '0px');
							$('.category-hint').css('top' ,'200px');
							//$(this).find('.drop-slide-image').animate({top: 20}, 150);
							//$(this).find('.category-hint').animate({top: 100}, 150);
                            $(this).find('.drop-slide-image').css('top','20px');
                            $(this).find('.category-hint').css('top','100px');
					});	
				});						
			});
	
	    });						
	});
	$("#nav-drop").mouseleave(function(e) {
		$("#nav-drop").delay(1000).slideUp(500, function() {
		});
	});
    $("#nav-drop").mouseenter(function(e) {
        $("#nav-drop").stop(true, true);
    });
    $(".nav-drop-arrow-l").click(function() {
        if(id == 0)
            return false;
        else if(id==14) {
            if (!($(this).hasClass("disabled")) && !animating) {
                var myMargin = $(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-container").css("left");
                var myShift = parseInt(myMargin.split("p")[0]) + one_width;
                
                if (myShift != one_width) 
                    animating = true;
                $(this).siblings(".nav-drop-arrow-r").removeClass("disabled");
                $(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-container").animate({left: myShift.toString() + "px"}, 700, function() {
                    if (myShift == 0) $(this).parents(".nav-drop-slide-frame").siblings(".nav-drop-arrow-l").addClass("disabled");
                    animating = false;
                });
            }            
        } else {
            if (!($(this).hasClass("disabled")) && !animating) {
                var myMargin = $(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-"+id).css("left");
                var myShift = parseInt(myMargin.split("p")[0]) + one_width;
                
                if (myShift != one_width) 
                    animating = true;
                    $(this).siblings(".nav-drop-arrow-r").removeClass("disabled");
                    $(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-"+id).animate({left: myShift.toString() + "px"}, 700, function() {
                if (myShift == 0) $(this).parents(".nav-drop-slide-frame").siblings(".nav-drop-arrow-l").addClass("disabled");
                animating = false;
              });
            }            
        }
    });

    $(".nav-drop-arrow-r").click(function() {
        if(id == 0)
            return false;
        else if(id==14) {
            var frameWidth = $(this).siblings(".nav-drop-slide-frame").css('width');
            var numItems = $(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-container").children('.slide-container-item').length;
            var itemWidth = $(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-container").children('.slide-container-item').css('width');
            
            // If there are less than the max number of items in the frame then don't scroll
            if ((numItems * parseInt(itemWidth)) <= parseInt(frameWidth))
                return;

            // make sure not disabled and another animation isn't happening
            if (!($(this).hasClass("disabled")) && !animating) {
                
                // get current margin
                var myMargin = $(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-container").css("left");
                
                // calculate new margin
                var myShift = parseInt(myMargin.split("p")[0]) - one_width;
                
                // calculate end of slides
                var maxShift = (($(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-container").children(".slide-container-item").size()) * (-one_width)) + 987;
                
            }
            // if not at end of slides
            if (myShift != maxShift) {
                
                // start animation
                animating = true;
                
                // remove "disabled" class from other arrow            
                $(this).siblings(".nav-drop-arrow-l").removeClass("disabled");
                
                
                // animate to new margin
                $(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-container").animate({left: myShift.toString() + "px"}, 700, function() {
                    // when complete, check to see if end of slides and if so, disable arrow
                    if (myShift <= maxShift) $(this).parents(".nav-drop-slide-frame").siblings(".nav-drop-arrow-r").addClass("disabled");
                    // end animation
                    animating = false;
                });
            }            
        } else {
            var frameWidth = $(this).siblings(".nav-drop-slide-frame").css('width');
            var numItems = $(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-"+id).children('.slide-container-item').length;
            var itemWidth = $(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-"+id).children('.slide-container-item').css('width');
            
            // If there are less than the max number of items in the frame then don't scroll
            if ((numItems * parseInt(itemWidth)) <= parseInt(frameWidth))
                return;

            // make sure not disabled and another animation isn't happening
            if (!($(this).hasClass("disabled")) && !animating) {
                
                // get current margin
                var myMargin = $(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-"+id).css("left");
                // calculate new margin
                var myShift = parseInt(myMargin.split("p")[0]) - one_width;
                
                // calculate end of slides
                var maxShift = (($(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-"+id).children(".slide-container-item").size()) * (-one_width)) + 987;
                
            }
            // if not at end of slides
            if (myShift != maxShift) {
                
                // start animation
                animating = true;
                
                // remove "disabled" class from other arrow            
                $(this).siblings(".nav-drop-arrow-l").removeClass("disabled");
                
                // animate to new margin
                $(this).siblings(".nav-drop-slide-frame").children("#nav-drop-slide-"+id).animate({left: myShift.toString() + "px"}, 700, function() {
                    // when complete, check to see if end of slides and if so, disable arrow
                    if (myShift <= maxShift) $(this).parents(".nav-drop-slide-frame").siblings(".nav-drop-arrow-r").addClass("disabled");
                    // end animation
                    animating = false;
                });
            }            
        }
    });
});

function setLeftRightButtonState(id) {
    if(id == 0)
        return false;
    var myMarginLeft;
    var maxShift;
    if(id == 14) {
        myMarginLeft = $('.nav-drop-arrow-l').siblings(".nav-drop-slide-frame").children("#nav-drop-slide-container").css("left");
        // calculate end of slides
        maxShift = (($('.nav-drop-arrow-l').siblings(".nav-drop-slide-frame").children("#nav-drop-slide-container").children(".slide-container-item").size()) * (-one_width)) + 987;
    } else {
        myMarginLeft = $('.nav-drop-arrow-l').siblings(".nav-drop-slide-frame").children("#nav-drop-slide-"+id).css("left");
        // calculate end of slides
        maxShift = (($('.nav-drop-arrow-l').siblings(".nav-drop-slide-frame").children("#nav-drop-slide-"+id).children(".slide-container-item").size()) * (-one_width)) + 987;
    }
    myMarginLeft = parseInt(myMarginLeft.split("p")[0]);
    
    $('.nav-drop-arrow-l').removeClass("disabled");
    $('.nav-drop-arrow-r').removeClass("disabled");
    if (myMarginLeft == 0)
        $('.nav-drop-arrow-l').addClass("disabled");
    if(myMarginLeft <= maxShift)
        $('.nav-drop-arrow-r').addClass("disabled");        
}
   
    

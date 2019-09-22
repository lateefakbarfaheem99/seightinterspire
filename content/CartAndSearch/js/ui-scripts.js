

$(document).ready(function() {
	jQuery.each($('select[name^="product_options"]'), function() {
		$(this).change(function() {
			//console.log($(this));
			//console.log($(this).attr('name'));
			//console.log($(this).attr('name').split("["));
			var optId = parseInt($(this).attr('name').split("[")[1]);
			//console.log(variants);
			//console.log("optId:", optId);
			
			var optVal = 0;
			$("#po" + optId +  " option:selected").each(function () {
				optVal = parseInt($(this).attr('value'));
			});
			//console.log("optVal: ", optVal);
			

			var selOpts = new Array();
			var selVals = new Array();
			jQuery.each($('select[name^="product_options"]'), function() {
				var k = parseInt($(this).attr('name').split("[")[1]);
				var v = 0;
				$("#po" + k +  " option:selected").each(function () {
					v = parseInt($(this).attr('value'));
				})
				selOpts[selOpts.length] = k;
				selVals[selVals.length] = v;
			});
			//console.log(selOpts);
			//console.log(selVals);


			$.each(variants, function(vIdx, v) {
				//console.log(arguments);
				if (v != undefined) {
					//console.log(v);
					//console.log(optId);
					//console.log(optVal);
					//console.log(v[1][optId]);
					if (parseInt(v[1][selOpts[0]]) == selVals[0] && parseInt(v[1][selOpts[1]]) == selVals[1]) {
						//console.log(v[0][5]);
						$('.prod_buy_control').attr('rel', v[0][5]);
					}
				}
			});

		});
	});


		

	if ($(".related_product_item").length < 4) {
			$(".prod_suggest_nav_prev").css("backgroundImage", "none");
			$(".prod_suggest_nav_prev").css("cursor", "default");
			$(".prod_suggest_nav_next").css("backgroundImage", "none");
			$(".prod_suggest_nav_next").css("cursor", "default");
		}

	/*
	Shadowbox.init({
		language: 'en',
		players: ['img','swf']
	});
	*/

	$('#select_category').change(function() {
		//_gaq.push(['_trackEvent', 'Product Wall', 'Sort', $('#catForm').attr('action') + '/' + $('#select_category').val().toLowerCase()]);
		$('#catForm').attr('action', $('#catForm').attr('action') + '/' + $('#select_category').val().toLowerCase()).submit();
	});

	//$('#select_category').sb();
	//$('select[name="sort"]').sb();


	$('input[name^="productids["]').click(function() {
		var elName = $(this).attr("name");
		var elID = elName.replace(/[^0-9]/g, '');
		var type = $(this).attr('rel');

		toggleProduct(parseInt(elID), type);
	});


	/*
	function initCompareProducts(ids) {
		if (!$.isArray(ids)) {
			productids = ids.split(',');
		} else {
			productids = ids;
		}
	}
	*/


	function toggleProduct(id, type) {

		if (compareids[type].indexOf(id) != -1) {
			$("*").css("cursor", "wait");
			$("body").css("cursor", "wait");

			compareids[type].splice(compareids[type].indexOf(id), 1);
			$.ajax({
				url: "/comparison_list.php?mode=delete&productid="+id,
				complete: function() {
					$("body").css("cursor", "default");
					$("*").css("cursor", "default");
				}
			});
		} else {
			if (compareids[type].length < 5) {
				$("*").css("cursor", "wait");
				$("body").css("cursor", "wait");

				compareids[type].push(id);
				$.ajax({
					url: "/comparison_list.php?mode=add&productid="+id,
					complete: function() {
						$("body").css("cursor", "default");
						$("*").css("cursor", "default");
					}
				});
			} else {
				var elName = 'input[name="productids['+id+']"]';
				$(elName).removeAttr("checked");
				xAlert('<h3>You have reached the maximum number of products to compare</h3>', 'Product Comparsion');
			}
		}
	}


	$('.compare_control').click(function(e) {
		e.preventDefault();

		var type = $(e.currentTarget).attr('rel');
		var str = '';
		var trackingString = '';
		for (v=0; v<compareids[type].length; v++) {
			str += '&' + 'productids[' + compareids[type][v] + ']=Y';
			trackingString += (compareids[type][v] + ", ");
		}


		/*
		var str = '';
		var trackingString = '';
		for (v=0; v<productids.length; v++) {
			str += '&' + 'productids[' + productids[v] + ']=Y';
			trackingString += (productids[v] + ", ");
		}
		*/

		// need to add the product name to this tag:
		_gaq.push(['_trackEvent', 'Products', 'Compare', trackingString]);

		$.ajax({
			url: "/comparison_list.php?mode=add"+str,
			success: function() {
				window.location.href = '/comparison.php?mode=get_products' + str;
			}
		});
	});








	function clearText(theField)
	{
		if (theField.defaultValue == theField.value)
		theField.value = '';
	}

	function addText(theField)
	{
		if (theField.value == '')
		theField.value = theField.defaultValue;
	}

	/*  Utility Navigation - initialization and control  */

	// $('#nav-utility').children('#cart-container').animate({opacity:0},0, function(){
	// 		$(this).css({display: "block"});
	// 	});

	$('#nav-search-box').click(function(e){
		$(this).val('');
	});

	$('#nav-search-box').blur(function(e){
		if($(this).val()=='') $(this).val('search Sage');
		$('#nav-button-search').oneTime(500, "closeSearchContainer", function() {
			$('#nav-button-search').children('.hoverState').stop().animate({opacity: 0},350);
			$('#nav-utility').children('#search-container').stop().animate({opacity: 0},350, function(){
				$('#nav-utility').children('#search-container').css({display: "none"});
				$('#nav-utility').children('#search-container').css('z-index', -10000);
			});
		});
	})


	$('#nav-button-cart').mouseenter(function(e){
		e.stopPropagation();
		$('#nav-utility').children('#cart-container').css({display: "block"});
		$('#nav-button-cart').stopTime('closeCartContainer');
		$('#nav-utility').children('#cart-container').css('z-index', 10000);
		$('#nav-utility').children('#cart-container').stop().animate({opacity: 1},350);
		$('#nav-button-cart').children('.hoverState').stop().animate({opacity: 1},350);
		$('#nav-button-search').children('.hoverState').stop().animate({opacity: 0},150);
		$('#nav-utility').children('#search-container').stop().animate({opacity: 0},150, function(e){
			$('#nav-utility').children('#search-container').css({display: "none"});
			$('#nav-utility').children('#search-container').css('z-index', -10000);
		});
	});

	$('#nav-button-cart').mouseleave(function(e){
		e.stopPropagation();
		$('#nav-button-cart').oneTime(500, "closeCartContainer", function() {
			$('#nav-button-cart').children('.hoverState').animate({opacity: 0},350);
			$('#nav-utility').children('#cart-container').animate({opacity: 0},350, function(){
				$('#nav-utility').children('#cart-container').css({display: "none"});
				$('#nav-utility').children('#cart-container').css('z-index', -10000);
			});
		});
	});

	$('#view-cart-button').mouseenter(function(e){
		e.stopPropagation();
		$('#nav-button-cart').stopTime('closeCartContainer');
	});

	$('#hotspot').mouseenter(function(e){
		e.stopPropagation();
		$('#nav-button-cart').stopTime('closeCartContainer');
	});

	$('#cart-container').children('#hotspot').mouseenter(function(e){
		e.stopPropagation();
		$('#nav-button-cart').stopTime('closeCartContainer');
	});

	$('#nav-utility').children('#cart-container').mouseenter(function(e){
		e.stopPropagation();
		$('#nav-button-cart').stopTime('closeCartContainer');
	});

	$('#cart-container').children('.cart-info').mouseenter(function(e){
		e.stopPropagation();
		$('#nav-button-cart').stopTime('closeCartContainer');
	});

	$('.cart-info').mouseenter(function(e){
		e.stopPropagation();
		$('#nav-button-cart').stopTime('closeCartContainer');
	});

	$('#cart-container').mouseenter(function(e){
		e.stopPropagation();
		$('#nav-button-cart').stopTime('closeCartContainer');
	});

	$('#nav-utility').children('#cart-container').mouseleave(function(e){
		e.stopPropagation();
		$('#nav-button-cart').oneTime(500, "closeCartContainer", function() {
			$('#nav-button-cart').children('.hoverState').stop().animate({opacity: 0},350);
			$('#nav-utility').children('#cart-container').stop().animate({opacity: 0},350, function(){
				$('#nav-utility').children('#cart-container').css({display: "none"});
				$('#nav-utility').children('#cart-container').css('z-index', -10000);
			});
		});
	});

	$('#search-container').mouseenter(function(e){

	});

	// $('#nav-utility').children('#search-container').animate({opacity:0},0, function(){
	// 		$(this).css({display: "block"});
	// 	});

	$('#nav-button-search').mouseenter(function(e){
		e.stopPropagation();
		$('#nav-button-search').stopTime('closeSearchContainer');
		$('#nav-utility').children('#search-container').css({display: "block"});
		$('#nav-utility').children('#search-container').stop().animate({opacity: 1},350);
		$('#nav-button-search').children('.hoverState').stop().animate({opacity: 1},350);
		$('#nav-utility').children('#search-container').css('z-index', 10000)
		// $('#nav-button-search').animate({opacity: 0},150);
		$('#nav-button-cart').children('.hoverState').stop().animate({opacity: 0},150);
		$('#nav-utility').children('#cart-container').stop().animate({opacity: 0},150, function(){
			$('#nav-utility').children('#cart-container').css({display: "none"});
			$('#nav-utility').children('#cart-container').css('z-index', -10000)
		});
		$('#nav-utility').children('#search-container').animate({opacity: 1},350);
	});

	$('#nav-button-search').mouseleave(function(e){
		e.stopPropagation();
		if ($("#nav-search-box").is(":focus")) {

		}else{
			$('#nav-button-search').oneTime(500, "closeSearchContainer", function() {
				$('#nav-button-search').children('.hoverState').stop().animate({opacity: 0},350);
				$('#nav-utility').children('#search-container').stop().animate({opacity: 0},350, function(){
					$('#nav-utility').children('#search-container').css({display: "none"});
					$('#nav-utility').children('#search-container').css('z-index', -10000);
				});
			});
		}
	});

	$('#nav-utility').children('#search-container').mouseenter(function(e){
		e.stopPropagation();
		$('#nav-button-search').stopTime('closeSearchContainer');
	});

	$('#nav-utility').children('#search-container').mouseleave(function(e){
		e.stopPropagation();
		if ($("#nav-search-box").is(":focus")) {

		}else{
			$('#nav-button-search').oneTime(500, "closeSearchContainer", function() {
				$('#nav-button-search').children('.hoverState').stop().animate({opacity: 0},350);
				$('#nav-utility').children('#search-container').stop().animate({opacity: 0},350, function(){
					$('#nav-utility').children('#search-container').css({display: "none"});
					$('#nav-utility').children('#search-container').css('z-index', -10000);
				});
			});
		}
	});


	$("#read_all_reviews").click(function(e) {
		e.preventDefault();
		var prod_name = $("#prod_header h2").text();
		if(!prod_name) {
			prod_name = $("#pdp_header h2").text();
		}
		_gaq.push(['_trackEvent', 'Reviews', 'Read All Reviews', prod_name]);
		$("#read_all_reviews").hide();
		$("#hide_reviews").show();

		$(".review_hidden").each(function() {
			$(this).removeClass("review_hidden");
			$(this).addClass("review_shown");
		});
	});

	$("#hide_reviews").click(function(e) {
		e.preventDefault();
		$("#read_all_reviews").show();
		$("#hide_reviews").hide();

		$(".review_shown").each(function() {
			$(this).removeClass("review_shown");
			$(this).addClass("review_hidden");
		});
	});




	// Remove add to cart row from product comparison
	//$('a.fcomp-real-image')
	//$('a.fcomp-real-image').remove();
	/*
	var cartImg = $('a.fcomp-real-imagex');
	if (cartImg && cartImg.parent().hasClass('fcomp-center-note'))
		cartImg.parent().remove();
	*/

});


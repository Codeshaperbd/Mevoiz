/*--------------------------------------
		CUSTOM FUNCTION WRITE HERE		
--------------------------------------*/
"use strict";
jQuery(document).on('ready', function() {
	/*--------------------------------------
			MOBILE MENU						
	--------------------------------------*/
	function collapseMenu(){
		jQuery('.tg-navigation ul li.menu-item-has-children, .tg-navdashboard ul li.menu-item-has-children, .tg-navigation ul li.menu-item-has-mega-menu').prepend('<span class="tg-dropdowarrow"><i class="fa fa-angle-down"></i></span>');
		jQuery('.tg-navigation ul li.menu-item-has-children span, .tg-navdashboard ul li.menu-item-has-children span, .tg-navigation ul li.menu-item-has-mega-menu span').on('click', function() {
			jQuery(this).parent('li').toggleClass('tg-open');
			jQuery(this).next().next().slideToggle(300);
		});
	}
	collapseMenu();
	/*--------------------------------------
			POST SLIDER						
	--------------------------------------*/
	if(jQuery('#tg-categoriesslider').length > 0){
		var _tg_postsslider = jQuery('#tg-categoriesslider');
		_tg_postsslider.owlCarousel({
			items : 5,
			nav: true,
			loop: true,
			dots: false,
			center: true,
			autoplay: true,
			autoplayTimeout:500,
			autoplayHoverPause:true,
			dotsClass: 'tg-sliderdots',
			navClass: ['tg-prev', 'tg-next'],
			navContainerClass: 'tg-slidernav',
			navText: ['<span class="icon-chevron-left"></span>', '<span class="icon-chevron-right"></span>'],
			responsive:{
				0:{ items:1, center:false},
				480:{ items:2, center:false},
				568:{ items:3, center:false},
				768:{ items:5, },
			}
		});
	}
	/*--------------------------------------
			SHOW NUMBER						
	--------------------------------------*/
	var _clickelement = jQuery('.tg-btnphone');
	_clickelement.on('click', 'span', function() {
		jQuery(this).find('em').text(jQuery(this).data('last') );
	});
	/*--------------------------------------
			TESTIMONIALS SLIDER				
	--------------------------------------*/
	if(jQuery('#tg-testimonialsslider').length > 0){
		var _tg_testimonialsslider = jQuery('#tg-testimonialsslider');
		_tg_testimonialsslider.owlCarousel({
			items : 2,
			nav: true,
			margin: 30,
			dots: false,
			autoplay: false,
			dotsClass: 'tg-sliderdots',
			navClass: ['tg-prev', 'tg-next'],
			navContainerClass: 'tg-slidernav',
			navText: ['<span class="icon-chevron-left"></span>', '<span class="icon-chevron-right"></span>'],
			responsive:{
				0:{
					items: 1,
				},
				768:{
					items: 2,
				},
			}
		});
	}
	/*--------------------------------------
			TESTIMONIALS SLIDER				
	--------------------------------------*/
	if(jQuery('#tg-brandsslider').length > 0){
		var _tg_brandsslider = jQuery('#tg-brandsslider');
		_tg_brandsslider.owlCarousel({
			items : 4,
			nav: true,
			dots: false,
			autoplay: true,
			dotsClass: 'tg-sliderdots',
			navClass: ['tg-prev', 'tg-next'],
			navContainerClass: 'tg-slidernav',
			navText: ['<span class="icon-chevron-left"></span>', '<span class="icon-chevron-right"></span>'],
			responsive:{
				0:{
					items: 1,
				},
				480:{
					items: 2,
				},
				568:{
					items: 3,
				},
				768:{
					items: 4,
				},
			}
		});
	}
	/*--------------------------------------
			LATEST ADS SLIDER 				
	--------------------------------------*/
	if(jQuery('#tg-latestadsslider').length > 0){
		var _tg_latestadsslider = jQuery('#tg-latestadsslider');
		_tg_latestadsslider.owlCarousel({
			items : 1,
			//nav: true,
			dots: false,
			autoplay: false,
			dotsClass: 'tg-sliderdots',
			//navClass: ['tg-prev', 'tg-next'],
			//navContainerClass: 'tg-slidernav',
			//navText: ['<span class="icon-chevron-left"></span>', '<span class="icon-chevron-right"></span>'],
		});
	}
	/*--------------------------------------
			PROGRESS BAR					
	--------------------------------------*/
	if(jQuery('#tg-ourskill').length > 0){
		var _tg_ourskill = jQuery('#tg-ourskill');
		_tg_ourskill.appear(function () {
			jQuery('.skill-holder').each(function () {
				jQuery(this).find('.skill-bar').animate({
					width: jQuery(this).attr('data-percent')
				}, 2500);
			});
		});
	}
	/*--------------------------------------
			COUNTERS						
	--------------------------------------*/
	if(jQuery('#tg-counters').length > 0){
		var _tg_counters = jQuery('#tg-counters');
		_tg_counters.appear(function () {
			jQuery('.tg-timer').countTo()
		});
	}
	/*--------------------------------------
			THEME ACCORDION 				
	--------------------------------------*/
	if(jQuery('.tg-panelheading').length > 0){
		var _tg_panelheading = jQuery('.tg-panelheading');
		_tg_panelheading.on('click',function () {
			jQuery('.panel-heading').removeClass('active');
			jQuery(this).parents('.panel-heading').addClass('active');
			jQuery('.panel').removeClass('active');
			jQuery(this).parent().addClass('active');
		});
	}
	/*--------------------------------------
			Google Map						
	--------------------------------------*/
	if(jQuery('#tg-locationmap').length > 0){
		var _tg_locationmap = jQuery('#tg-locationmap');
		_tg_locationmap.gmap3({
			marker: {
				address: '1600 Elizabeth St, Melbourne, Victoria, Australia',
				options: {
					title: 'Robert Frost Elementary School'
				}
			},
			map: {
				options: {
					zoom: 16,
					scrollwheel: false,
					disableDoubleClickZoom: true,
				}
			}
		});
	}
	/*--------------------------------------
			COUNTER							
	--------------------------------------*/
	if(jQuery('.tg-statistics').length > 0){
		jQuery('.tg-statistics').appear(function () {
			jQuery('.tg-statistics > li > h3').countTo();
		});
	}
	/*--------------------------------------
			THEME COLLAPSE					
	--------------------------------------*/
	if(jQuery('#tg-narrowsearchcollapse').length > 0){
		var _openFirst = jQuery('#tg-narrowsearchcollapse');
		_openFirst.collapse({
			open: function() {this.slideDown(300);},
			close: function() {this.slideUp(300);},
		});
		_openFirst.trigger('open');
	}
	/*--------------------------------------
			FEE RANGE SLIDER				
	--------------------------------------*/
	if(jQuery('#tg-productrangeslider').length > 0){
		jQuery("#tg-productrangeslider").slider({
			range: true,
			min: 0,
			max: 6000,
			values: [ 1500, 4500 ],
			slide: function( event, ui ) {
				jQuery( "#tg-productrangeamount" ).val(ui.values[ 0 ] + 'km' + ' - ' + ui.values[ 1 ] + 'km');
			}
		});
		jQuery( "#tg-productrangeamount" ).val(jQuery( "#tg-productrangeslider" ).slider( "values", 0 ) + 'km' + ' - ' + jQuery( "#tg-productrangeslider" ).slider( "values", 1 ) + 'km');
	}
	/*--------------------------------------
			LATEST ADS SLIDER 				
	--------------------------------------*/
	if(jQuery('#tg-safetytipsslider').length > 0){
		var _tg_safetytipsslider = jQuery('#tg-safetytipsslider');
		_tg_safetytipsslider.on('changed.owl.carousel', function(event) {
			var items = event.item.count;
			var item = event.item.index + 1;
			jQuery('.tg-currentandtotalslides').html('0'+ item +' / 0'+ items +'');
		});
		_tg_safetytipsslider.owlCarousel({
			items : 1,
			nav: true,
			dots: false,
			autoplay: true,
			dotsClass: 'tg-sliderdots',
			navClass: ['tg-prev', 'tg-next'],
			navContainerClass: 'tg-slidernav',
			navText: ['<span class="icon-chevron-left"></span>', '<span class="icon-chevron-right"></span>'],
		});
	}
	/*--------------------------------------
			AUTHOR ADS SLIDER				
	--------------------------------------*/
	if(jQuery('#tg-authoradsslider').length > 0){
		var _tg_authoradsslider = jQuery('#tg-authoradsslider');
		_tg_authoradsslider.owlCarousel({
			items : 1,
			nav: true,
			loop: true,
			dots: false,
			autoplay: true,
			dotsClass: 'tg-sliderdots',
			navClass: ['tg-prev', 'tg-next'],
			navContainerClass: 'tg-slidernav',
			navText: ['<span class="icon-chevron-left"></span>', '<span class="icon-chevron-right"></span>'],
		});
	}
	/*--------------------------------------
			TRANDING POST SLIDER 			
	--------------------------------------*/
	if(jQuery('#tg-trendingpostsslider').length > 0){
		var _tg_trendingpostsslider = jQuery('#tg-trendingpostsslider');
		_tg_trendingpostsslider.owlCarousel({
			items : 1,
			nav: true,
			loop: true,
			dots: false,
			autoplay: true,
			dotsClass: 'tg-sliderdots',
			navClass: ['tg-prev', 'tg-next'],
			navContainerClass: 'tg-slidernav',
			navText: ['<span class="icon-chevron-left"></span>', '<span class="icon-chevron-right"></span>'],
		});
	}
	if(jQuery('#tg-themecollapse').length > 0){
		var _tg_themecollapse = jQuery('#tg-themecollapse');
		_tg_themecollapse.collapse({
			accordion: true,
			query: '.tg-collaptabpane h3',
			close: function() {this.slideUp(300);},
			open: function() {this.slideDown(300);},
		});
	}
	/*--------------------------------------
			THEME VERTICAL SCROLLBAR		
	--------------------------------------*/
	if(jQuery('.tg-verticalscrollbar').length > 0){
		var _tg_verticalscrollbar = jQuery('.tg-verticalscrollbar');
		_tg_verticalscrollbar.mCustomScrollbar({
			axis:"y",
		});
	}
	if(jQuery('.tg-horizontalthemescrollbar').length > 0){
		var _tg_horizontalthemescrollbar = jQuery('.tg-horizontalthemescrollbar');
		_tg_horizontalthemescrollbar.mCustomScrollbar({
			axis:"x",
			advanced:{autoExpandHorizontalScroll:true},
		});
	}
	/*--------------------------------------
			DASHBOARD MENU					
	--------------------------------------*/
	if(jQuery('#tg-btnmenutoggle').length > 0){
		jQuery("#tg-btnmenutoggle").on('click', function(event) {
			event.preventDefault();
			jQuery('#tg-wrapper').toggleClass('tg-openmenu');
			jQuery('body').toggleClass('tg-noscroll');
			jQuery('.tg-navdashboard ul.sub-menu').hide();
		});
	}
	/*--------------------------------------
			TOTAL VIEWS CHART				
	--------------------------------------*/
	if(jQuery('#tg-viewchart').length > 0){
		var chart = new Chartist.Bar('#tg-viewchart', {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [1400, 2200, 1700, 1550, 2400, 1900, 1600],
		}, {
			distributeSeries: true
		});
	}
	/*--------------------------------------
			POST SLIDER						
	--------------------------------------*/
	if(jQuery('#tg-dbcategoriesslider').length > 0){
		var _tg_postsslider = jQuery('#tg-dbcategoriesslider');
		_tg_postsslider.owlCarousel({
			items : 4,
			nav: true,
			loop: true,
			dots: false,
			autoplay: false,
			dotsClass: 'tg-sliderdots',
			navClass: ['tg-prev', 'tg-next'],
			navContainerClass: 'tg-slidernav',
			navText: ['<span class="icon-chevron-left"></span>', '<span class="icon-chevron-right"></span>'],
			responsive:{
				0:{ items:2, },
				640:{ items:3, },
				768:{ items:4, },
			}
		});
	}
	/*--------------------------------------
			TINYMCE WYSIWYG EDITOR			
	--------------------------------------*/
	if(jQuery('#tg-tinymceeditor').length > 0){
		tinymce.init({
			selector: 'textarea#tg-tinymceeditor',
			height: 250,
			theme: 'modern',
			plugins: [ 'advlist autolink lists link image charmap print preview hr anchor pagebreak', 'searchreplace wordcount visualblocks visualchars code fullscreen', 'insertdatetime media nonbreaking save table contextmenu directionality', 'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'],
			toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
			toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
			image_advtab: true,
		});
	}
	/*--------------------------------------
			SORTING ADS						
	--------------------------------------*/
	if(jQuery('#tg-checkedall').length > 0){
		//select all checkboxes
		jQuery('#tg-checkedall').on('change', function(){  //"select all" change 
			jQuery('.tg-checkbox > input[type=checkbox]').prop('checked', jQuery(this).prop('checked')); //change all ".checkbox" checked status
		});
		//".checkbox" change 
		jQuery('.checkbox').on('change', function(){
			//uncheck "select all", if one of the listed checkbox item is unchecked
			if(false == jQuery(this).prop('checked')){ //if this item is unchecked
				jQuery('#tg-checkedall').prop('checked', false); //change "select all" checked status to false
			}
			//check "select all" if all checkbox items are checked
			if (jQuery('.tg-checkbox > input[type=checkbox]:checked').length == jQuery('.tg-checkbox > input[type=checkbox]').length ){
				jQuery('#tg-checkedall').prop('checked', true);
			}
		});
	}
	/*--------------------------------------
			SORTING ADS						
	--------------------------------------*/
	if(jQuery('#tg-adstype').length > 0){
		var _clickedValue = jQuery('.tg-navtabledata ul li a');
		_clickedValue.on('click', function (event) {
			event.preventDefault();
			var _datacategory = jQuery(this).data('category');
			_clickedValue.parent('li').removeClass('tg-active');
			jQuery(this).parent('li').addClass('tg-active');
			jQuery('#tg-adstype tr').hide();
			jQuery('#tg-adstype tr[data-category="'+ _datacategory +'"]').fadeIn();
			if(jQuery(this).attr("href") == "*"){
				jQuery('#tg-adstype tr').fadeIn();
			}
		});
	}
	/*--------------------------------------
			PACKAGE EXPIRY COUNTER			
	--------------------------------------*/
	if(jQuery('#tg-pkgexpirycounter').length > 0){
		// Set the date we're counting down to
		var countDownDate = new Date("Aug 24, 2018 15:37:25").getTime();
		// Update the count down every 1 second
		var x = setInterval(function() {
			// Get todays date and time
			var now = new Date().getTime();
			// Find the distance between now an the count down date
			var distance = countDownDate - now;
			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			// Output the result in an element with id="demo"
			document.getElementById("tg-pkgexpirycounter").innerHTML = "<ul><li><div class='tg-holder'><h3>" + days + "</h3><h4>Days</h4></div></li><li><div class='tg-holder'><h3>" + hours + "</h3><h4>Hours</h4></div></li><li><div class='tg-holder'><h3>" + minutes + "</h3><h4>Minutes</h4></div></li><li><div class='tg-holder'><h3>" + seconds + "</h3><h4>Seconds</h4></div></li></ul>";
			// If the count down is over, write some text
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("tg-pkgexpirycounter").innerHTML = "EXPIRED";
			}
		}, 1000);
	}
	/*--------------------------------------
			COMMING SOON COUNTER			
	--------------------------------------*/
	if(jQuery('#tg-comingsooncounter').length > 0){
		// Set the date we're counting down to
		var countDownDate = new Date("Dec 31, 2017 24:00:00").getTime();
		// Update the count down every 1 second
		var x = setInterval(function() {
			// Get todays date and time
			var now = new Date().getTime();
			// Find the distance between now an the count down date
			var distance = countDownDate - now;
			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			// Output the result in an element with id="demo"
			document.getElementById("tg-comingsooncounter").innerHTML = "<ul><li><div class='tg-holder'><h3>" + days + "</h3><h4>Days</h4></div></li><li><div class='tg-holder'><h3>" + hours + "</h3><h4>Hours</h4></div></li><li><div class='tg-holder'><h3>" + minutes + "</h3><h4>Minutes</h4></div></li><li><div class='tg-holder'><h3>" + seconds + "</h3><h4>Seconds</h4></div></li></ul>";
			// If the count down is over, write some text
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("tg-comingsooncounter").innerHTML = "EXPIRED";
			}
		}, 1000);
	}
	/*--------------------------------------
			CURRENCY DROPDOWN SELECT		
	--------------------------------------*/
	if(jQuery('#tg-flagstrapone').length > 0){
		var _tg_flagstrapone = jQuery('#tg-flagstrapone');
		_tg_flagstrapone.flagStrap({
			countries: {
				"US": "USD - US Dollar",
				"AU": "AUD - AU Dollar",
				"GB": "GBP - GB Pound",
				"PK": "PKR - PK Rupee",
				"SA": "SAR - SA Riyal",
				"AE": "AED - AED Dirham",
			},
		});
	}
	if(jQuery('#tg-flagstraptwo').length > 0){
		var _tg_flagstraptwo = jQuery('#tg-flagstraptwo');
		_tg_flagstraptwo.flagStrap({
			countries: {
				"US": "USD",
				"AE": "AED",
				"AU": "AUD",
				"GB": "GBP",
				"PK": "PKR",
				"SA": "SAR",
			},
		});
	}
	if(jQuery('#tg-flagstrapthree').length > 0){
		var _tg_flagstrapthree = jQuery('#tg-flagstrapthree');
		_tg_flagstrapthree.flagStrap({
			countries: {
				"AE": "AED",
				"US": "USD",
				"AU": "AUD",
				"GB": "GBP",
				"PK": "PKR",
				"SA": "SAR",
			},
		});
	}
	if(jQuery('#tg-flagstrapfour').length > 0){
		var _tg_flagstrapfour = jQuery('#tg-flagstrapfour');
		_tg_flagstrapfour.flagStrap({
			countries: {
				"AE": "AED",
				"US": "USD",
				"AU": "AUD",
				"GB": "GBP",
				"PK": "PKR",
				"SA": "SAR",
			},
		});
	}
	/*--------------------------------------
			PRODUCT GALLERY					
	--------------------------------------*/
	if(jQuery('#tg-productgallery').length > 0){
		var gallery = new $.ThumbnailGallery(jQuery('#tg-productgallery'), {
			count: 9,
			breakpoint: 600,
			shadowStrength: 0.5,
			imageType: 'jpg',
			thumbImageType: 'jpg',
			thumbImages: 'images/gallery/thumbs/thumb',
			smallImages: 'images/gallery/small/image',
			largeImages: 'images/gallery/large/image',
		});
	}
	/* -------------------------------------
			PRETTY PHOTO GALLERY
	-------------------------------------- */
	jQuery("a[data-rel]").each(function () {
		jQuery(this).attr("rel", jQuery(this).data("rel"));
	});
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'normal',
		theme: 'dark_square',
		slideshow: 3000,
		autoplay_slideshow: false,
		social_tools: false
	});

	/* -------------------------------------
			Scroll menu
	-------------------------------------- */
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 100) {
            $('.tg-navigationarea').addClass('navbar-fixed-top');
        } else {
            $('.tg-navigationarea').removeClass('navbar-fixed-top');
        }
    });
});
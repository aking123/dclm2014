/**
 * Main JavaScript
 */

jQuery( document ).ready( function( $ ) {

	/******************************************
	 * FULLSCREEN BACKGROUND
	 ******************************************/

	if ( dclm_main.background_image_url && dclm_main.background_image_fullscreen ) {
		jQuery.backstretch( dclm_main.background_image_url );
	}

	/******************************************
	 * LAYOUT
	 ******************************************/

	// Retina Logo
	// Set dimensions from normal image on retina logo element for proper sizing
	// CSS handles switching between two images with media queries
	// This method works best for Opera Mobile
	if ( $( '#resurrect-logo-hidpi' ).length ) { // Retina version provided
		$( '<img>' ).attr( 'src', $( '#resurrect-logo-regular' ).attr( 'src' ) ).load( function() {
			$( '#resurrect-logo-hidpi' ).attr( 'width', this.width ).attr( 'height', this.height );
		} );
	}

	// Header Menu
	if ( $( '#resurrect-header-menu-links' ).children().length > 0 ) { // menu is not empty

		var menu_items;

		// Remove description elements so they don't get included in dropdown
		menu_items = $( '#resurrect-header-menu-links' ).html(); // to restore below
		$( '.ctfw-header-menu-link-description' ).remove();

		// SelectNav.js converts menu to single <select> dropdown for small screens ( mobile devices )
		selectnav( 'resurrect-header-menu-links', {
			label: dclm_main.mobile_menu_label,
			nested: true,
			indent: '&ndash;',
			autoselect: false
		} );

		// Restore description elements after SelectNav.js initializes
		$( '#resurrect-header-menu-links' ).html( menu_items );

		// Superfish Dropdowns ( for regular screens )
		resurrect_activate_menu();

	}

	/******************************************
	 * FORCE "FULL SITE"
	 ******************************************/

	// These things are done client-side so that it works with caching plugins

	// See more immediately executed code in <head> (better speed with caching and mobile)

	// "View Full Site" / "View Mobile Site" footer link clicked
	$( '#resurrect-footer-responsive-toggle a' ).click( function( e ) {

		e.preventDefault();

		// Switch to full site
		if ( ! $.cookie( 'resurrect_responsive_off' ) ) {
			$.cookie( 'resurrect_responsive_off', 1, {
				path : dclm_main.site_path, // work on any page
				secure : dclm_main.is_ssl
			} );
		}

		// Switch to mobile site
		else {
			$.removeCookie( 'resurrect_responsive_off', {
				path : dclm_main.site_path, // work on any page
				secure : dclm_main.is_ssl
			} );
		}

		// Reload the current page without re-posting
		window.location = window.location.href;

	} );


	/******************************************
	 * SEARCH
	 ******************************************/

	// Submit on link button click
	$( '.resurrect-search-button' ).click( function( event ) {
		event.preventDefault();
		$( this ).parent( 'form' ).submit();
	} );

	// Trim search query and stop of empty
	$( '.resurrect-search-form form' ).submit( function( event ) {

		var s;

		s = $( 'input[name=s]', this ).val().trim();

		if ( s.length ) { // submit trimmed value
			$( 'input[name=s]', this ).val( s );
		} else { // empty, stop
			event.preventDefault();
		}

	} );

	/******************************************
	 * HOMEPAGE
	 ******************************************/

	// Homepage Slider
	if ( $( '.flexslider' ).length ) {

		// Load Flexslider
		// Note: waiting for all images to load takes too long on mobile
		//$( window ).load( function() { // after images loaded

			var enable_slideshow, single_slide;

			// Enable or disable automatic slideshow based on theme options
			enable_slideshow = dclm_main.slider_slideshow;

			// If only one slide, add a second slide; otherwise slider will not initialize and video will not work properly (controls will be hidden after initialization)
			single_slide = false;
			if ( $( '.flexslider ul li' ).length == 1 ) {
				single_slide = true;
				enable_slideshow = false; // disable because only one slide (don't show hidden slide)
				$( '.flexslider ul' ).append( '<li></li>' );
			}

			// Initialize slider
			$( '#resurrect-slider .flexslider' ).flexslider( {
				animationSpeed: 450,
				slideshow: enable_slideshow,					// Boolean: Animate slider slideshow
				slideshowSpeed: dclm_main.slider_speed,	// Integer: Set the speed of the slideshow cycling, in milliseconds
				directionNav: false,							// Boolean: Create navigation for previous/next navigation? ( true/false )
				start: function( slider ) { // when first slide loads

					var fade_speed, opacity;

					// Hide controls if only one slide ( see "if only only slide" above )
					if ( single_slide ) {
						$( '.flex-control-nav' ).hide();
					}

					// Hover to lower opacity and fade in play button
					fade_speed = 200;
					fade_opacity = 0.5;
					if ( ! Modernizr.touch ) { // not for mobile devices that cannot hover
						$( '.resurrect-slide-video' )
							.hover( function() { // hover in

								// Fade image and caption out, play button in
								if ( $( '.flex-image-container', this ).is( ':visible' ) ) { // don't fade if it was hidden during video playback
									$( '.flex-image-container img, .flex-title, .flex-description', this ).stop().fadeTo( fade_speed, fade_opacity ); /* title and desc, not parent caption container, so can fade title in alone */
									$( '.flex-play-overlay', this ).stop().fadeIn( fade_speed );
								}

								// Fade caption in on hover and return to faded out on mouse out
								$( 'a.flex-title', this ) // only if it's linked somewhere other than video source
									.hover( function() { // hover in
										$( this ).stop().fadeTo( fade_speed, 1 );
									}, function() { // hover out
										$( this ).stop().fadeTo( fade_speed, fade_opacity );
									} );

							}, function() { // hover out

								// Fade image and caption back in, play button out
								if ( $( '.flex-image-container', this ).is( ':visible' ) ) { // don't fade if it was hidden during video playback
									$( '.flex-image-container img, .flex-title, .flex-description', this ).stop().fadeTo( fade_speed, 1 );
									$( '.flex-play-overlay', this ).stop().fadeOut( fade_speed );
								}

							} );
					} else { // for mobile / touch devices always show "Play" overlay since cannot hover
						$( '.flex-play-overlay' ).stop().fadeTo( 0, fade_opacity );
					}

					// Click on title (if linked) goes to URL, does not play video
					$( 'a.flex-title' ).click( function( event ) {
						event.stopPropagation(); // stop click on video overlay from happening, so title link will work
					} );

					// Click on description goes to URL if this is not video slide
					$( '.flex-description' ).click( function( event ) {

						var click_url;

						// Make sure this is not video slide
						if ( ! $( this ).parents( 'li' ).hasClass( 'resurrect-slide-video' ) ) {

							event.preventDefault();

							// Is this slide linked?
							click_url = $( 'a', $( this ).parents( 'li' ) ).attr( 'href' );

							// Go to URL
							if ( click_url ) {
								if ( $( this ).parents( '.resurrect-slide-click-new' ).length > 0 ) {
									window.open( click_url, '_blank' );
								} else {
									window.location.href = click_url;
								}
							}

						}

					} );

					// Play video slide on click
					$( '.flex-play-overlay, .flex-caption' ).click( function( event ) { // clicked image of video slide ( or non linked title of caption ) in order to play video

						var slide_element, slide_id, video_url, video_html, match, vimeo_id, youtube_id;

						event.preventDefault();

						// Make sure this is video slide
						if ( ! $( this ).parents( 'li' ).hasClass( 'resurrect-slide-video' ) ) {
							return false;
						}

						// Get data
						slide_element = $( this ).parents( '.resurrect-slide-video' );
						slide_id = slide_element.attr( 'id' );
						video_url = $( 'a', slide_element ).attr( 'href' );
						video_html = '';

						// Vimeo
						if ( video_url.indexOf( 'vimeo' ) > -1 ) {

							// Extract video ID from Vimeo URL and build HTML for player
							match = video_url.match( /\d+/ );
							if ( match && match[0].length ) {
								vimeo_id = match[0];
								video_html = '<iframe src="' + dclm_main.current_protocol + '://player.vimeo.com/video/' + vimeo_id + '?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff&amp;autoplay=1" width="960" height="350" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
							}

						}

						// YouTube
						else if ( video_url.indexOf( 'youtu' ) > -1 ) { // match youtube.com or youtu.be

							// Get video ID from YouTube URL and build HTML for player
							// Helpful regex information here: http://bit.ly/13H4NKw
							match = video_url.match( /.*(?:youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=)([^#\&\?]*).*/ );
							if ( match && match[1].length == 11 ){
								youtube_id = match[1];
								video_html = '<iframe src="' + dclm_main.current_protocol + '://www.youtube.com/embed/' + youtube_id + '?wmode=transparent&amp;autoplay=1&amp;rel=0&amp;showinfo=0&amp;color=white&amp;modestbranding=1" width="960" height="350" frameborder="0" allowfullscreen></iframe>';
							}

						}

						// Show the video
						if ( video_html ) {

							// Pause slideshow
							slider.pause();

							// Hide slide image ( contains "play" overlay ) and caption
							$( '.flex-image-container, .flex-title, .flex-description', slide_element ).hide();

							// Destroy previous video frame if still there
							$( '.resurrect-slide-video iframe' ).remove();

							// Inject the video iframe
							$( slide_element ).append( video_html );

						}

					} );

				},
				before: function() { // Before slide changes

					// Destroy all video iframes
					$( '.resurrect-slide-video iframe' ).remove();

					// Show image and caption again, make sure faded to 100% as well
					$( '.flex-image-container, .flex-image-container img, .flex-title, .flex-description' ).show().fadeTo( 0, 1 ); // may be partially faded out from hover on video slide

					// Hide play button overlay
					if ( ! Modernizr.touch ) { // except if we're using movile touch - no hover so want "play" overlay to show for clicking
						$( '.flex-play-overlay' ).hide();
					}

				}

			} );

		//} );

	}

	// Homepage Widgets
	if ( $( '#resurrect-home-bottom-widgets' ).length ) {

		// Set jQuery Masonry on load and resize
		// (after images load and after resize in case need to adjust columns)
		$.event.special.debouncedresize.threshold = 50; // default is 250
		$( window ).bind( 'load debouncedresize', function() {

			var window_width, masonry_columns, $container;

			// Determine columns based on screen width
			window_width = jQuery( window ).width();
			masonry_columns = 3;
			if ( ! $.cookie( 'resurrect_responsive_off' ) ) { // if not forcing full site
				if ( window_width <= 640 ) { // 640: Reduce to 1 columns as in CSS media query
					masonry_columns = 1;
				} else if ( window_width <= 1024 ) { // 1024: Reduce to 2 columns as in CSS media query
					masonry_columns = 2;
				}
			}

			// Set masonry
			$container = $( '#resurrect-home-bottom-widgets' );
			$container.masonry( {
				itemSelector : '.resurrect-home-widget',
				isAnimated: true,
				animationOptions: {
					duration: 350,
					easing: 'swing',
					queue: false
				},
				isResizable: false, // disable normal resizing
				columnWidth: ( $container.width() / masonry_columns ) // set column number based on screen size
			} );

		} );

	}

	/******************************************
	 * GALLERIES
	 ******************************************/

	// Make clicks on caption also go to URL
	$( '.gallery-caption' ).click( function() {

		var $parent, url;

		$parent = $( this ).parent();
		url = $( 'a', $parent ).prop( 'href' );

		// Go to URL if no data- attributes, which indicate Jetpack Carousel or possbily other lightbox
		if ( url && $.isEmptyObject( $( '.gallery-icon img', $parent ).data() ) ) {
			window.location = url;
		}

	} );

	// Scroll to top when Carousel item clicked
	// Otherwise lightbox is cut off
	$( 'div[data-carousel-extra] a' ).click( function() {
		window.scrollTo( 0, 0 );
	} );

	/******************************************
	 * COMMENTS
	 ******************************************/

	// Scroll to comments when comments link at top of single page/post clicked
	if ( $( 'a.resurrect-scroll-to-comments' ).length ) {
		$( 'a.resurrect-scroll-to-comments' ).smoothScroll( {
			offset: -60,
			easing: 'swing',
			speed: 1200
		} );
	}

	// Scroll to comments when link from another page is clicked
	if ( '#comments' == window.location.hash || '#respond' == window.location.hash ) {

		// Scroll down
		$.smoothScroll( {
			scrollTarget: '#comments',
			easing: 'swing',
			speed: 1200
		} );

	}

	// Comment Validation using jQuery Validation Plugin by Jörn Zaefferer
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	if ( jQuery().validate ) { // if plugin loaded

		var $validate_params, $validate_comment_field;

		// Parameters
		$validate_params = {
			rules: {
				author: {
					required: dclm_main.comment_name_required !== '' ? true : false // if WP configured to require
				},
				email: {
					required: dclm_main.comment_email_required !== '' ? true : false, // if WP configured to require
					email: true // check validity
				},
				url: 'url' // optional but check validity
			},
			messages: { // localized error strings
				author: dclm_main.comment_name_error_required,
				email: {
					required: dclm_main.comment_email_error_required,
					email: dclm_main.comment_email_error_invalid
				},
				url: dclm_main.comment_url_error_invalid
			}
		};

		// Comment textarea
		// Use ID instead of name to work with Antispam Bee plugin which duplicates/hides original textarea
		$validate_comment_field = $( '#comment' ).attr( 'name' );
		$validate_params['rules'][$validate_comment_field] = 'required';
		$validate_params['messages'][$validate_comment_field] = dclm_main.comment_message_error_required;

		// Validate the form
		$( '#commentform' ).validate( $validate_params );

	}

	/******************************************
	 * WIDGETS
	 ******************************************/

	// Add class to widgets that use a title, to make styling even nicer
	$( '.resurrect-widget' ).each( function() {
		if ( $( '.resurrect-widget-title', this ).length ) {
			$( this ).addClass( 'resurrect-widget-has-title' );
		}
	} );

	// Apply classes that will assist IE8 which does not support certain selectors
	// Note: this is only for selectors that selectivizr.js does not provide for
	$( '.resurrect-widget' ).find( '> :not( .resurrect-widget-title ):first' ).addClass( 'resurrect-widget-first-element' ); // same as .resurrect-widget > :not( .resurrect-widget-title ):first-of-type

	// Categories dropdown redirect
	$( '.resurrect-dropdown-taxonomy-redirect' ).change( function() {

		var taxonomy, taxonomy_id;

		taxonomy = $( this ).prev( 'input[name=taxonomy]' ).val();
		taxonomy_id = $( 'option:selected', this ).val();

		if ( taxonomy && taxonomy_id && -1 != taxonomy_id ) {
			location.href = dclm_main.home_url + '/?redirect_taxonomy=' + taxonomy + '&id=' + taxonomy_id;
		}

	} );

} );

/******************************************
 * MENU ACTIVATION
 ******************************************/

// Activate menu
// Also used in Customizer admin preview JS
function resurrect_activate_menu() {

	// Initialize dropdowns
	jQuery( '.sf-menu' ).supersubs( { // Superfish dropdowns
		minWidth: 12,	// minimum width of sub-menus in em units
		maxWidth: 15,	// maximum width of sub-menus in em units
		extraWidth: 1	// extra width can ensure lines don't sometimes turn over due to slight rounding differences and font-family
	} ).superfish( {
		delay: 0,
		disableHI: false,
		speed: 250,
		animation: {	// fade in and slide down
			//opacity: 'show',
			height: 'show'
		}
	} );

}


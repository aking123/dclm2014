/**
 * Theme Customizer Live Preview
 */

jQuery( document ).ready( function( $ ) {

	/***************************************
	 * BACKGROUND IMAGE
	 ***************************************/

	// Background Image
	// ( this also fires when image removed )
	wp.customize( 'background_image', function( value ) {

		value.bind( function( to ) {

			var url, fullscreen;

			// URL
			url = to;

			// Remove forcing of certain BG color for image in body.php
			// Otherwise when remove image in customizer, color change will not show
			$( 'body' ).removeClass ( function ( index, css ) {
		 		return (css.match (/\bresurrect-background-image-file-\S+/g) || []).join(' ');
			});

			// Fullscreen from control
			fullscreen = window.parent.jQuery( '[data-customize-setting-link="' + resurrect_customize_preview.option_id + '[background_image_fullscreen]"]' ).prop( 'checked' );

			// Update preview with Background Image and Fullscreen
			resurrect_customize_preview_background_image( url, fullscreen );

		} );

	} );

	// Background Fullscreen
	wp.customize( resurrect_customize_preview.option_id + '[background_image_fullscreen]', function( value ) {

		value.bind( function( to ) {

			var url, fullscreen;

			// Fullscreen
			fullscreen = to;

			// URL from control
			url = window.parent.jQuery( "#customize-control-background_image .preview-thumbnail img" ).attr( 'src' );

			// Update preview with Background Image and Fullscreen
			resurrect_customize_preview_background_image( url, fullscreen );

		} );

	} );

	// Fonts ( Menu, Heading, Body )
	$.each( ['logo_font', 'menu_font', 'heading_font', 'body_font'], function( index, setting ) {

		wp.customize( resurrect_customize_preview.option_id + '[' + setting + ']', function( value ) {

			value.bind( function( to ) {

				var selectors, font;

				selectors = resurrect_customize_preview[setting + '_selectors'];
				font = to;

				resurrect_customize_preview_font( selectors, font );

			} );

		} );

	} );

	/***************************************
	 * HEADER
	 ***************************************/

	// Move Logo
	wp.customize( resurrect_customize_preview.option_id + '[logo_offset_x]', function( value ) {

		value.bind( function( to ) {

			$( '#resurrect-logo-image' ).css( 'left', to + 'px' );

		} );

	} );

	// Tagline
	wp.customize( 'blogdescription', function( value ) {

		value.bind( function( to ) {
			$( '.resurrect-tagline' ).html( to ); // below logo and right side
		} );

	} );

	// Move Tagline ( under logo )
	wp.customize( resurrect_customize_preview.option_id + '[tagline_offset_x]', function( value ) {

		value.bind( function( to ) {
			$( '#resurrect-logo-tagline' ).css( 'left', to + 'px' );
		} );

	} );

} );

/***************************************
 * FUNCTIONS
 ***************************************/

/**
 * Update preview with Background Image and Fullscreen
 */

function resurrect_customize_preview_background_image( url, fullscreen ) {

	var background_image_css;

	// Fullscreen and URL set, update Backstretch
	if ( fullscreen && url ) {

		// Remove CSS background-image
		// Otherwise get a flicker and issues w/transparent backgrounds on top of each other
		jQuery( 'body.custom-background' ).css( 'background-image', 'none' );

		// Refresh Backstretch
		jQuery.backstretch( url );

	}

	// No fullscreen image
	else {

		// Remove Backstretch
		jQuery( '.backstretch' ).remove();

		// Remove or restore CSS background-image
		background_image_css = 'url( ' + url + ' )'; // restore CSS background-image removed while Fullscreen used
		if ( ! url ) {
			background_image_css = 'none'; // remove CSS background image
			window.parent.jQuery( '#resurrect-customize-background-colorable' ).hide(); // remove Colorable note
		}
		jQuery( 'body.custom-background' ).css( 'background-image', background_image_css );

	}

}

/**
 * Apply Font Change
 */

function resurrect_customize_preview_font( selectors, font ) {

	var family, styles, subsets, families;

	if ( selectors && font ) {

		// Prepare data
		family = font.replace( /\s/g, '+' ); // spaces to +
		styles = resurrect_customize_preview.fonts[font].sizes;
		subsets = window.parent.jQuery( 'input[data-customize-setting-link="' + resurrect_customize_preview.option_id + '[font_subsets]"]' ).val().replace( /\s/g, '' ); // remove spaces
		families = [family + ':' + styles + ':' + subsets];

		// Load font
		WebFont.load( {
			google: {
				families: families
			},
			active: function() {

				// Apply font
				jQuery( selectors ).css( 'font-family', "'" + font + "'" );

				// Reactivate menu ( sizing )
				resurrect_activate_menu();

			}
		} );

	}

}

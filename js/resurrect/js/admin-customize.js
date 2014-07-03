/**
 * Theme Customizer Controls
 */

jQuery( document ).ready( function( $ ) {

	/***************************************
	 * BACKGROUND IMAGE
	 ***************************************/

	// Create "Colorable" note container if doesn't exist yet
	if ( ! $( '#resurrect-customize-background-colorable' ).length ) {
		$( '#customize-control-background_image .customize-control-content' ).after( '<div id="resurrect-customize-background-colorable" class="description">' + resurrect_customize.background_colorable_text + '</div>' );
	}

	// Preset thumbnail click
	$( '#customize-control-background_image .library-content[data-customize-tab="ctfw_presets"] a[data-customize-image-value]' ).click( function() {

		var fullscreen, repeat, position, attachment, colorable;

		// Get preset data
		fullscreen = Boolean( $( this ).attr( 'data-customize-image-preset-fullscreen' ) );
		repeat = $( this ).attr( 'data-customize-image-preset-repeat' );
		position = $( this ).attr( 'data-customize-image-preset-position' );
		attachment = $( this ).attr( 'data-customize-image-preset-attachment' );
		colorable = Boolean( $( this ).attr( 'data-customize-image-preset-colorable' ) );

		// Set preset data and trigger change
		$( '[data-customize-setting-link="' + resurrect_customize.option_id + '[background_image_fullscreen]"]' ).prop( 'checked', fullscreen ).trigger( 'change' ); // trigger change for preview
		$( "input[name=_customize-radio-background_repeat][value=" + repeat + "]" ).prop( 'checked', true ).trigger( 'change' ); // trigger change for preview
		$( "input[name=_customize-radio-background_position_x][value=" + position + "]" ).prop( 'checked', true ).trigger( 'change' ); // trigger change for preview
		$( "input[name=_customize-radio-background_attachment][value=" + attachment + "]" ).prop( 'checked', true ).trigger( 'change' ); // trigger change for preview

	} );

	/***************************************
	 * HEADER
	 ***************************************/

	// "Logo Type" has changed
	$( "input[data-customize-setting-link^='" + resurrect_customize.option_id + "[logo_type]']" ).change( function() {

		var logo_type, $logo_image, $logo_hidpi, $logo_offset_x, $logo_text, $logo_text_size;

		if ( $( this ).is( ':checked' ) ) { // avoid triggering change on each radio for first load

			logo_type = $( this ).val(); // selected radio value

			// Show/hide "Logo Image" and "Retina Logo" and "Move Logo" fields
			$logo_image = $( '#customize-control-' + resurrect_customize.option_id + '-logo_image' );
			$logo_hidpi = $( '#customize-control-' + resurrect_customize.option_id + '-logo_hidpi' );
			$logo_offset_x = $( '#customize-control-' + resurrect_customize.option_id + '-logo_offset_x' );
			if ( logo_type == 'image' ) {
				$logo_image.show();
				if ( $( "#customize-control-" + resurrect_customize.option_id + "-logo_image .preview-thumbnail img" ).css( 'display' ) != 'none' ) { // show Retina and Move controls only if there is an image logo
					$logo_hidpi.show();
					$logo_offset_x.show();
				}
			} else {
				$logo_image.hide();
				$logo_hidpi.hide();
				$logo_offset_x.hide();
				resurrect_customize_preview_render_fix(); // fix Chrome rendering issue after $logo_image.hide();
			}

			// Show/hide "Logo Text Size" and "Logo Text Size"
			$logo_text = $( '#customize-control-' + resurrect_customize.option_id + '-logo_text' );
			$logo_text_size = $( '#customize-control-' + resurrect_customize.option_id + '-logo_text_size' );
			if ( logo_type == 'text' ) {
				$logo_text.show();
				$logo_text_size.show();
			} else {
				$logo_text.hide();
				$logo_text_size.hide();
			}

		}

	} ).trigger( 'change' ); // for first load

	// "Show tagline under logo" has changed
	$( "input[data-customize-setting-link^='" + resurrect_customize.option_id + "[tagline_under_logo]']" ).change( function() {

		var $move_tagline;

		$move_tagline = $( '#customize-control-' + resurrect_customize.option_id + '-tagline_offset_x' );

		// Show/hide if checked or not
		if ( $( this ).is( ':checked' ) ) {
			$move_tagline.show();
		} else {
			$move_tagline.hide();
		}

	} ).trigger( 'change' ); // for first load

	// "Show on Right" has changed
	$( "input[data-customize-setting-link^='" + resurrect_customize.option_id + "[header_right]']" ).change( function() {

		var header_right, $header_items, $custom_content;

		if ( $( this ).is( ':checked' ) ) { // avoid triggering change on each radio for first load

			header_right = $( this ).val(); // selected radio value

			// Show/hide header right event/sermon/posts limit field if selected
			$header_items = $( '#customize-control-' + resurrect_customize.option_id + '-header_right_items_limit' );
			if ( 'sermons' == header_right || 'events' == header_right || 'posts' == header_right ) {
				$header_items.show();
			} else {
				$header_items.hide();
			}

			// Show/hide "Custom Content" textarea if selected
			$custom_content = $( '#customize-control-' + resurrect_customize.option_id + '-header_right_content' );
			if ( header_right == 'content' ) {
				$custom_content.show();
			} else {
				$custom_content.hide();
			}

		}

	} ).trigger( 'change' ); // for first load

	/***************************************
	 * NON-FORM CHANGES
	 ***************************************/

	// Continuously check controls for changes
	// 'change' cannot be detected for non-form elements such as images
	$.doTimeout( 500, function() {

		var $fullscreen_control, background_image_url, logo_type, $logo_hidpi_control, $move_logo_control;

		/**************************************
		 * BACKGROUND IMAGE
		 **************************************/

		// Control
		$fullscreen_control = $( '#customize-control-' + resurrect_customize.option_id + '-background_image_fullscreen' );

		// URL
		background_image_url = $( "#customize-control-background_image .preview-thumbnail img" ).attr( 'src' );

		// Show/hide colorable note based on background image URL
		if ( background_image_url && $( '#customize-control-background_image .library-content[data-customize-tab="ctfw_presets"] a[data-customize-image-value="' + background_image_url + '"][data-customize-image-preset-colorable="1"]' ).length ) {
			$( '#resurrect-customize-background-colorable' ).show();
		} else {
			$( '#resurrect-customize-background-colorable' ).hide();
		}

		// Hide/show Fullscreen checkbox control depending on whether image is selected
		if ( $( "#customize-control-background_image .preview-thumbnail img" ).css( 'display' ) != 'none' ) {
			$fullscreen_control.show();
		} else {
			$fullscreen_control.hide();
		}

		// Fullscreen is checked OR hidden, hide controls below it
		if ( $( 'input[type="checkbox"]', $fullscreen_control ).prop( 'checked' ) || !$fullscreen_control.is( ':visible' ) ) {
			$fullscreen_control.nextAll().hide();
		} else {
			$fullscreen_control.nextAll().show();
		}

		/**************************************
		 * HEADER
		 **************************************/

		// Logo type
		logo_type = $( "input[data-customize-setting-link^='" + resurrect_customize.option_id + "[logo_type]']:radio:checked" ).val();

		// Logo controls
		$logo_hidpi_control = $( '#customize-control-' + resurrect_customize.option_id + '-logo_hidpi' );
		$move_logo_control = $( '#customize-control-' + resurrect_customize.option_id + '-logo_offset_x' );

		// Show Retina Logo and Move Logo controls only while Logo uploaded ( and not using Text logo )
		if ( logo_type == 'image' && $( "#customize-control-" + resurrect_customize.option_id + "-logo_image .preview-thumbnail img" ).css( 'display' ) != 'none' ) {
			$logo_hidpi_control.show();
			$move_logo_control.show();
		} else {
			$logo_hidpi_control.hide();
			$move_logo_control.hide();
		}

		/**************************************/

		// Keep checking for logo changes
		return true;

	} );

	$( '.accordion-section-title' ).click( function() {
		resurrect_customize_preview_render_fix();
	} );

} );

/**
 * Rendering Fix
 *
 * This does a quick shift of controls container to reset the rendering.
 */

function resurrect_customize_preview_render_fix() {

	var controls_width;

	controls_width = jQuery( '#customize-controls' ).width();

	jQuery( '#customize-controls' ).width( controls_width - 1 ); // slightly shrink cotainer

	jQuery.doTimeout( 10, function() { // restore width after slight delay
		jQuery( '#customize-controls' ).width( controls_width );
	}, true ); // once

}

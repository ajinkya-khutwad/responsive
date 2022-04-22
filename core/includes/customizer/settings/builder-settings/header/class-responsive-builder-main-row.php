<?php
/**
 * Header Customizer Options
 *
 * @package Responsive WordPress theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Responsive_Builder_Main_row' ) ) :
	/**
	 * Header Footer Builder Customizer Options */
	class Responsive_Builder_Main_Row {

		/**
		 * Setup class.
		 *
		 * @since 1.0
		 */
		public function __construct() {

			add_action( 'customize_register', array( $this, 'customizer_options' ) );

		}

		/**
		 * Customizer options
		 *
		 * @since 0.2
		 *
		 * @param  object $wp_customize WordPress customization option.
		 */
		public function customizer_options( $wp_customize ) {

			/**
			 * Header Builder options
			 */

			$wp_customize->add_section(
				'responsive_customizer_header_main',
				array(
					'title'    => esc_html__( 'Main Row', 'responsive' ),
					'panel'    => 'responsive_header',
					'priority' => 110,
				)
			);

			// Main Row Desktop Layout.
			$main_row_desktop_layout         = esc_html__( 'Main Row Desktop Layout', 'responsive' );
			$main_row_desktop_layout_choices = array(
				'standard'  => esc_html__( 'Contained', 'responsive' ),
				'fullwidth' => esc_html__( 'Fullwidth', 'responsive' ),
			);
			responsive_select_control( $wp_customize, 'header_main_layout', $main_row_desktop_layout, 'responsive_customizer_header_main', 15, $main_row_desktop_layout_choices, 'standard', null );

			// Main Row Tablet Layout.
			$main_row_tablet_layout         = esc_html__( 'Main Row Tablet Layout', 'responsive' );
			$main_row_tablet_layout_choices = array(
				'standard'  => esc_html__( 'Standard', 'responsive' ),
				'fullwidth' => esc_html__( 'Fullwidth', 'responsive' ),
				'contained' => esc_html__( 'Contained', 'responsive' ),
			);
			responsive_select_control( $wp_customize, 'header_tablet_main_layout', $main_row_tablet_layout, 'responsive_customizer_header_main', 20, $main_row_tablet_layout_choices, 'standard', null );

			// Main Row Mobile Layout.
			$main_row_mobile_layout         = esc_html__( 'Main Row Mobile Layout', 'responsive' );
			$main_row_mobile_layout_choices = array(
				'standard'  => esc_html__( 'Standard', 'responsive' ),
				'fullwidth' => esc_html__( 'Fullwidth', 'responsive' ),
				'contained' => esc_html__( 'Contained', 'responsive' ),
			);
			responsive_select_control( $wp_customize, 'header_mobile_main_layout', $main_row_mobile_layout, 'responsive_customizer_header_main', 25, $main_row_mobile_layout_choices, 'standard', null );

			$main_row_min_height_label = esc_html__( 'Min Height (px)', 'responsive' );
			responsive_drag_number_control( $wp_customize, 'main_row_min_height', $main_row_min_height_label, 'responsive_customizer_header_main', 30, 80, null, 400 );

			$main_row_min_height_tablet_label = esc_html__( 'Min Height Tablet(px)', 'responsive' );
			responsive_drag_number_control( $wp_customize, 'main_row_min_height_tablet', $main_row_min_height_tablet_label, 'responsive_customizer_header_main', 35, 0, null, 400 );

			$main_row_min_height_mobile_label = esc_html__( 'Min Height Mobile(px)', 'responsive' );
			responsive_drag_number_control( $wp_customize, 'main_row_min_height_mobile', $main_row_min_height_mobile_label, 'responsive_customizer_header_main', 40, 0, null, 400 );

			$main_row_background_label = __( 'Background Desktop', 'responsive' );
			responsive_color_control( $wp_customize, 'main_row_background_desktop', $main_row_background_label, 'responsive_customizer_header_main', 45, '', null );

			$main_row_background_tablet_label = __( 'Background Tablet', 'responsive' );
			responsive_color_control( $wp_customize, 'main_row_background_tablet', $main_row_background_tablet_label, 'responsive_customizer_header_main', 50, '', null );

			$main_row_background_mobile_label = __( 'Background Mobile', 'responsive' );
			responsive_color_control( $wp_customize, 'main_row_background_mobile', $main_row_background_mobile_label, 'responsive_customizer_header_main', 55, '', null );

			// Padding (px).
			$main_row_padding_label = __( 'Padding (px)', 'responsive' );
			responsive_padding_control( $wp_customize, 'main_row', 'responsive_customizer_header_main', 60, null, null, null, $main_row_padding_label );

			$main_row_options_label = esc_html__( 'Border Options', 'responsive' );
			responsive_separator_control( $wp_customize, 'main_row_options_separator', $main_row_options_label, 'responsive_customizer_header_main', 65 );

			$main_row_border_top_style_choices = array(
				'none'   => __( 'None', 'responsive' ),
				'solid'  => __( 'Solid', 'responsive' ),
				'dashed' => __( 'Dashed', 'responsive' ),
				'dotted' => __( 'Dotted', 'responsive' ),
			);
			$main_row_border_top_style_label   = __( 'Border Top Style', 'responsive' );
			responsive_select_control( $wp_customize, 'main_row_border_top_style', $main_row_border_top_style_label, 'responsive_customizer_header_main', 70, $main_row_border_top_style_choices, 'none', null );

			$main_row_border_top_size_label = esc_html__( 'Border Top Width', 'responsive' );
			responsive_drag_number_control( $wp_customize, 'main_row_border_top_size', $main_row_border_top_size_label, 'responsive_customizer_header_main', 75, 1, null, 20, 1, 'postMessage' );

			$main_row_border_bottom_style_choices = array(
				'none'   => __( 'None', 'responsive' ),
				'solid'  => __( 'Solid', 'responsive' ),
				'dashed' => __( 'Dashed', 'responsive' ),
				'dotted' => __( 'Dotted', 'responsive' ),
			);

			$main_row_border_bottom_style_label = __( 'Border Bottom Style', 'responsive' );
			responsive_select_control( $wp_customize, 'main_row_border_bottom_style', $main_row_border_bottom_style_label, 'responsive_customizer_header_main', 80, $main_row_border_bottom_style_choices, 'none', null );

			$main_row_border_bottom_size_label = esc_html__( 'Border Bottom Width', 'responsive' );
			responsive_drag_number_control( $wp_customize, 'main_row_border_bottom_size', $main_row_border_bottom_size_label, 'responsive_customizer_header_main', 85, 1, null, 20, 1, 'postMessage' );

			$main_row_border_top_tablet_style_choices = array(
				'none'   => __( 'None', 'responsive' ),
				'solid'  => __( 'Solid', 'responsive' ),
				'dashed' => __( 'Dashed', 'responsive' ),
				'dotted' => __( 'Dotted', 'responsive' ),
			);
			$main_row_border_top_tablet_style_label   = __( 'Tablet Border Top Style', 'responsive' );
			responsive_select_control( $wp_customize, 'main_row_border_top_tablet_style', $main_row_border_top_tablet_style_label, 'responsive_customizer_header_main', 90, $main_row_border_top_tablet_style_choices, 'none', null );

			$main_row_border_top_tablet_size_label = esc_html__( 'Tablet Border Top Width', 'responsive' );
			responsive_drag_number_control( $wp_customize, 'main_row_border_top_tablet_size', $main_row_border_top_tablet_size_label, 'responsive_customizer_header_main', 95, 1, null, 20, 1, 'postMessage' );

			$main_row_border_bottom_tablet_style_choices = array(
				'none'   => __( 'None', 'responsive' ),
				'solid'  => __( 'Solid', 'responsive' ),
				'dashed' => __( 'Dashed', 'responsive' ),
				'dotted' => __( 'Dotted', 'responsive' ),
			);

			$main_row_border_bottom_tablet_style_label = __( 'Tablet Border Bottom Style', 'responsive' );
			responsive_select_control( $wp_customize, 'main_row_border_bottom_tablet_style', $main_row_border_bottom_tablet_style_label, 'responsive_customizer_header_main', 100, $main_row_border_bottom_tablet_style_choices, 'none', null );

			$main_row_border_bottom_tablet_size_label = esc_html__( 'Tablet Border Bottom Width', 'responsive' );
			responsive_drag_number_control( $wp_customize, 'main_row_border_bottom_tablet_size', $main_row_border_bottom_tablet_size_label, 'responsive_customizer_header_main', 105, 1, null, 20, 1, 'postMessage' );
			$main_row_border_top_mobile_style_choices = array(
				'none'   => __( 'None', 'responsive' ),
				'solid'  => __( 'Solid', 'responsive' ),
				'dashed' => __( 'Dashed', 'responsive' ),
				'dotted' => __( 'Dotted', 'responsive' ),
			);
			$main_row_border_top_mobile_style_label   = __( 'Mobile Border Top Style', 'responsive' );
			responsive_select_control( $wp_customize, 'main_row_border_top_mobile_style', $main_row_border_top_mobile_style_label, 'responsive_customizer_header_main', 110, $main_row_border_top_mobile_style_choices, 'none', null );

			$main_row_border_top_mobile_size_label = esc_html__( 'Mobile Border Top Width', 'responsive' );
			responsive_drag_number_control( $wp_customize, 'main_row_border_top_mobile_size', $main_row_border_top_mobile_size_label, 'responsive_customizer_header_main', 115, 1, null, 20, 1, 'postMessage' );

			$main_row_border_bottom_mobile_style_choices = array(
				'none'   => __( 'None', 'responsive' ),
				'solid'  => __( 'Solid', 'responsive' ),
				'dashed' => __( 'Dashed', 'responsive' ),
				'dotted' => __( 'Dotted', 'responsive' ),
			);

			$main_row_border_bottom_mobile_style_label = __( 'Mobile Border Bottom Style', 'responsive' );
			responsive_select_control( $wp_customize, 'main_row_border_bottom_mobile_style', $main_row_border_bottom_mobile_style_label, 'responsive_customizer_header_main', 120, $main_row_border_bottom_mobile_style_choices, 'none', null );

			$main_row_border_bottom_mobile_size_label = esc_html__( 'Mobile Border Bottom Width', 'responsive' );
			responsive_drag_number_control( $wp_customize, 'main_row_border_bottom_mobile_size', $main_row_border_bottom_mobile_size_label, 'responsive_customizer_header_main', 125, 1, null, 20, 1, 'postMessage' );

			$main_row_border_top_color_label = __( 'Border Top Color', 'responsive' );
			responsive_color_control( $wp_customize, 'main_row_border_top', $main_row_border_top_color_label, 'responsive_customizer_header_main', 130, '#fff', null );

			$main_row_border_bottom_color_label = __( 'Border Bottom Color', 'responsive' );
			responsive_color_control( $wp_customize, 'main_row_border_bottom', $main_row_border_bottom_color_label, 'responsive_customizer_header_main', 135, '#fff', null );

			$main_row_border_top_tablet_color_label = __( 'Tablet Border Top Color', 'responsive' );
			responsive_color_control( $wp_customize, 'main_row_border_top_tablet', $main_row_border_top_tablet_color_label, 'responsive_customizer_header_main', 140, '#fff', null );

			$main_row_border_bottom_tablet_color_label = __( 'Tablet Border Bottom Color', 'responsive' );
			responsive_color_control( $wp_customize, 'main_row_border_bottom_tablet', $main_row_border_bottom_tablet_color_label, 'responsive_customizer_header_main', 145, '#fff', null );

			$main_row_border_top_mobile_color_label = __( 'Mobile Border Top Color', 'responsive' );
			responsive_color_control( $wp_customize, 'main_row_border_top_mobile', $main_row_border_top_mobile_color_label, 'responsive_customizer_header_main', 150, '#fff', null );

			$main_row_border_bottom_mobile_color_label = __( 'Mobile Border Bottom Color', 'responsive' );
			responsive_color_control( $wp_customize, 'main_row_border_bottom_mobile', $main_row_border_bottom_mobile_color_label, 'responsive_customizer_header_main', 155, '#fff', null );

		}

	}

endif;

return new Responsive_Builder_Main_Row();

<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class Pest_Control_Treatment_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'pest-control-treatment-typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'pest-control-treatment' ),
				'family'      => esc_html__( 'Font Family', 'pest-control-treatment' ),
				'size'        => esc_html__( 'Font Size',   'pest-control-treatment' ),
				'weight'      => esc_html__( 'Font Weight', 'pest-control-treatment' ),
				'style'       => esc_html__( 'Font Style',  'pest-control-treatment' ),
				'line_height' => esc_html__( 'Line Height', 'pest-control-treatment' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'pest-control-treatment' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'pest-control-treatment-ctypo-customize-controls' );
		wp_enqueue_style(  'pest-control-treatment-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'pest-control-treatment' ),
        'Abril Fatface' => __( 'Abril Fatface', 'pest-control-treatment' ),
        'Acme' => __( 'Acme', 'pest-control-treatment' ),
        'Anton' => __( 'Anton', 'pest-control-treatment' ),
        'Architects Daughter' => __( 'Architects Daughter', 'pest-control-treatment' ),
        'Arimo' => __( 'Arimo', 'pest-control-treatment' ),
        'Arsenal' => __( 'Arsenal', 'pest-control-treatment' ),
        'Arvo' => __( 'Arvo', 'pest-control-treatment' ),
        'Alegreya' => __( 'Alegreya', 'pest-control-treatment' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'pest-control-treatment' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'pest-control-treatment' ),
        'Bangers' => __( 'Bangers', 'pest-control-treatment' ),
        'Boogaloo' => __( 'Boogaloo', 'pest-control-treatment' ),
        'Bad Script' => __( 'Bad Script', 'pest-control-treatment' ),
        'Bitter' => __( 'Bitter', 'pest-control-treatment' ),
        'Bree Serif' => __( 'Bree Serif', 'pest-control-treatment' ),
        'BenchNine' => __( 'BenchNine', 'pest-control-treatment' ),
        'Cabin' => __( 'Cabin', 'pest-control-treatment' ),
        'Cardo' => __( 'Cardo', 'pest-control-treatment' ),
        'Courgette' => __( 'Courgette', 'pest-control-treatment' ),
        'Cherry Swash' => __( 'Cherry Swash', 'pest-control-treatment' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'pest-control-treatment' ),
        'Crimson Text' => __( 'Crimson Text', 'pest-control-treatment' ),
        'Cuprum' => __( 'Cuprum', 'pest-control-treatment' ),
        'Cookie' => __( 'Cookie', 'pest-control-treatment' ),
        'Chewy' => __( 'Chewy', 'pest-control-treatment' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'' => esc_html__( 'No Fonts weight', 'pest-control-treatment' ),
			'100' => esc_html__( 'Thin',       'pest-control-treatment' ),
			'300' => esc_html__( 'Light',      'pest-control-treatment' ),
			'400' => esc_html__( 'Normal',     'pest-control-treatment' ),
			'500' => esc_html__( 'Medium',     'pest-control-treatment' ),
			'700' => esc_html__( 'Bold',       'pest-control-treatment' ),
			'900' => esc_html__( 'Ultra Bold', 'pest-control-treatment' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'' => esc_html__( 'No Fonts Style', 'pest-control-treatment' ),
			'normal'  => esc_html__( 'Normal', 'pest-control-treatment' ),
			'italic'  => esc_html__( 'Italic', 'pest-control-treatment' ),
			'oblique' => esc_html__( 'Oblique', 'pest-control-treatment' )
		);
	}
}

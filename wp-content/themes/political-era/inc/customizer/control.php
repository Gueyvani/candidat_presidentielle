<?php
/**
 * Custom Customizer Controls.
 *
 * @package Political_Era
 */
if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}
/**
 * Class Political_Era_Dropdown_Taxonomies_Control
 */
class Political_Era_Dropdown_Taxonomies_Control extends WP_Customize_Control {

    /**
     * Render the control's content.
     *
     * @since 3.4.0
     */
    public function render_content() {
        $dropdown = wp_dropdown_categories(
            array(
                'name'              => 'political-era-dropdown-categories-' . $this->id,
                'echo'              => 0,
                'show_option_none'  => __( '&mdash; Select &mdash;', 'political-era' ),
                'option_none_value' => '0',
                'selected'          => $this->value(),
                'hide_empty'        => 0,                   

            )
        ); 
        
        $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );

        printf(
            '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s <span class="description customize-control-description"></span>%s </label>',
            esc_html($this->label),
            esc_html($this->description),
            $dropdown

        );
    }

}
/*
* Class Political_Era_Customize_Icons_Control
*
*/
class Political_Era_Customize_Icons_Control extends WP_Customize_Control {

    public $type = 'political_icons';

    public function render_content() {

          $saved_icon_value = $this->value();
         ?>
        <label>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
            <div class="fa-icons-list">
                <div class="selected-icon-preview"><?php if( !empty( $saved_icon_value ) ) { echo '<i class="fa '. esc_attr($saved_icon_value) .'"></i>'; } ?></div>
                    <ul class="icons-list-wrapper">
                        <?php 
                        $political_icons_list = political_era_all_icons_array();
                        foreach ( $political_icons_list as $key => $icon_value ) {
                            if( $saved_icon_value == $icon_value ) {
                                echo '<li class="selected"><i class="fa '. esc_attr($icon_value) .'"></i></li>';
                            } else {
                                echo '<li><i class="fa '. esc_attr($icon_value) .'"></i></li>';
                            }
                        }
                        ?>
                    </ul>
                <input type="hidden" class="ap-icon-value" value="" <?php $this->link(); ?>>
            </div>

        </label>
    <?php   }
}

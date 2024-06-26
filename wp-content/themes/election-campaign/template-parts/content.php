<?php
/**
 * The template part for displaying content
 * @package Election Campaign
 * @subpackage election_campaign
 * @since 1.0
 */
?>

<?php $election_campaign_theme_lay = get_theme_mod( 'election_campaign_post_layouts','Layout 2');
if($election_campaign_theme_lay == 'Layout 1'){ 
	get_template_part('template-parts/Post-layouts/layout1'); 
}else if($election_campaign_theme_lay == 'Layout 2'){ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}else if($election_campaign_theme_lay == 'Layout 3'){ 
	get_template_part('template-parts/Post-layouts/layout3'); 
}else{ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}
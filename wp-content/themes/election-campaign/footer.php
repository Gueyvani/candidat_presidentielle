<?php
/**
 * The template for displaying the footer.
 * @package Election Campaign
 */
?>
<?php if( get_theme_mod( 'election_campaign_hide_show_scroll',true) != '' || get_theme_mod( 'election_campaign_display_scrolltop',true) != '') { ?>
    <?php $election_campaign_theme_lay = get_theme_mod( 'election_campaign_footer_options','Right');
    if($election_campaign_theme_lay == 'Left align'){ ?>
        <a href="#" id="scrollbutton" class="left"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'election-campaign' ); ?></span></a>
    <?php }else if($election_campaign_theme_lay == 'Center align'){ ?>
        <a href="#" id="scrollbutton" class="center"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'election-campaign' ); ?></span></a>
    <?php }else{ ?>
        <a href="#" id="scrollbutton"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'election-campaign' ); ?></span></a>
    <?php }?>
<?php }?>
<footer role="contentinfo">
    <?php //Set widget areas classes based on user choice
        $election_campaign_widget_areas = get_theme_mod('election_campaign_footer_widget_areas', '4');
        if ($election_campaign_widget_areas == '3') {
            $election_campaign_cols = 'col-md-4';
        } elseif ($election_campaign_widget_areas == '4') {
            $election_campaign_cols = 'col-md-3';
        } elseif ($election_campaign_widget_areas == '2') {
            $election_campaign_cols = 'col-md-6';
        } else {
            $election_campaign_cols = 'col-md-12';
        }
    ?>
    <aside id="sidebar-footer" class="footer-wp" role="complementary">
        <div class="container">
            <div class="row">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div class="sidebar-column <?php echo ( $election_campaign_cols ) ?>">
                        <?php dynamic_sidebar( 'footer-1'); ?>
                    </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <div class="sidebar-column <?php echo ( $election_campaign_cols ) ?>">
                        <?php dynamic_sidebar( 'footer-2'); ?>
                    </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <div class="sidebar-column <?php echo ( $election_campaign_cols ) ?>">
                        <?php dynamic_sidebar( 'footer-3'); ?>
                    </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                    <div class="sidebar-column <?php echo ( $election_campaign_cols ) ?>">
                        <?php dynamic_sidebar( 'footer-4'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </aside>
	<div class="copyright-wrapper py-3 px-0">
        <div class="container">
            <p><?php election_campaign_credit(); ?> <?php echo esc_html(get_theme_mod('election_campaign_footer_copy',__('By Buywptemplate','election-campaign'))); ?></p>
        </div>
        <div class="clear"></div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * Template for Video Section
 *
 * @package Political_Era
 */

$enable_video = political_era_get_option( 'enable_video' );
if ( false == $enable_video ){
    return;
}

$video_title = political_era_get_option( 'video_title' );
$video_sub_title = political_era_get_option( 'video_sub_title' );
$video_image = political_era_get_option( 'video_image' );
$video_url = political_era_get_option( 'video_url' );
$video_button = political_era_get_option( 'video_button' );
$video_button_url = political_era_get_option( 'video_button_url' );
?>
    <section class="video-section default-padding">
        <div class="container">
            <div class="section-wrap">
                <figure class="animated wow fadeInDown" data-wow-duration="1s">
                    <img src="<?php echo esc_url( $video_image);?>">
                    <a class="popup-video animated wow shake" data-wow-duration="1.02s" href="<?php echo esc_url( $video_url );?>"> 
                        <span class="media-icon"></span>
                    </a>
                </figure>
                <div class="section-intro animated wow fadeInUp" data-wow-duration="1s">
                    <header class="entry-header">
                    	<?php if ( $video_sub_title ): ?>
	                        <span class="entry-subtitle">
	                            <?php echo esc_html( $video_sub_title )?>
	                        </span>
                        <?php endif; ?>
                        <?php if ( !empty($video_title ) ): ?>
	                        <h2 class="entry-title">
	                           <?php echo esc_html( $video_title ); ?>
	                        </h2>
                        <?php endif; ?>
                    </header>
                    <?php if ( !empty( $video_button ) ): ?>
                    	<a class="button animated wow fadeInUp" data-wow-duration="0.5s" href="<?php echo esc_url( $video_button_url);?>"><?php echo esc_html( $video_button);?></a>
                	<?php endif; ?>
                </div>
            </div>
        </div>
    </section>
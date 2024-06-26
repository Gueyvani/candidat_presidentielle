<?php
/**
 * Custom template tags for this theme.
 * Eventually, some of the functionality here could be replaced by core features
 * @package Election Campaign
 */

if ( ! function_exists( 'election_campaign_the_attached_image' ) ) :
/**
 * Prints the attached image with a link to the next attached image.
 */
function election_campaign_the_attached_image() {
	$post                = get_post();
	$attachment_size     = apply_filters( 'election_campaign_attachment_size', array( 1200, 1200 ) );
	$next_attachment_url = wp_get_attachment_url();
	$attachment_ids 	 = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    =>  1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
	wp_reset_postdata();
}
endif;

/**
 * Returns true if a blog has more than 1 category
 */
function election_campaign_categorized_blog() {
	if ( false === ( $election_campaign_all_the_cool_cats = get_transient( 'election_campaign_all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$election_campaign_all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$election_campaign_all_the_cool_cats = count( $election_campaign_all_the_cool_cats );

		set_transient( 'election_campaign_all_the_cool_cats', $election_campaign_all_the_cool_cats );
	}

	if ( '1' != $election_campaign_all_the_cool_cats ) {
		// This blog has more than 1 category so election_campaign_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so election_campaign_categorized_blog should return false
		return false;
	}
}

if ( ! function_exists( 'election_campaign_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since Election Campaign
 */
function election_campaign_the_custom_logo() {
	the_custom_logo();
}
endif;

/**
 * Flush out the transients used in election_campaign_categorized_blog
 */
function election_campaign_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'election_campaign_all_the_cool_cats' );
}
add_action( 'edit_category', 'election_campaign_category_transient_flusher' );
add_action( 'save_post',     'election_campaign_category_transient_flusher' );

/**
 * Posts pagination.
 */
if ( ! function_exists( 'election_campaign_pagination_settings' ) ) {
	function election_campaign_pagination_type() {
		$election_campaign_pagination_type = get_theme_mod( 'election_campaign_pagination_settings', 'Numeric Pagination' );
		if ( $election_campaign_pagination_type == 'Numeric Pagination' ) {
			the_posts_pagination();
		} else {
			the_posts_navigation();
		}
	}
}

if ( ! function_exists( 'election_campaign_pagination_position' ) ) {
	function election_campaign_blog_post_content() {
		$election_campaign_blog_post_content = get_theme_mod( 'election_campaign_blog_post_content');
		if ( have_posts() ) :
        /* Start the Loop */          
        while ( have_posts() ) : the_post();
          get_template_part( 'template-parts/content',get_post_format() );           
        endwhile;
        else :
          get_template_part( 'no-results' ); 
        endif; 
	}
}

/*-- Custom metafield --*/
function election_campaign_custom_event_details() {
  	add_meta_box( 'bn_meta', __( 'Election Campaign Meta Feilds', 'election-campaign' ), 'election_campaign_meta_event_details_callback', 'post', 'normal', 'high' );
}
if (is_admin()){
  	add_action('admin_menu', 'election_campaign_custom_event_details');
}

function election_campaign_meta_event_details_callback( $post ) {
  	wp_nonce_field( basename( __FILE__ ), 'election_campaign_event_details_meta' );
  	$bn_stored_meta = get_post_meta( $post->ID );
  	$election_campaign_icon = get_post_meta( $post->ID, 'election_campaign_icon', true );
  	?>
  	<div id="custom_meta_feilds">
	    <table id="list">
	      	<tbody id="the-list" data-wp-lists="list:meta">
	      		<span><?php esc_html_e('Add Font Awesome Icon Code , Example : fas fa-thermometer-three-quarters','election-campaign'); ?> 
		    		<a href="https://fontawesome.com/v5/icons/thermometer-three-quarters?f=classic&s=solid"><?php esc_html_e('Click Here','election-campaign'); ?></a>
		    	</span>
		        <tr id="meta-8">
		          	<td class="left">
		            	<?php esc_html_e( 'Post Icon', 'election-campaign' )?>
		          	</td>
		          	<td class="left">
		            	<input type="text" name="election_campaign_icon" id="election_campaign_icon" value="<?php echo esc_attr($election_campaign_icon); ?>" />
		          	</td>
		        </tr>
	      	</tbody>
	    </table>
  	</div>
  	<?php
}

function election_campaign_save( $post_id ) {
  	if (!isset($_POST['election_campaign_event_details_meta']) || !wp_verify_nonce( strip_tags( wp_unslash( $_POST['election_campaign_event_details_meta']) ), basename(__FILE__))) {
      	return;
  	}
  	if (!current_user_can('edit_post', $post_id)) {
   		return;
  	}
  	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    	return;
  	}
  	if( isset( $_POST[ 'election_campaign_icon' ] ) ) {
    	update_post_meta( $post_id, 'election_campaign_icon', strip_tags( wp_unslash( $_POST[ 'election_campaign_icon' ]) ) );
  	}
}
add_action( 'save_post', 'election_campaign_save' );
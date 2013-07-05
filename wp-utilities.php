<!-- For IMAGES -->
<?php echo get_stylesheet_directory_uri(); ?>/


<!-- For URL's -->
<?php bloginfo('url'); ?>/how-it-works/

<!-- The Loop -->
<?php
	if (have_posts()) : while (have_posts()) : the_post(); the_content();
	endwhile;
	endif;
?>

<!-- Display Custom Fields -->
<?php echo get_post_meta($post->ID, 'left_bullets', TRUE); ?>
<?php echo get_post_meta($post->ID, 'center_bullets', TRUE); ?>
<?php echo get_post_meta($post->ID, 'right_bullets', TRUE); ?>


<!-- Signup URL -->
http://eepurl.com/ufxFj

<!-- Login URL -->
https://app.opdemand.com/login

<!-- Retired wp_nav_menu function -->
<?php wp_nav_menu( array(
				'container_class' => 'accordion',
				'container_id' => 'accordion2',
				'theme_location' => 'docs', 
				'menu_class' => 'docs_menu', 
				'link_before' => '<span class="btn btn-large btn-block accordion">',
				'link_after' => '</span>'
				
			)); ?> 

<!--h3>Tags</h3-->
<?php// the_tags('<ul class="blog_tags"><li>','</li><li>','</li></ul>'); ?>
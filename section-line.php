<?php
/**
 * The template for displaying content in 'Per Line' post section.
 * @since 1.6
 */
?>

<li <?php post_class() ?>>
	<span class="entry-date"><?php the_time( get_option( 'date_format' ) ) ?></span>
	<h3 class="entry-title"><a rel="bookmark" href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'ar2'), get_the_title() ) ?>"><?php the_title() ?></a></h3>
	<a class="entry-comments" href="<?php comments_link() ?>"><?php comments_number( __( 'No Comments', 'ar2' ), __( '1 Comment', 'ar2' ), _n( '% Comment', '% Comments', get_comments_number(), 'ar2' ) ) ?></a>
</li>
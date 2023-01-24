<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Big_Bob
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			big_bob_posted_on();
			big_bob_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<?php 
    if (get_theme_mod('big_bob_fearued_post_page', 'Off') == 'On') {
        ?>
		<div class="bb-center-image">
		<?php big_bob_post_thumbnail();
    }
		?>

	<div class="entry-summary">
		<?php if (is_search() && (get_theme_mod( 'big_bob_excerpt_mode', 'Off' ) == 'On' )) {
            the_excerpt();
        } else {
            the_content(
                sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'big-chill'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post(get_the_title())
            )
            );
        } ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php big_bob_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

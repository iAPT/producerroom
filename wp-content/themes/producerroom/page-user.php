<?php
/**
 * The template for displaying  user profile page.
 *
 * @package _tk
 */
get_header('user');
?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'content', 'page' ); ?>

		

	<?php endwhile; // end of the loop. ?>
</div><!--end close .*-inner (main-content or sidebar, depending if sidebar is used)-->

</div><!-- end row-->

<?php get_footer('user'); ?>



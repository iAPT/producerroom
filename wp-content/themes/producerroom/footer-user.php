<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
	</div><!-- close .container -->

</div><!-- close .main-content -->


<footer id="colophon" class="site-footer" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
					<?php do_action( '_tk_credits' ); ?>
					<a href="#" title="<?php esc_attr_e( 'Abouts us', '_tk' ); ?>" rel="generator"><?php printf( __( 'About Us', '_tk' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
                    <a class="credits" href="#" target="_blank" title="Terms and conditions" alt="Terms and conditions"><?php _e('Terms and conditions','_tk') ?> </a>
				<span class="sep"> | </span>
                    <a class="credits" href="#" target="_blank" title="FAQ" alt="FAQ"><?php _e('FAQ','_tk') ?> </a>
	<span class="sep"> | </span>
                    <a class="credits" href="#" target="_blank" title="Privacy policy" alt="Privacy policy"><?php _e('Privacy policy','_tk') ?> </a>
	<span class="sep"> | </span>
                    <a class="credits" href="#" target="_blank" title="Jobs" alt="Jobs"><?php _e('Jobs','_tk') ?> </a>
                <span class="sep"> | </span>  
                   <a class="credits" href="#" target="_blank" title="Contact us" alt="Contact us"><?php _e('Contact us','_tk') ?> </a>	
 				</div><!-- close .site-info -->

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</div><!--close .main-container-->
</body>
</html>

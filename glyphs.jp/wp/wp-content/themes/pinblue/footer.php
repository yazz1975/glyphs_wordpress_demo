
</div><!-- #page -->


	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'pinblue_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'pinblue' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'pinblue' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'pinblue' ), 'WordPress' ); ?></a>
            
            <?php if ( is_home() || is_front_page() ) : ?>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'http://wpthemes.co.nz/pinblue-theme/', 'pinblue' ) ); ?>" rel="designer"><?php printf( __( '%s Theme', 'pinblue' ), 'Pinblue' ); ?></a><?php printf( __( ' by %s', 'pinblue' ), 'WPThemes NZ' ); ?>
            <?php endif; ?>
		</div>
	</footer><!-- #colophon -->
    
<?php wp_footer(); ?>

</body>
</html>
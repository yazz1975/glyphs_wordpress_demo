
</div>

<footer id="colophon" role="contentinfo">
    <div id="site-generator">
        <?php do_action( 'pinblack_credits' ); ?>
        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'pinblack' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'pinblack' ); ?>"><?php printf( __( 'Proudly powered by %s', 'pinblack' ), 'WordPress' ); ?></a>
        <?php if ( is_home() || is_front_page() ) : ?>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'http://wpthemes.co.nz/', 'pinblack' ) ); ?>"><?php printf( __( '%1$s Theme by %2$s', 'pinblack' ), 'Pinblack', 'WPThemes NZ' ); ?></a>
            <?php endif; ?>
    </div>
</footer>
    
<?php wp_footer(); ?>

</body>
</html>
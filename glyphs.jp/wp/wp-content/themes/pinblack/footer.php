</div>

<footer id="colophon" role="contentinfo">
    <div id="site-generator">
        <?php do_action( 'pinblack_credits' ); ?>
        <a href="<?php echo esc_url( __( 'http://glyphs.jp/?page_id=2', 'pinblack' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'pinblack' ); ?>"><?php printf( __( '%s', 'pinblack' ), 'What is Glyphs' ); ?></a>
        <?php if ( is_home() || is_front_page() ) : ?>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'http://glyphs.jp/', 'pinblack' ) ); ?>"><?php printf( __( 'GO Back to Top', 'pinblack' ), 'Pinblack', 'Go Back to Top' ); ?></a>
            <?php endif; ?>
    </div>
</footer>
    
<?php wp_footer(); ?>

</body>
</html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title('|', true, 'left'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'before' ); ?>
	<header>
      <div id="inner-header" class="clearfix" align="center">
        <a href="<?php echo home_url( '/' ); ?>"title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://glyphs.jp/wp/wp-content/uploads/2013/01/full_colourful1.png"></a>
        <!-img src="http://glyphs.jp/wp/wp-content/uploads/2013/01/header.png"->
      </div>
	</header><!-- #branding -->

<!-- #access -->
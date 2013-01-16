<?
define('WP_INSTALLING', true);

require_once('../wp-load.php');
require_once('./includes/upgrade.php');

$blog_title = base64_decode('R2x5cGhz', false);
$user_name  = 'admin';
$user_email = 'yazz1975@hotmail.co.jp';
$blog_url   = 'http://glyphs.jp/wp';
$public     = 1;

//$blog_home = str_replace('/wp', '', $blog_url);
$blog_home = 'http://glyphs.jp';

$blog_pass = 'ultra7';

if( is_blog_installed() ){
  print "Blog already installed!\n";
}
else {
  define('WP_SITEURL', $blog_url);
  $result = wp_install($blog_title, $user_name, $user_email, $public, '', $blog_pass) ;
  /* uncomment this if you care what the auto-generated password is. But it gets changed below.
  extract($result, EXTR_SKIP);
  echo "PASSWORD: $password\n";
  */
}

define('WP_INSTALLING', false);
$my_users = array(
  'admin' => array( 'name' => 'admin',  'email' => 'yazz1975@hotmail.co.jp', 'pass' => 'ultra7'),
  );

foreach( $my_users as $user ){
  $user_id = username_exists($user['name']);
  if( !$user_id ){
    $user_id = wp_create_user($user['name'], $user['pass'], $user['email']);
    $user = new WP_User($user_id);
    $user->set_role('administrator');
  } else {
    echo "User '".$user['name']."' already exists (forcing password)\n";
    $user['ID']        = $user_id;
    $user['user_pass'] = $user['pass'];
    wp_update_user($user);
    $user = new WP_User($user_id);
    $user->set_role('administrator');
  }
}

// siteurl: http://domain.net/wp/wp-admin/index.php
// blogurl: http://domain.net/index.php
update_option('home', $blog_home);

/**
 * activate jetpack plugin.
 */

$basepath = dirname(__FILE__);
if ( file_exists("$basepath/enable_jetpack_admin.php") ){
  require_once $basepath . '/enable_jetpack_admin.php';

  $plugin = 'jetpack/jetpack.php';
  $result = activate_plugin($plugin, '', false);

  if($result != null) {
    trigger_error('Unable to enable jetpack plugin.', E_USER_ERROR);
  }
}

?>

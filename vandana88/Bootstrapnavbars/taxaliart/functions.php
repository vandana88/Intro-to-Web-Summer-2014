<?php
// add custom menu
function register_taxali_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __('Primary Menu'),
      'secondary-menu' => __('Secondary Menu'),
      'tertiary-menu' => __('Tertiary Menu')
    )
  );
}
add_action('init', 'register_taxali_menus');

// add home page option to custom menu
function home_page_menu_args($args) {
  $args['show_home'] = true;
  return $args;
}
add_filter('wp_page_menu_args', 'home_page_menu_args');

// custom tinymce controls - http://www.wdmac.com/how-to-use-custom-styles-in-the-word-press-post-editor
if (!function_exists('myCustomTinyMCE')) :
  function myCustomTinyMCE($init) {
    $init['theme_advanced_disable'] = 'outdent, indent, justifyleft, justifyright, justifyfull, bullist, numlist, outdent, indent, fontselect, fontsizeselect, forecolor, backcolor, forecolorpicker, backcolorpicker, formatselect';
    $init['theme_advanced_buttons2_add_before'] = 'styleselect';
    $init['theme_advanced_styles'] = 'gcenter = gcenter';
    $init['theme_advanced_styles'] = 'centeredds = centeredds';
    return $init;
  }
endif;
add_filter('tiny_mce_before_init', 'myCustomTinyMCE');
add_filter('mce_css', 'tdav_css');
function mycustomStyles() {
  wp_enqueue_style('myCustomStyles', get_bloginfo('stylesheet_url'), ',', 'all');
}
add_action('init', 'mycustomStyles');

// add category nicenames in body and post class
function category_id_class($classes) {
    global $post;
    foreach((get_the_category($post->ID)) as $category)
        $classes[] = $category->category_nicename;
        return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   
}

if ( function_exists( 'add_image_size' ) ) { 
  add_image_size( 'event-thumb', 125, 9999 ); //300 pixels wide (and unlimited height)
}

if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'Header Widget',
    'id' => 'Header-widget',
    'description' => 'Widget space at the top. Currently unused.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));
}

if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'Footer Widget',
    'id' => 'footer-widget',
    'description' => 'Widget space at the bottom.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));
}

if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'Additional Widget Space A',
    'id' => 'additional-widget-a',
    'description' => 'Additional widget space. Currently unused.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));
}

if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'Additional Widget Space B',
    'id' => 'additional-widget-b',
    'description' => 'Additional widget space. Currently unused.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));
}

if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'Additional Widget Space C',
    'id' => 'additional-widget-c',
    'description' => 'Additional widget space. Currently unused.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));
}
?>
<?php
$key = "taxali";
$meta_boxes = array(
  "image-id" => array(
    "name" => "image-id",
    "title" => "Image ID",
    "description" => "When viewing an image in the gallery every image will have a title like: attachment=X"
  ),
  "page-slug" => array(
    "name" => "page-slug",
    "title" => "Page Slug",
    "description" => "For the page you want to link to from the main splash page insert the page slug here. Ex. If you want to link to a specific event"
  ),
  "logo-url" => array(
    "name" => "logo-url",
    "title" => "Logo URL",
    "description" => "This is for the Press archives image. Shows up in a grid."
  ),
  "logo-url" => array(
    "name" => "details",
    "title" => "Event Details",
    "description" => "This text appears under the event title in the Show Archive."
  )
);

function create_meta_box() {
  global $key;

  if( function_exists( 'add_meta_box' ) ) {
    add_meta_box( 'new-meta-boxes', /* ucfirst( $key ) . */ 'Press Options', 'display_meta_box', 'post', 'normal', 'high' );
    add_meta_box( 'new-meta-boxes', /* ucfirst( $key ) . */ 'Home Page Options', 'display_meta_box', 'page', 'normal', 'high' );
  }
}

function display_meta_box() {
  global $post, $meta_boxes, $key; ?>

  <div class="form-wrap">

    <?php
    wp_nonce_field( plugin_basename( __FILE__ ), $key . '_wpnonce', false, true );

    foreach($meta_boxes as $meta_box) {
      $data = get_post_meta($post->ID, $key, true); ?>

      <div class="form-field form-required">
        <label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
        <input type="text" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); ?>" />

        <p><?php echo $meta_box[ 'description' ]; ?></p>
      </div>
    <?php } ?>

  </div>
<?php
}

function save_meta_box( $post_id ) {
  global $post, $meta_boxes, $key;

  foreach( $meta_boxes as $meta_box ) {
    $data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];
  }

  if ( !wp_verify_nonce( $_POST[ $key . '_wpnonce' ], plugin_basename(__FILE__) ) )
  return $post_id;

  if ( !current_user_can( 'edit_post', $post_id ))
  return $post_id;

  update_post_meta( $post_id, $key, $data );
}

add_action( 'admin_menu', 'create_meta_box' );
add_action( 'save_post', 'save_meta_box' );
?>
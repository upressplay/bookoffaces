<?php

add_image_size( 'share', 1200, 600, array( 'top', 'center' ) );
add_image_size( 'rect', 400, 225, array( 'center', 'center' ) );

add_action( 'after_setup_theme', 'movie_setup' );

function movie_setup()
{
	load_theme_textdomain( 'movie', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );

	global $content_width;

	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'movie' ) )
	);
}

add_action( 'wp_enqueue_scripts', 'movie_load_scripts' );

function movie_load_scripts()
{
	wp_enqueue_script( 'jquery' );
}

add_action( 'comment_form_before', 'movie_enqueue_comment_reply_script' );

function movie_enqueue_comment_reply_script()
{
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

add_filter( 'the_title', 'movie_title' );

function movie_title( $title ) {
	if ( $title == '' ) {
	return '&rarr;';
	} else {
	return $title;
	}
}
add_filter( 'wp_title', 'movie_filter_wp_title' );

function movie_filter_wp_title( $title )
{
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'movie_widgets_init' );

function movie_widgets_init()

{
register_sidebar( array (
	'name' => __( 'Sidebar Widget Area', 'blankslate' ),
	'id' => 'primary-widget-area',
	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	'after_widget' => "</li>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
}
function movie_custom_pings( $comment )

{

$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}

add_filter( 'get_comments_number', 'movie_comments_number' );

function movie_comments_number( $count )
	{
	if ( !is_admin() ) {
	global $id;
	$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
	return count( $comments_by_type['comment'] );
	} else {
	return $count;
	}
}

add_action('get_header', 'remove_admin_login_header');

function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

function empty_content($str) {
    return trim(str_replace('&nbsp;','',strip_tags($str,'<img>'))) == '';
}

function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;
 
    global $paged;
    if(empty($paged)) $paged = 1;
 
    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {
    	echo "<div class=\"page-nav\">";
    	if($paged >1) {
    		echo "<a href='".get_pagenum_link($paged-1)."'?><i class=\"gallery-arrow left\"></i></a>";
    	}
    	if($paged < $pages) {
    		echo "<a href='".get_pagenum_link($paged+1)."'?><i class=\"gallery-arrow right\"></i></a>";	
    	}
    	echo "</div>";
    }
}

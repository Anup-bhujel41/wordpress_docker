<?php
add_theme_support( 'post-thumbnails' );
add_action( 'after_setup_theme', 'create_thumb' );
function create_thumb() {
	add_image_size( 'thumbnail', 150, 150, true );
	add_image_size( 'medium', 400, 250, true );
	add_image_size( 'large', 768, 768);
    //add_image_size( 'square-thumb', 450, 450, true ); 
    // add_image_size( 'sadhana-thumb', 450, 350, true ); 
}
add_theme_support( 'html5', array(
    'search-form',
    'gallery',
    'caption',
) );
add_theme_support('post-formats', array('video','gallery'));
add_theme_support( 'jetpack-responsive-videos' );
if ( ! isset( $content_width ) ) {
	$content_width = 740;
}
//registering widgets
function appharu_widgets_init() {
		register_sidebar( array(
		'name'          => esc_html__( 'flip ads first', 'appharu' ),
		'id'            => 'flip-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'flip ads second', 'appharu' ),
		'id'            => 'flip-sidebar1',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'flip ads third', 'appharu' ),
		'id'            => 'flip-sidebar2',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'flip ads fourth', 'appharu' ),
		'id'            => 'flip-sidebar3',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'banner Sidebar', 'appharu' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Skip Ad', 'appharu' ),
		'id'            => 'skip-ad',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Logo right', 'appharu' ),
		'id'            => 'lup',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		// 'name'          => esc_html__( 'Below Yosata', 'appharu' ),
		// 'id'            => 'yosata',
		// 'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		// 'before_widget' => '<section class="widget">',
		// 'after_widget'  => '</section>',
		// 'before_title'  => '<h2 class="widget-title">',
		// 'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( ' Menu Below full size ads', 'appharu' ),
		'id'            => 'banner-top',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'मुख्य समाचार Below full size ads', 'appharu' ),
		'id'            => 'populr',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'khelkud mathi', 'appharu' ),
		'id'            => 'below-menu',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Below Banner', 'appharu' ),
		'id'            => 'below-banner',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Above Business', 'appharu' ),
		'id'            => 'above-business',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Right Business', 'appharu' ),
		'id'            => 'right-business',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'page 3 Up', 'appharu' ),
		'id'            => 'page3',	
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'page 3 Down', 'appharu' ),
		'id'            => 'page3d',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'update/pradesh Down', 'appharu' ),
		'id'            => 'nepald',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'interview up', 'appharu' ),
		'id'            => 'intup',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'interview Down', 'appharu' ),
		'id'            => 'intd',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'अन्तर्वार्ता-down', 'appharu' ),
		'id'            => 'bhar',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'संबन्धित down', 'appharu' ),
		'id'            => 'pop',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'siebar inside ', 'appharu' ),
		'id'            => 'inseide',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'category Up inside ', 'appharu' ),
		'id'            => 'upsin',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Single page inner content ads', 'appharu' ),
		'id'            => 'content-1',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'Single page down inside ', 'appharu' ),
		'id'            => 'upsdw',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'banner-top', 'appharu' ),
		'id'            => 'banner-top',
		'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'appharu_widgets_init' );
//enquee css/scripts
function appharu_scripts() {
	wp_enqueue_style( 'bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css' );
	wp_enqueue_style( 'newbootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'base-style', get_stylesheet_directory_uri().'/css/base.css',array(),'10.5' );
	wp_enqueue_style( 'google-font-ek', 'https://fonts.googleapis.com/css?family=Mukta:400,500,600&amp;subset=devanagari' );
	wp_enqueue_style( 'owl-style', get_stylesheet_directory_uri().'/owl/assets/owl.carousel.min.css',array(),'0.2' );
	wp_enqueue_style( 'appharu-style', get_stylesheet_uri(),array(),'5.3.4.5' );

	wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/134e41d518.js', array(), '', true );
	wp_enqueue_script( 'jquery-slim-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '4.0.0.beta', true );
	wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1.11.0', true );
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js', array(), '4.0.0.beta', true );
	wp_enqueue_script( 'bundle-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '4.0.0.beta', true );
	wp_enqueue_script( 'owl-js', get_stylesheet_directory_uri() . '/owl/owl.carousel.min.js', array(), '0.2', true );
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/script.js', array(), '3.6', true );
}
add_action( 'wp_enqueue_scripts', 'appharu_scripts' );


function ah_insert_posts_ads($content){
	if(is_single()){
		ob_start();
		dynamic_sidebar('content-1');
		$sidebar = ob_get_contents();
		ob_end_clean();
		$adsCode = "<div class='online-inner-ads uk-text-center'>".$sidebar."</div>";
		$insertAfter = 3;
		$closingP = '</p>';
		$contentBlock = explode($closingP, $content);
		foreach($contentBlock as $key => $con){
			if(trim($con)) {
				$contentBlock[$key] .= $closingP;
			}
			if(($key + 1) == $insertAfter){ 
				$contentBlock[$key] .= $adsCode;
			}
		}
		$content = implode(' ', $contentBlock);
	}
	return $content;    
}
add_filter('the_content', 'ah_insert_posts_ads');

//Lets add Open Graph Meta Info

function insert_fb_in_head() {
	global $post;
	if ( !is_singular()) //if it is not a post or a page
		return;
        echo '<meta property="fb:admins" content="changingmission"/>';
		echo '<meta property="fb:app_id" content="1774296949456204">';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:description" content="Read More.."/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="'. get_bloginfo('name') .'"/>';
	if(!has_post_thumbnail( $post->ID )) {
		$default_image= get_stylesheet_directory_uri()."/img/logo.png";
		echo '<meta property="og:image" content="' . $default_image . '"/>';
	}
	else{
		$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
	}
	echo "";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );

require get_template_directory().'/paging.php';

/* Custom Functions */
function categories(){
    $categories = get_the_category();
    $category_names = array();
    foreach ($categories as $category)
    {
		if($category->cat_name!='Featured'){
		$category_names[] = $category->cat_name;
		}
    }
    echo implode(', ', $category_names);
}


function tags(){
    $tags = get_the_tags();
	$tag_names = array();
	if($tags!=null){
		foreach ($tags as $tag)
		{
			$tag_names[] = $tag->name;
		}
		echo implode(', ', $tag_names);
	}
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Breaking/banner',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
    ));
	// acf_add_options_page(array(
	// 	'page_title' 	=> 'Ads Settings',
	// 	'menu_title' 	=> 'Advertisements',	
	// 	'menu_slug' 	=> 'ads-settings',
	// 	'capability' 	=> 'edit_posts',
	// 	'redirect' 	=> false
    // ));
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Post Settings',
		'menu_title' 	=> 'Post Setting',
        'parent_slug' 	=> 'edit.php',
        'capability'    => 'edit_posts'
	));
	
}
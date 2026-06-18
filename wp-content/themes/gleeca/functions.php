<?php
	define( 'Hyrrokkin_THEMENAME','hyrrokkin' ); // The theme name
	define( 'Hyrrokkin_THEMESHORTNAME','hyrrokkin'); // The theme short name
	define( 'Hyrrokkin_THEMEOPTIONS','hyrrokkin'); // The theme database option variable
	define( 'Hyrrokkin_THEME_SLUG','hyrrokkin'); // The theme database option variable
	define( 'Hyrrokkin_LIBRARY', TEMPLATEPATH . '/inc' ); // Shortcut to point to the /library/ dir
	define( 'Hyrrokkin_ADMIN', Hyrrokkin_LIBRARY . '/admin' ); // Shortcut to point to the /admin/ dir
	require_once(Hyrrokkin_LIBRARY . '/options.php');
	require_once(Hyrrokkin_LIBRARY . '/banner.php');
	require_once(Hyrrokkin_LIBRARY . '/services.php');
	require_once(Hyrrokkin_LIBRARY . '/testimonials.php');
	add_action( 'after_setup_theme', 'Hyrrokkin_setup' );
	if ( ! function_exists( 'Hyrrokkin_setup' ) ):
	function Hyrrokkin_setup() {
	load_theme_textdomain( 'Hyrrokkin', TEMPLATEPATH . '/languages' ); 
	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );
	register_nav_menu( 'main-menu', __( 'Main Menu') );
	register_nav_menu( 'footer-menu', __( 'Footer Menu') );
	register_nav_menu( 'information-menu', __( 'Information Menu') );
	}
	endif; // Hyrrokkin_setup
	add_action( 'widgets_init', 'Hyrrokkin_widgets_init' );
	function Hyrrokkin_widgets_init() {
	// Area 1, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Main Menu'),
		'id' => 'main_menu',
		'description' => __( 'The menu  widget area'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );
	register_sidebar( array(
	'name' => __( 'Information Menu'),
	'id' => 'information_menu',
	'description' => __( 'The menu  widget area'),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h1>',
	'after_title' => '</h1>',
	) ); 
	register_sidebar( array(
	'name' => __( 'Footer Menu'),
	'id' => 'footer_menu',
	'description' => __( 'The menu  widget area'),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h1>',
	'after_title' => '</h1>',
	) );
	}
	function news_excerpt(){
	$excerpt = get_the_content();
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$the_str = substr($excerpt, 0, 30);
	return $the_str;
	}
	function the_breadcrumb() {
	if (!is_home()) {
		echo '<a class="subEffect" href="';
			echo get_option('home');
		echo '">';
		echo 'Home';
		echo "</a> » ";		
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {				
				the_title();
			}
		} elseif (is_page()) {			
			echo the_title();			
		}
	}
	}
	if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');   
	}
	function add_nav_class($output) {
	$output= preg_replace('/<a/', '<a class="submenuheader"', $output, -1);
	return $output;
	}
	add_filter('wp_nav_menu', 'add_nav_class');
	$c_categories = $t_terms = array();
	$c_categories = get_the_category();
	if( !empty( $c_categories ) ) {
	// For each category in the array
	foreach( $c_categories as $c_category ) {
		// Place data into the second array using cat/term id as array key value
		$t_terms[$c_category->term_id] = $c_category;
		// Unset variable no longer needed
		unset( $c_category );
	}
	// Get the array item with the lowest key
	$kat = min( $t_terms );
	// Unset some more variables no longer needed
	unset( $c_categories , $t_terms );
	// Finish up and convert the variable to the category nice name
	$kat = $kat->category_nicename;
	}
	function qt_custom_breadcrumbs() {
	$showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$delimiter = '<i class="fa fa-angle-double-right"></i>'; // delimiter between crumbs
	$home = '<i class="fa fa-home" aria-hidden="true"></i>'; // text for the 'Home' link
	$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
	$before = '<span class="current">'; // tag before the current crumb
	$after = '</span>'; // tag after the current crumb
	global $post;
	$homeLink = get_bloginfo('url');
	if (is_home() || is_front_page()) {
	if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
	} else {
	echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
	if ( is_category() ) {
	  $thisCat = get_category(get_query_var('cat'), false);
	  if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
	  echo $before . '' . single_cat_title('', false) . '' . $after;
	} elseif ( is_search() ) {
	  echo $before . 'Search results for "' . get_search_query() . '"' . $after;
	} elseif ( is_day() ) {
	  echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
	  echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
	  echo $before . get_the_time('d') . $after;
	} elseif ( is_month() ) {
	  echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
	  echo $before . get_the_time('F') . $after;
	} elseif ( is_year() ) {
	  echo $before . get_the_time('Y') . $after;
	} elseif ( is_single() && !is_attachment() ) {
	  if ( get_post_type() != 'post' ) {
	    $post_type = get_post_type_object(get_post_type());
	    $slug = $post_type->rewrite;
	    echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
	    if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
	  } else {
	    $cat = get_the_category(); $cat = $cat[0];
	    $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
	    if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
	    echo $cats;
	    if ($showCurrent == 1) echo $before . get_the_title() . $after;
	  }
	} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
	  $post_type = get_post_type_object(get_post_type());
	  echo $before . $post_type->labels->singular_name . $after;
	} elseif ( is_attachment() ) {
	  $parent = get_post($post->post_parent);
	  $cat = get_the_category($parent->ID); $cat = $cat[0];
	  echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
	  echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
	  if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
	} elseif ( is_page() && !$post->post_parent ) {
	  if ($showCurrent == 1) echo $before . get_the_title() . $after;
	} elseif ( is_page() && $post->post_parent ) {
	  $parent_id  = $post->post_parent;
	  $breadcrumbs = array();
	  while ($parent_id) {
	    $page = get_page($parent_id);
	    $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
	    $parent_id  = $page->post_parent;
	  }
	  $breadcrumbs = array_reverse($breadcrumbs);
	  for ($i = 0; $i < count($breadcrumbs); $i++) {
	    echo $breadcrumbs[$i];
	    if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
	  }
	  if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
	} elseif ( is_tag() ) {
	  echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
	} elseif ( is_author() ) {
	   global $author;
	  $userdata = get_userdata($author);
	  echo $before . 'Articles posted by ' . $userdata->display_name . $after;
	} elseif ( is_404() ) {
	  echo $before . 'Error 404' . $after;
	}
	if ( get_query_var('paged') ) {
	  if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
	  echo __('Page') . ' ' . get_query_var('paged');
	  if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
	}
	echo '</div>'; 
	}
	}
	function word_count($string, $limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $limit));
	}
	function example_cats_related_post() {
	$post_id = get_the_ID();
	$cat_ids = array();
	$categories = get_the_category( $post_id );
	if(!empty($categories) && is_wp_error($categories)):
	    foreach ($categories as $category):
	        array_push($cat_ids, $category->term_id);
	    endforeach;
	endif;
	$current_post_type = get_post_type($post_id);
	$query_args = array( 
	    'category__in'   => $cat_ids,
	    'post_type'      => $current_post_type,
	    'post_not_in'    => array($post_id),
	    'posts_per_page'  => '3'
	 );
	$related_cats_post = new WP_Query( $query_args );
	if($related_cats_post->have_posts()):
	     while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
	        <ul>
	            <li>
	                <a href="<?php the_permalink(); ?>">
	                    <?php the_title(); ?>
	                </a>
	            </li>
	        </ul>
	    <?php endwhile;
	    wp_reset_postdata();
	 endif;
	}
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Options',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	}
	function my_login_logo() { ?>
	<style type="text/css">
	.login h1 a{ background-image: url(https://gleeca.com/assets/img/logos/logo.svg)!important;
	background-size: 186px!important;
	background-repeat: no-repeat;
	padding-bottom: 0px; width:310px!important;
	}
	.login form {
	margin-top: 20px;
	margin-left: 0;
	padding: 26px 24px 46px;
	background: #fff;
	box-shadow: none!important;
	border:none!important;
	}
	.login form {
	margin-top: 20px!important;
	margin-left: 0!important;
	padding: 26px 24px 46px!important;
	background: #fff!important;
	box-shadow: none!important;
	}
	body {
	background: #f5f5f5!important;
	min-width: 0;
	color: #fff;
	font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
	font-size: 13px;
	line-height: 1.4em;
	}
	#login {
	width: 320px!important;
	margin: 8% auto!important;
	/* margin: auto; */
	background: #fff!important;
	padding: 30px!important;
	}
	.wp-core-ui .button-primary {
	background: #000!important;
	border-color: transparent!important;
	box-shadow: none!important;
	color: #fff!important;
	text-decoration: none!important;
	text-shadow: none!important;
	text-transform: uppercase!important;
	}
	</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );
	add_filter( 'login_headerurl', 'custom_loginlogo_url' );
	function custom_loginlogo_url($url) {
	    return 'https://www.gleeca.in/';
		}
	?>
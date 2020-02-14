<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';



add_image_size( 'regular', 500, 300, true );


function zmExcerpt($whichPostID=false, $limit=80, $stripShortCodes=true, $displayReadMoreLink=false, $readMoreText=false, $beforeMarkup="", $afterMarkup="", $ellipsis = "") {
	$limit = intval($limit);//in case we get sent a string
	if ($whichPostID) {
		$somePostID = $whichPostID;
		$somePost = get_post($whichPostID);
	} else {
		//if we aren't passed a post id, use global post by default
		global $post;
		$somePost = $post;
		$somePostID = $somePost->ID;
	}
	//$someContent = "#... zmExcerpt ... #somePostID=={$somePostID}";
	$someContent = "";
	//if($post->post_excerpt) {
	if (has_excerpt($somePostID)) {
		//echo("has_excerpt");
		//$content = strip_tags($post->post_excerpt);
		if ($stripShortCodes) {
			$someContent .= strip_shortcodes( strip_tags($somePost->post_excerpt) );
		} else {
			$someContent .= strip_tags($somePost->post_excerpt);
		}
		//$content = strip_tags(strip_shortcodes( get_the_excerpt());
	} else {
		//echo("no has_excerpt");
		if ($stripShortCodes) {
			//echo("get_the_content({$somePostID})==".get_the_content($somePostID) . "...;");//why does this appear to return nothing?
			//echo();
			$someContent .= strip_shortcodes( strip_tags($somePost->post_content));
		} else {
			$someContent .= strip_tags($somePost->post_content);
		}
	}
	// Find the last space (between words we're assuming) after the max length.
	if (strlen($someContent) > $limit) {
		 $last_space = strrpos( substr( strip_tags($someContent), 0, $limit), ' ');
		// Trim
		$trimmed_text = substr(strip_tags($someContent), 0, $last_space);
	} else {
		$trimmed_text = $someContent;
	}
    if (!$readMoreText) {
    	$readMoreText = "Read More &#187;";
    }
    if ($displayReadMoreLink) {
       return $beforeMarkup . $trimmed_text . $ellipsis .  '<a class="sr_readmore readmore" href="'. esc_url(get_permalink($somePost->ID)) . '" title="Read '.get_the_title($somePost->ID).'">'.$readMoreText.'</a>' . $afterMarkup;
    } else {
       return $beforeMarkup . $trimmed_text . $ellipsis . $afterMarkup;
    }
}




function shortExcerpt($whichPostID=false, $limit=80, $stripShortCodes=true, $displayReadMoreLink=false, $readMoreText=false, $beforeMarkup="", $afterMarkup="", $ellipsis = "") {
	$limit = intval($limit);//in case we get sent a string
	if ($whichPostID) {
		$somePostID = $whichPostID;
		$somePost = get_post($whichPostID);
	} else {
		//if we aren't passed a post id, use global post by default
		global $post;
		$somePost = $post;
		$somePostID = $somePost->ID;
	}
	//$someContent = "#... zmExcerpt ... #somePostID=={$somePostID}";
	$someContent = "";
	//if($post->post_excerpt) {
	if (has_excerpt($somePostID)) {
		//echo("has_excerpt");
		//$content = strip_tags($post->post_excerpt);
		if ($stripShortCodes) {
			$someContent .= strip_shortcodes( strip_tags($somePost->post_excerpt) );
		} else {
			$someContent .= strip_tags($somePost->post_excerpt);
		}
		//$content = strip_tags(strip_shortcodes( get_the_excerpt());
	} else {
		//echo("no has_excerpt");
		if ($stripShortCodes) {
			//echo("get_the_content({$somePostID})==".get_the_content($somePostID) . "...;");//why does this appear to return nothing?
			//echo();
			$someContent .= strip_shortcodes( strip_tags($somePost->post_content));
		} else {
			$someContent .= strip_tags($somePost->post_content);
		}
	}
	// Find the last space (between words we're assuming) after the max length.
	if (strlen($someContent) > $limit) {
		 $last_space = strrpos( substr( strip_tags($someContent), 0, $limit), ' ');
		// Trim
		$trimmed_text = substr(strip_tags($someContent), 0, $last_space);
	} else {
		$trimmed_text = $someContent;
	}
    if (!$readMoreText) {
    	$readMoreText = "Read More &#187;";
    }
    if ($displayReadMoreLink) {
       return $beforeMarkup . $trimmed_text . $ellipsis .  '<a class="sr_readmore readmore" href="'. esc_url(get_permalink($somePost->ID)) . '" title="Read '.get_the_title($somePost->ID).'">'.$readMoreText.'</a>' . $afterMarkup;
    } else {
       return $beforeMarkup . $trimmed_text . $ellipsis . $afterMarkup;
    }
}


function formatMonthDay($retrieved) {
    $retrieved = $retrieved;
    $date = DateTime::createFromFormat('Ymd', $retrieved);
    echo $date->format('F d');
}
function formatDayOfWeek($retrieved) {
    $retrieved = $retrieved;
    $date = DateTime::createFromFormat('Ymd', $retrieved);
    $dayIdString = $date->format('w');
    $dayId = intval($dayIdString);
    
    if ($dayId == 0) {
        $dayOfWeek = "Sunday";
    } else if ($dayId == 1) {
        $dayOfWeek = "Monday";
    } else if ($dayId == 2) {
        $dayOfWeek = "Tuesday";
    } else if ($dayId == 3) {
        $dayOfWeek = "Wednesday";
    } else if ($dayId == 4) {
        $dayOfWeek = "Thursday";
    } else if ($dayId == 5) {
        $dayOfWeek = "Friday";
    } else if ($dayId == 6) {
        $dayOfWeek = "Saturday";
    } else {
        $dayOfWeek = "";
    }
    echo $dayOfWeek;
}



function hm_get_template_part( $file, $template_args = array(), $cache_args = array() ) {
	$template_args = wp_parse_args( $template_args );
	$cache_args = wp_parse_args( $cache_args );
	if ( $cache_args ) {
		foreach ( $template_args as $key => $value ) {
			if ( is_scalar( $value ) || is_array( $value ) ) {
				$cache_args[$key] = $value;
			} else if ( is_object( $value ) && method_exists( $value, 'get_id' ) ) {
				$cache_args[$key] = call_user_method( 'get_id', $value );
			}
		}
		if ( ( $cache = wp_cache_get( $file, serialize( $cache_args ) ) ) !== false ) {
			if ( ! empty( $template_args['return'] ) )
				return $cache;
			echo $cache;
			return;
		}
	}
	$file_handle = $file;
	do_action( 'start_operation', 'hm_template_part::' . $file_handle );
	if ( file_exists( get_stylesheet_directory() . '/' . $file . '.php' ) )
		$file = get_stylesheet_directory() . '/' . $file . '.php';
	elseif ( file_exists( get_template_directory() . '/' . $file . '.php' ) )
		$file = get_template_directory() . '/' . $file . '.php';
	ob_start();
	$return = require( $file );
	$data = ob_get_clean();
	do_action( 'end_operation', 'hm_template_part::' . $file_handle );
	if ( $cache_args ) {
		wp_cache_set( $file, $data, serialize( $cache_args ), 3600 );
	}
	if ( ! empty( $template_args['return'] ) )
		if ( $return === false )
			return false;
		else
			return $data;
	echo $data;
}
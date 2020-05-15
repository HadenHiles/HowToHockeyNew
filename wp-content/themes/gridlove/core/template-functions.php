<?php

/**
 * Wrapper function for __()
 *
 * It checks if specific text is translated via options panel
 * If option is set, it returns translated text from theme options
 * If option is not set, it returns default translation string (from language file)
 *
 * @param string  $string_key Key name (id) of translation option
 * @return string Returns translated string
 * @since  1.0
 */

if ( !function_exists( '__gridlove' ) ):
	function __gridlove( $string_key ) {
		if ( ( $translated_string = gridlove_get_option( 'tr_'.$string_key ) ) && gridlove_get_option( 'enable_translate' ) ) {

			if ( $translated_string == '-1' ) {
				return '';
			}

			return wp_kses_post( $translated_string );

		} else {

			$translate = gridlove_get_translate_options();
			return wp_kses_post( $translate[$string_key]['text'] );
		}
	}
endif;



/**
 * Get featured image
 *
 * Function gets featured image depending on the size and post id.
 * If image is not set, it gets the default featured image placehloder from theme options.
 *
 * @param string  $size               Image size ID
 * @param bool    $ignore_default_img Wheter to apply default featured image if post doesn't have featured image
 * @param bool    $ignore_size_prefix Wheter to pass exact size or apply theme prefix
 * @return string Image HTML output
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_featured_image' ) ):
	function gridlove_get_featured_image( $size = 'large', $ignore_default_img = false, $ignore_size_prefix = false, $post_id = false ) {

		if (empty($post_id)) {	
			$post_id = get_the_ID();
		}

		if ( !$ignore_size_prefix ) {
			$size = 'gridlove-'.$size;
		}

		if ( has_post_thumbnail( $post_id ) ) {

			return get_the_post_thumbnail( $post_id, $size );

		} else if ( !$ignore_default_img && ( $placeholder = gridlove_get_option( 'default_fimg' ) ) ) {

				//If there is no featured image, try to get default from theme options

				global $placeholder_img, $placeholder_imgs;

				if ( empty( $placeholder_img ) ) {
					$img_id = gridlove_get_image_id_by_url( $placeholder );
				} else {
					$img_id = $placeholder_img;
				}

				if ( !empty( $img_id ) ) {
					if ( !isset( $placeholder_imgs[$size] ) ) {
						$def_img = wp_get_attachment_image( $img_id, $size );
					} else {
						$def_img = $placeholder_imgs[$size];
					}

					if ( !empty( $def_img ) ) {
						$placeholder_imgs[$size] = $def_img;
						return gridlove_wp_kses( $def_img );
					}
				}

				return gridlove_wp_kses( '<img src="'.esc_attr( $placeholder ).'" alt="'.esc_attr( get_the_title( $post_id ) ).'" />' );
			}

		return false;
	}
endif;


/**
 * Get post categories
 *
 * Function gets categories for current post and displays and slightly modifies
 * HTML output of category list so we can have category id in class parameter
 *
 * @return string HTML output of category links
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_category' ) ):
	function gridlove_get_category() {

		global $post;

		$primary_category = gridlove_is_yoast_active() ? gridlove_get_option('primary_category') : false;
		$primary_term_id = $primary_category ? get_post_meta( $post->ID, '_yoast_wpseo_primary_category', true ) : false;
		$allow_on_single = is_single() && get_queried_object_id() == $post->ID;

		if ( $primary_category && isset($primary_term_id) && !empty($primary_term_id) && !$allow_on_single ) {

			$term = get_term( $primary_term_id );

			if(!is_wp_error( $term ) && !empty($term)){
				return '<a href="'.esc_url( get_term_link( $term->term_id ) ).'" class="gridlove-cat gridlove-cat-'.$term->term_id.'">'.$term->name.'</a>';
			}

			return '';

		} else {


			$output = array();
			$taxs = array();
			$taxonomies = get_post_taxonomies( $post->ID );

			if ( !empty( $taxonomies ) ) {

				foreach ( $taxonomies as $tax ) {
					if ( is_taxonomy_hierarchical( $tax ) ) {
						$terms = get_the_terms( $post->ID,  $tax );
						if ( !empty( $terms ) ) {
							$taxs[] = $terms;
						}

					}
				}
			}

			if ( !empty( $taxs ) ) {

				foreach ( $taxs as $tax ) {
					if ( !empty( $tax ) ) {
						foreach ( $tax as $term ) {
							$output[] = '<a href="'.esc_url( get_term_link( $term->term_id ) ).'" class="gridlove-cat gridlove-cat-'.$term->term_id.'">'.$term->name.'</a>';
						}
					}
				}

				if ( !empty( $output ) ) {
					$output = implode( '', $output );
					return wp_kses_post( $output );
				}
			}
		}

		return "";

	}
endif;


/**
 * Get meta data
 *
 * Function outputs meta data HTML based on theme options for specific layout
 *
 * @param string  $layout     Layout ID
 * @param array   $force_meta Force specific meta instead of using options
 * @return string HTML output of meta data
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_meta_data' ) ):
	function gridlove_get_meta_data( $layout = 'a', $force_meta = false ) {

		$meta_data = $force_meta !== false ? $force_meta : array_keys( array_filter( gridlove_get_option( 'lay_'.$layout .'_meta' ) ) );

		$output = '';

		if ( !empty( $meta_data ) ) {

			foreach ( $meta_data as $mkey ) {


				$meta = '';

				switch ( $mkey ) {

				case 'date':
					$date = gridlove_get_option('post_modified_date') ? get_the_modified_date() : get_the_date();
					$meta = '<span class="updated">' . $date . '</span>';
					break;

				case 'author':

					if ( gridlove_is_co_authors_active() && $coauthors_meta = get_coauthors() ) {
						$temp = '';
						foreach ( $coauthors_meta as $key ) {
							$temp .= '<span class="vcard author"><span class="fn"><a href="'.esc_url( get_author_posts_url( $key->ID, $key->user_nicename ) ).'">'.get_avatar( $key->ID, 24 ).''.$key->display_name.'</a></span></span>';
						}
						$meta = '<div class="coauthors">'.$temp.'</div>';

					} else {

						$author_id = get_post_field( 'post_author', get_the_ID() );
						$meta = '<span class="vcard author"><span class="fn"><a href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID', $author_id ) ) ).'">'.get_avatar( get_the_author_meta( 'ID', $author_id ), 24 ).' '.get_the_author_meta( 'display_name', $author_id ).'</a></span></span>';
					}

					break;

				case 'views':
					global $wp_locale;
					$thousands_sep = isset( $wp_locale->number_format['thousands_sep'] ) ? $wp_locale->number_format['thousands_sep'] : ',';
					if ( strlen( $thousands_sep ) > 1 ) {
						$thousands_sep = trim( $thousands_sep );
					}
					$meta = function_exists( 'ev_get_post_view_count' ) ?  number_format_i18n( absint( str_replace( $thousands_sep, '', ev_get_post_view_count( get_the_ID() )  ) + absint( gridlove_get_option( 'views_forgery' ) ) ) )  . ' '.__gridlove( 'views' ) : '';
					break;

				case 'rtime':
					$meta = gridlove_read_time( get_post_field( 'post_content', get_the_ID() ) );
					if ( !empty( $meta ) ) {
						$meta .= ' '.__gridlove( 'min_read' );
					}
					break;

				case 'comments':
					if ( comments_open() || get_comments_number() ) {
						ob_start();
						comments_popup_link( __gridlove( 'no_comments' ), __gridlove( 'one_comment' ), __gridlove( 'multiple_comments' ) );
						$meta = ob_get_contents();
						ob_end_clean();
					} else {
						$meta = '';
					}
					break;

				default:
					break;
				}

				if ( !empty( $meta ) ) {
					$output .= '<div class="meta-item meta-'.$mkey.'">'.$meta.'</div>';
				}
			}
		}


		return wp_kses_post( $output );

	}
endif;




/**
 * Get post excerpt
 *
 * Function outputs post excerpt for specific layout
 *
 * @param limit   Number of characters to limit excerpt
 * @return string HTML output of category links
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_excerpt' ) ):
	function gridlove_get_excerpt( $limit = 220 ) {

		$manual_excerpt = false;

		if ( has_excerpt() ) {
			$content =  get_the_excerpt();
			$manual_excerpt = true;
		} else {
			$text = get_the_content( '' );
			$text = strip_shortcodes( $text );
			$text = apply_filters( 'the_content', $text );
			$content = str_replace( ']]>', ']]&gt;', $text );
		}

		if ( !empty( $content ) ) {
			if ( !empty( $limit ) || !$manual_excerpt ) {
				$more = gridlove_get_option( 'more_string' );
				$content = wp_strip_all_tags( $content );
				$content = preg_replace( '/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '', $content );
				$content = gridlove_trim_chars( $content, $limit, $more );
			}
			return wp_kses_post( wpautop( $content ) );
		}

		return '';

	}
endif;


/**
 * Module/archive heading
 *
 * Function that outputs the heading of a module based on passed arguments
 *
 * @param array   $args title => heading title, desc => heading description,  actions => action links
 * @return string HTML output
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_heading' ) ):
	function gridlove_get_heading( $args ) {

		$defaults = array(
			'title' => '',
			'desc' => '',
			'actions' => ''
		);

		$args = gridlove_parse_args( $args, $defaults );

		$output = '';

		if ( !empty( $args['title'] ) ||  !empty( $args['actions'] ) ) {

			$output.= '<div class="module-title">';

			if ( !empty( $args['title'] ) ) {
				$output.= $args['title'];
			}

			if ( !empty( $args['actions'] ) ) {
				$output.= '<div class="module-actions">'.$args['actions'].'</div>';
			}

			$output.= '</div>';

		}

		if ( !empty( $args['desc'] ) ) {
			$output.= '<div class="module-desc">'.$args['desc'].'</div>';
		}

		if ( !empty( $output ) ) {
			$output = '<div class="module-header">'.$output.'</div>';
		}

		return $output;
	}
endif;


/**
 * Get archive heading
 *
 * Function gets title and description for current template
 *
 * @param unknown $skip_empty Wheter to skip returning heading if archive is empty (has no posts)
 * @return string HTML output
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_archive_heading' ) ):
	function gridlove_get_archive_heading( $skip_empty = true ) {

		global $wp_query;

		if ( $skip_empty && !$wp_query->found_posts ) {

			return '';
		}

		$title = '';
		$desc = '';
		$actions = '';
		$args = array();

		if ( is_category() ) {

			$obj = get_queried_object();
			$show_child_categories = gridlove_get_option('category_show_children');

			$title = __gridlove( 'category' ).single_cat_title( '', false );

			$desc .= category_description();

			if( $show_child_categories ){

				$sub = get_categories( array( 'parent' => $obj->term_id, 'hide_empty' => false ) );

				if ( !empty( $sub ) ) {
					foreach ( $sub as $child ) {
						$desc .= '<div class="entry-category"><a class="gridlove-cat gridlove-cat-'.$child->term_id.'" href="'.esc_url( get_category_link( $child ) ).'">'.$child->name.'</a></div>';
					}
				}
			}

		} else if ( is_author() ) {
				$obj = get_queried_object();
				$title = __gridlove( 'author' ).$obj->display_name;

			} else if ( is_tax() ) {
				$title = single_term_title( '', false );
			} else if ( is_home() && ( $posts_page = get_option( 'page_for_posts' ) ) && !is_page_template( 'template-modules.php' ) ) {
				$title = get_the_title( $posts_page );
			} else if ( is_search() ) {
				$title = __gridlove( 'search_results_for' ).get_search_query();
				$actions = get_search_form( false );

			} else if ( is_tag() ) {
				$title = __gridlove( 'tag' ).single_tag_title( '', false );
				$desc = tag_description();
			} else if ( is_day() ) {
				$title = __gridlove( 'archive' ).get_the_date();
			} else if ( is_month() ) {
				$title = __gridlove( 'archive' ).get_the_date( 'F Y' );
			} else if ( is_year() ) {
				$title = __gridlove( 'archive' ).get_the_date( 'Y' );
			} else {
			$title = '';
			$desc = '';
		}

		if ( !empty( $title ) ) {
			$args['title'] = '<h1 class="h2">'.$title.'</h1>';
		}

		if ( !empty( $desc ) &&  $skip_empty ) {
			$args['desc'] = wpautop( $desc );
		}

		if ( !empty( $actions ) && $skip_empty ) {
			$args['actions'] = $actions;
		}

		if ( empty( $actions ) ) {
			$args['actions'] = gridlove_breadcrumbs();
		}

		return gridlove_get_heading( $args );
	}
endif;


/**
 * Get current post layout for archives
 *
 * It checks which posts layout to display based on current template options
 *
 * @return array Params for current layout
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_archive_layout' ) ):
	function gridlove_get_archive_layout() {

		$template = gridlove_detect_template();
		$combo = false;

		if ( $template == 'category' ) {

			$cat_id = get_queried_object_id();
			$meta = gridlove_get_category_meta( $cat_id, 'layout' );

			if ( isset( $meta['type'] ) && $meta['type'] != 'inherit' ) {
				$layout = $meta['posts_layout_type'] == 'masonry' ? $meta['masonry'] : $meta['main'];
				$combo = $meta['combo'] != 'none' ? $meta['combo'] : false;

			} else {
				$layout = gridlove_get_option( $template.'_layouts_type' ) == 'masonry' ? gridlove_get_option( $template.'_layout_masonry' ) : gridlove_get_option( $template.'_layout' );
				if ( gridlove_get_option( 'category_combo' ) ) {
					$combo = gridlove_get_option( 'category_combo_layout' );
				}
			}

		} else {

            $layout = gridlove_get_option( $template.'_layouts_type' ) == 'masonry' ? gridlove_get_option( $template.'_layout_masonry' ) : gridlove_get_option( $template.'_layout' );

		}

		if ( !$layout ) {
			$layout = 1;
		}

		$params = gridlove_parse_layout_params( $layout, gridlove_get_archive_layout_type() );

		//Apply combo layout if exists
		if ( !is_paged() && $combo ) {
			$add_params = gridlove_parse_layout_params( $combo, 'combo' );
			$params = array_merge( $add_params, $params );
			$params[count( $add_params )]['base'] = 1;
		}
;
		return $params;
	}
endif;


/**
 * Get how many posts are displayed in combo layout
 *
 * @return integer|false Count of combo posts or false
 * @since  1.4
 */

if ( !function_exists( 'gridlove_get_category_combo_starter_count' ) ):
    function gridlove_get_category_combo_starter_count() {

        $cat_id = get_queried_object_id();
        $meta = gridlove_get_category_meta( $cat_id, 'layout' );
        $combo = false;

        if ( isset( $meta['type'] ) && $meta['type'] != 'inherit' ) {
            $combo = $meta['combo'] != 'none' ? $meta['combo'] : false;
        } else {
            if ( gridlove_get_option( 'category_combo' ) ) {
                $combo = gridlove_get_option( 'category_combo_layout' );
            }
        }

        if(!is_paged() && $combo){
            return count(gridlove_parse_layout_params( $combo, 'combo' ));
        }
        return $combo;
    }
endif;

/**
 * Check if combo layout is active
 *
 * Combo layout works only on category pages
 *
 * @return array Layout type
 * @since  1.4
 */
if( !function_exists('gridlove_has_combo_layout') ):
	function gridlove_has_combo_layout(){

        if(gridlove_detect_template() != 'category'){
        	return false;
		}

		if(is_int(gridlove_get_category_combo_starter_count())){
			return true;
		}

		return false;
	}
endif;

/**
 * Get layout type based on archive template
 *
 * It check if current template is using simple or masonry layout
 *
 * @return array Layout type
 * @since  1.4
 */
if( !function_exists('gridlove_get_archive_layout_type') ):
	function gridlove_get_archive_layout_type(){
		$template = gridlove_detect_template();

		if ( $template == 'category' ) {

			$cat_id = get_queried_object_id();
			$meta = gridlove_get_category_meta( $cat_id, 'layout' );
			if ( isset( $meta['type'] ) && $meta['type'] != 'inherit' ) {
				return $meta['posts_layout_type'] == 'masonry' ? 'masonry' : 'simple';
			} else {
				return gridlove_get_option( $template.'_layouts_type' );
			}

		} else {

			return gridlove_get_option( $template.'_layouts_type' );

		}
	}
endif;

/**
 * Checks if it needs to print masonry wrapper div
 *
 * It checks combination of combo and masonry layout and when to print the masonry wrapper div
 *
 * @return boolean
 * @since  1.4
 */
if( !function_exists('gridlove_open_masonery_wrapper') ):
	function gridlove_open_masonery_wrapper($counter){
		if(gridlove_has_combo_layout() && gridlove_get_category_combo_starter_count() == $counter && gridlove_get_archive_layout_type() == 'masonry'){
			return true;
		}

		return false;
	}
endif;

/**
 * Checks if it needs to end masonry wrapper div
 *
 * It checks combination of combo and masonry layout
 *
 * @return boolean
 * @since  1.4
 */
function gridlove_close_masonery_wrapper(){
	if(gridlove_has_combo_layout() && gridlove_get_archive_layout_type() == 'masonry'){
        return true;
    }

    return false;
}

/**
 * Get post format icon
 *
 * Checks format of current post and returns its icon
 *
 * @param string  $size Icon size class
 * @return string Icon HTML output
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_format_icon' ) ):
	function gridlove_get_format_icon() {

		$format = gridlove_get_post_format();

		$icons = array(
			'video' => 'fa-play',
			'audio' => 'fa-music',
			'gallery' => 'fa-camera'
		);

		//Allow plugins or child themes to modify icons
		$icons = apply_filters( 'gridlove_modify_post_format_icons', $icons );

		if ( $format && array_key_exists( $format, $icons ) ) {

			return wp_kses_post( '<span class="gridlove-format-icon"><i class="fa '.esc_attr( $icons[$format] ).'"></i></span>' );
		}

		return '';
	}
endif;

/**
 * Numeric pagination
 *
 * @param string  $prev Previous link text
 * @param string  $next Next link text
 * @return string Pagination HTML output or empty string
 * @since  1.0
 */

if ( !function_exists( 'gridlove_numeric_pagination' ) ):
	function gridlove_numeric_pagination( $prev = '&lsaquo;', $next = '&rsaquo;' ) {
		global $wp_query, $wp_rewrite;
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
		$pagination = array(
			'base' => @add_query_arg( 'paged', '%#%' ),
			'format' => '',
			'total' => $wp_query->max_num_pages,
			'current' => $current,
			'prev_text' => $prev,
			'next_text' => $next,
			'type' => 'plain'
		);
		if ( $wp_rewrite->using_permalinks() )
			$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

		if ( !empty( $wp_query->query_vars['s'] ) )
			$pagination['add_args'] = array( 's' => str_replace( ' ', '+', get_query_var( 's' ) ) );

		$links = paginate_links( $pagination );

		return empty( $links ) ? '' : $links;
	}
endif;



/**
 * Get single post layout
 *
 * @return array IDs of cover layout and content layout
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_single_layout' ) ):
	function gridlove_get_single_layout() {

		$layout = gridlove_get_post_meta( get_the_ID(), 'layout' );

		if ( $layout == 'inherit' ) {
			$layout = gridlove_get_option( 'single_layout' );
		}

		$temp = explode( '_', $layout );

		return array( 'content' => $temp[0], 'cover' => $temp[1] );
	}
endif;



/**
 * Get page layout
 *
 * @return array IDs of cover layout and content layout
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_page_layout' ) ):
	function gridlove_get_page_layout() {

		$type = get_post_type( get_the_ID() );

		if ( empty( $type ) || in_array( $type, array( 'forum', 'topic' ) ) ) {
			return array( 'content' => 1, 'cover' => 0 );
		}

		$layout = gridlove_get_page_meta( get_the_ID(), 'layout' );

		if ( $layout == 'inherit' ) {
			$layout = gridlove_get_option( 'page_layout' );
		}

		$temp = explode( '_', $layout );

		return array( 'content' => $temp[0], 'cover' => $temp[1] );
	}
endif;



/**
 * Get author social links
 *
 * @param int     $author_id ID of an author/user
 * @return string HTML output of social links
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_author_links' ) ):
	function gridlove_get_author_links( $author_id ) {

		$output = '';

		if ( is_singular() ) {
			$output .= '<a href="'.esc_url( get_author_posts_url( $author_id, get_the_author_meta( 'user_nicename', $author_id) ) ).'" class="gridlove-pill pill-large">'.__gridlove( 'view_all' ).'</a>';
		}


		if ( $url = get_the_author_meta( 'url', $author_id ) ) {
			$output .= '<a href="'.esc_url( $url ).'" target="_blank" class="gridlove-sl-item fa fa-link"></a>';
		}

		$social = gridlove_get_social();

		if ( !empty( $social ) ) {
			foreach ( $social as $id => $name ) {
				if ( $social_url = get_the_author_meta( $id,  $author_id ) ) {

                    if ($id == 'twitter') {
                        $social_url = (strpos($social_url, 'http') === false) ? 'https://twitter.com/' . $social_url : $social_url;
                    }

					$output .=  '<a href="'.esc_url( $social_url ).'" target="_blank" class="gridlove-sl-item fa fa-'.$id.'"></a>';
				}
			}
		}

		return wp_kses_post( $output );
	}
endif;


/**
 * Get current sidebar
 *
 * It checks which sidebar to display based on current template options
 *
 * @return array Sidebar position and values
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_current_sidebar' ) ):
	function gridlove_get_current_sidebar() {

		/* Default */
		$position = 'none';
		$standard = 'gridlove_default_sidebar';
		$sticky = 'gridlove_default_sticky_sidebar';

		$gridlove_template = gridlove_detect_template();

		if ( $gridlove_template == 'single' ) {

			$sidebar = gridlove_get_post_meta( get_the_ID(), 'sidebar' );
			$position = ( $sidebar['position'] == 'inherit' ) ? gridlove_get_option( $gridlove_template.'_sidebar_position' ) : $sidebar['position'];
			if ( $position != 'none' ) {
				$standard = ( $sidebar['standard'] == 'inherit' ) ?  gridlove_get_option( $gridlove_template.'_sidebar_standard' ) : $sidebar['standard'];
				$sticky = ( $sidebar['sticky'] == 'inherit' ) ?  gridlove_get_option( $gridlove_template.'_sidebar_sticky' ) : $sidebar['sticky'];
			}

		} else if ( $gridlove_template == 'page' ) {

				$sidebar = gridlove_get_post_meta( get_the_ID(), 'sidebar' );
				$position = ( $sidebar['position'] == 'inherit' ) ? gridlove_get_option( $gridlove_template.'_sidebar_position' ) : $sidebar['position'];
				if ( $position != 'none' ) {
					$standard = ( $sidebar['standard'] == 'inherit' ) ?  gridlove_get_option( $gridlove_template.'_sidebar_standard' ) : $sidebar['standard'];
					$sticky = ( $sidebar['sticky'] == 'inherit' ) ?  gridlove_get_option( $gridlove_template.'_sidebar_sticky' ) : $sidebar['sticky'];
				}
			} else if ( in_array( $gridlove_template, array( 'product', 'product_archive', 'forum', 'topic' ) ) ) {
				$position = gridlove_get_option( $gridlove_template.'_sidebar_position' );
				$standard = gridlove_get_option( $gridlove_template.'_sidebar_standard' );
				$sticky = gridlove_get_option( $gridlove_template.'_sidebar_sticky' );
			}

		$output = array(
			'position' => $position,
			'standard' => $standard,
			'sticky' => $sticky
		);

		return $output;

	}
endif;


/**
 * Get current pagination
 *
 * It checks which pagination type to display based on current template options
 *
 * @return string|bool Pagination layout or false if there is no pagination
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_current_pagination' ) ):
	function gridlove_get_current_pagination() {

		global $wp_query;

		if ( $wp_query->max_num_pages <= 1 ) {
			return false;
		}

		$layout = 'numeric'; //layout numeric as default

		$template = gridlove_detect_template();

		if ( $template == 'category' ) {

			$cat_id = get_queried_object_id();
			$meta = gridlove_get_category_meta( $cat_id, 'layout' );

			if ( isset( $meta['type'] ) && $meta['type'] != 'inherit' ) {
				$layout = $meta['pagination'];
			} else {
				$layout = gridlove_get_option( $template.'_pag' );
			}

		} else {

			if ( in_array( $template, array( 'search', 'tag', 'author', 'archive' ) ) ) {

				$layout = gridlove_get_option( $template.'_pag' );

			}
		}


		return $layout;
	}
endif;


/**
 * Get bootstrap column classes based on a current layout
 *
 * @param unknown $post_lg_col value of lg col class
 * @return string Set of bootsrap column classes
 * @since  1.0
 */

if ( !function_exists( 'gridlove_get_bootstrap_columns' ) ):
	function gridlove_get_bootstrap_columns( $post_lg_col ) {

		$classes = array();
		$classes['lg'] = 'col-lg-'.$post_lg_col;
		$classes['md'] = $post_lg_col > 5 ? 'col-md-12' : 'col-md-6';
		$classes['sm'] = 'col-sm-12';

		return implode( ' ', $classes );
	}
endif;


/**
 * Get single post display option
 *
 * Checks current post display options by provided option key and
 * decides wheter we should display particular items on single post template
 *
 * @param string  $option Option key
 * @return bool
 * @since  1.2
 */

if ( !function_exists( 'gridlove_post_display' ) ):
	function gridlove_post_display( $option, $post_id = false ) {

		$display = gridlove_get_post_meta( $post_id, 'display' );

		if ( !array_key_exists( $option, $display ) ) {
			return false;
		}

		if ( $display[$option] != 'inherit' ) {
			return $display[$option];
		} else {
			return gridlove_get_option( 'single_'.$option );
		}

	}
endif;



/**
 * Breadcrumbs
 *
 * Function provides support for several breadcrumb plugins
 * and gets its content to display on frontend
 *
 * @return string HTML output
 * @since  1.3
 */

if ( !function_exists( 'gridlove_breadcrumbs' ) ):
	function gridlove_breadcrumbs( ) {

		$has_breadcrumbs = gridlove_get_option( 'breadcrumbs' );

		if ( $has_breadcrumbs == 'none' ) {
			return '';
		}

		$breadcrumbs = '';

		if ( $has_breadcrumbs == 'yoast' && function_exists( 'yoast_breadcrumb' ) ) {
			$breadcrumbs = yoast_breadcrumb( '<div id="gridlove-breadcrumbs" class="gridlove-breadcrumbs">', '</div>', false );
		}

		if ( $has_breadcrumbs == 'bcn' && function_exists( 'bcn_display' ) ) {
			$breadcrumbs = '<div id="gridlove-breadcrumbs" class="gridlove-breadcrumbs">'.bcn_display( true ).'</div>';
		}

		return $breadcrumbs;
	}
endif;




/**
 * Paginated post options for featured image
 *
 * @return bool
 * @since  1.4
 */

if ( !function_exists( 'gridlove_featured_img_paginated' ) ):
	function gridlove_featured_img_paginated() {

		if(!gridlove_is_paginated_post()){
			return true;
		}

		global $page;

		$option = gridlove_get_option('featured_paginated_image');

		switch ($option) {
			case 'never':
				return false;
			case 'always':
				return true;
			case 'first_page':
				return $page === 1;
		}

	}
endif;


/**
 * Returns header elements fallback for small screen sizes
 *
 * @return string fallback element on mobile
 * @since  1.4
 */
if ( !function_exists( 'gridlove_switch_for_mobile_header_element' ) ):
	function gridlove_switch_for_mobile_header_element($element){

		switch ($element){
			case 'search-form':
				return 'search-button';
				break;
			case 'social-menu':
				return 'social-menu-drop';
				break;
			default:
				return $element;
				break;
		}
	}
endif;

/**
 * Return category image or if is not set category image return last post feature image
 *
 * @since  1.7
 *
 * @return mixed html 
 */

if ( !function_exists('gridlove_get_category_featured_image') ) :
	function gridlove_get_category_featured_image($size, $cat_id, $ignore_size_prefix = false){
		
		if ( empty( $cat_id ) ) {
			$cat_id = get_queried_object_id();
		}

		if ( !$ignore_size_prefix ) {
			$size = 'gridlove-'.$size;
		}
		
		$img_url = gridlove_get_category_meta( $cat_id, 'image' );

		$img_html = '';

        if ( !empty( $img_url ) ) {
            $img_id = gridlove_get_image_id_by_url( $img_url );
            $img_html = wp_get_attachment_image( $img_id, $size );
            if ( empty( $img_html ) ) {
                $img_html = '<img src="'.esc_url( $img_url ).'"/>';
            }
        }
		
        if ( empty( $img_html )  ) {
			$first_post = gridlove_get_first_post_in_category($cat_id);
			$post_id = false;
			if (!empty($first_post) && isset($first_post->ID)) {
				$post_id = $first_post->ID;
			}  
			$img_html = gridlove_get_featured_image( $size, false, true, $post_id );
        }

        return wp_kses_post( $img_html );
	}
endif;


/**
 * Display ads
 *
 * @since  1.6.1
 *
 * @return boolean
 */
if(!function_exists('gridlove_can_display_ads')):
	function gridlove_can_display_ads(){
		if(is_404() && gridlove_get_option('ad_exclude_404')){
			return false;
		}
		
		$exclude_ids_option = gridlove_get_option('ad_exclude_from_pages');
		$exclude_ids = !empty($exclude_ids_option) ? $exclude_ids_option : array();
		
		if(is_page() && in_array(get_queried_object_id(), $exclude_ids)){
			return false;
		}
		
		return true;
	}
endif;
?>

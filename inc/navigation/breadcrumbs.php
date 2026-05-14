<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// disable bbpress native breadcrumbs
add_filter( 'bbp_no_breadcrumb', '__return_true' );

// render schema breadcrumb wrapper
function hovercraft_breadcrumb() {
	echo '<ul id="hovercraft-breadcrumb" class="hovercraft-breadcrumb breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">';

	hovercraft_breadcrumb_home();

	if ( function_exists( 'is_bbpress' ) && is_bbpress() ) {
		hovercraft_breadcrumb_bbpress();
	} elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
		hovercraft_breadcrumb_woocommerce();
	} elseif ( is_home() && ! is_front_page() ) {
		hovercraft_breadcrumb_home_blog();
	} elseif ( is_singular() ) {
		hovercraft_breadcrumb_single();
	} elseif ( is_archive() ) {
		hovercraft_breadcrumb_archive();
	} elseif ( is_page() ) {
		hovercraft_breadcrumb_page();
	} elseif ( is_search() ) {
		hovercraft_breadcrumb_search();
	} elseif ( is_404() ) {
		hovercraft_breadcrumb_404();
	}

	echo '</ul>';
}

// render one breadcrumb item
function hovercraft_breadcrumb_item( $url, $name, $position, $is_current = false ) {
	if ( $position > 1 ) {
		hovercraft_breadcrumb_separator();
	}

	if ( is_wp_error( $url ) ) {
		$url = '';
	}

	$class = 'item';

	if ( $is_current ) {
		$class = 'item-current item';
	}

	echo '<li class="' . esc_attr( $class ) . '" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';

	if ( $url && ! $is_current ) {
		echo '<a href="' . esc_url( $url ) . '" itemprop="item">';
		echo '<span itemprop="name">' . esc_html( $name ) . '</span>';
		echo '</a>';
	} else {
		echo '<span itemprop="name">' . esc_html( $name ) . '</span>';
	}

	echo '<meta itemprop="position" content="' . intval( $position ) . '" />';
	echo '</li>';
}

// render breadcrumb separator
function hovercraft_breadcrumb_separator() {
	echo '<li class="separator">»</li>';
}

// render home breadcrumb item
function hovercraft_breadcrumb_home() {
	$GLOBALS['hovercraft_breadcrumb_position'] = 1;
	hovercraft_breadcrumb_item( home_url(), __( 'Home', 'hovercraft' ), $GLOBALS['hovercraft_breadcrumb_position']++ );
}

// render bbpress breadcrumb trail
function hovercraft_breadcrumb_bbpress() {
	$pos =& $GLOBALS['hovercraft_breadcrumb_position'];

	hovercraft_breadcrumb_item( bbp_get_forums_url(), __( 'Forum', 'hovercraft' ), $pos++ );

	if ( bbp_is_forum_archive() ) {
		hovercraft_breadcrumb_item( '', __( 'All Forums', 'hovercraft' ), $pos++, true );

	} elseif ( bbp_is_single_reply() ) {
		$reply_id = bbp_get_reply_id();
		$topic_id = bbp_get_reply_topic_id( $reply_id );
		$forum_id = bbp_get_topic_forum_id( $topic_id );

		hovercraft_breadcrumb_bbpress_hierarchy( $forum_id, $pos );
		hovercraft_breadcrumb_item( get_permalink( $topic_id ), get_the_title( $topic_id ), $pos++ );
		hovercraft_breadcrumb_item( '', get_the_title( $reply_id ), $pos++, true );

	} elseif ( bbp_is_single_topic() ) {
		$forum_id = bbp_get_topic_forum_id();

		hovercraft_breadcrumb_bbpress_hierarchy( $forum_id, $pos );
		hovercraft_breadcrumb_item( '', get_the_title(), $pos++, true );

	} elseif ( bbp_is_single_forum() ) {
		hovercraft_breadcrumb_bbpress_hierarchy( get_the_ID(), $pos );
		hovercraft_breadcrumb_item( '', get_the_title(), $pos++, true );

	} elseif ( bbp_is_topic_tag() ) {
		hovercraft_breadcrumb_item( '', bbp_get_topic_tag_name(), $pos++, true );

	} elseif ( bbp_is_view() ) {
		hovercraft_breadcrumb_item( '', bbp_get_view_title(), $pos++, true );

	} elseif ( bbp_is_search() ) {
		hovercraft_breadcrumb_item( '', __( 'Search Results', 'hovercraft' ), $pos++, true );

	} elseif (
		bbp_is_user_home() || bbp_is_single_user()
	) {
		hovercraft_breadcrumb_item( '', __( 'User: ', 'hovercraft' ) . bbp_get_user_display_name( bbp_get_displayed_user_id() ), $pos++, true );

	} elseif ( bbp_is_user_edit() ) {
		hovercraft_breadcrumb_item( '', __( 'Edit Profile', 'hovercraft' ), $pos++, true );

	} elseif ( bbp_is_user_subscriptions() ) {
		hovercraft_breadcrumb_item( '', __( 'Subscriptions', 'hovercraft' ), $pos++, true );

	} elseif ( bbp_is_user_favorites() ) {
		hovercraft_breadcrumb_item( '', __( 'Favorites', 'hovercraft' ), $pos++, true );

	} elseif ( bbp_is_user_topics() ) {
		hovercraft_breadcrumb_item( '', __( 'User Topics', 'hovercraft' ), $pos++, true );

	} elseif ( bbp_is_user_replies() ) {
		hovercraft_breadcrumb_item( '', __( 'User Replies', 'hovercraft' ), $pos++, true );
	}
}

// render bbpress parent forum hierarchy
function hovercraft_breadcrumb_bbpress_hierarchy( $post_id, &$position ) {
	$ancestors = array_reverse( get_post_ancestors( $post_id ) );

	foreach ( $ancestors as $ancestor ) {
		hovercraft_breadcrumb_item( get_permalink( $ancestor ), get_the_title( $ancestor ), $position++ );
	}

	hovercraft_breadcrumb_item( get_permalink( $post_id ), get_the_title( $post_id ), $position++ );
}

// render woocommerce breadcrumb trail
function hovercraft_breadcrumb_woocommerce() {
	$pos =& $GLOBALS['hovercraft_breadcrumb_position'];

	if ( function_exists( 'is_shop' ) && is_shop() ) {
		hovercraft_breadcrumb_item( '', woocommerce_page_title( false ), $pos++, true );
		return;
	}

	if ( function_exists( 'wc_get_page_id' ) ) {
		$shop_page_id = wc_get_page_id( 'shop' );

		if ( $shop_page_id && ! is_shop() ) {
			hovercraft_breadcrumb_item( get_permalink( $shop_page_id ), get_the_title( $shop_page_id ), $pos++ );
		}
	}

	if ( is_tax( 'product_cat' ) || is_tax( 'product_tag' ) ) {
		$term = get_queried_object();

		if ( $term && isset( $term->term_id, $term->taxonomy, $term->name ) ) {
			$ancestors = array_reverse( get_ancestors( $term->term_id, $term->taxonomy ) );

			foreach ( $ancestors as $ancestor_id ) {
				$ancestor = get_term( $ancestor_id, $term->taxonomy );

				if ( $ancestor && ! is_wp_error( $ancestor ) && isset( $ancestor->name ) ) {
					hovercraft_breadcrumb_item( get_term_link( $ancestor ), $ancestor->name, $pos++ );
				}
			}

			hovercraft_breadcrumb_item( '', $term->name, $pos++, true );
		}
	} elseif ( is_singular( 'product' ) && function_exists( 'wc_get_product_terms' ) ) {
		$terms = wc_get_product_terms( get_the_ID(), 'product_cat' );

		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
			$primary = $terms[0];
			$ancestors = array_reverse( get_ancestors( $primary->term_id, 'product_cat' ) );

			foreach ( $ancestors as $ancestor_id ) {
				$ancestor = get_term( $ancestor_id, 'product_cat' );

				if ( $ancestor && ! is_wp_error( $ancestor ) && isset( $ancestor->name ) ) {
					hovercraft_breadcrumb_item( get_term_link( $ancestor ), $ancestor->name, $pos++ );
				}
			}

			hovercraft_breadcrumb_item( get_term_link( $primary ), $primary->name, $pos++ );
		}

		hovercraft_breadcrumb_item( '', get_the_title(), $pos++, true );
	}
}

// render custom post type fallback breadcrumb
function hovercraft_breadcrumb_cpt_fallback( $post_type ) {
	$fallback = array(
		'book' => array( 'url' => '/library/', 'label' => 'Library' ),
	);

	if ( isset( $fallback[ $post_type ] ) ) {
		return $fallback[ $post_type ];
	}

	return false;
}

// render blog index breadcrumb trail
function hovercraft_breadcrumb_home_blog() {
	$pos =& $GLOBALS['hovercraft_breadcrumb_position'];
	$page_for_posts = get_option( 'page_for_posts' );

	if ( $page_for_posts ) {
		hovercraft_breadcrumb_item( '', get_the_title( $page_for_posts ), $pos++, true );
	} else {
		hovercraft_breadcrumb_item( '', __( 'Blog', 'hovercraft' ), $pos++, true );
	}
}

// render singular content breadcrumb trail
function hovercraft_breadcrumb_single() {
	global $post;

	$pos =& $GLOBALS['hovercraft_breadcrumb_position'];
	$post_type = get_post_type();

	if ( 'post' !== $post_type ) {
		$obj = get_post_type_object( $post_type );

		if ( $obj && ! empty( $obj->has_archive ) ) {
			hovercraft_breadcrumb_item( get_post_type_archive_link( $post_type ), $obj->labels->name, $pos++ );
		} else {
			$fallback = hovercraft_breadcrumb_cpt_fallback( $post_type );

			if ( $fallback ) {
				hovercraft_breadcrumb_item( $fallback['url'], $fallback['label'], $pos++ );
			}
		}

		if ( isset( $post ) && is_object( $post ) && is_post_type_hierarchical( $post_type ) ) {
			$ancestors = array_reverse( get_post_ancestors( $post->ID ) );

			foreach ( $ancestors as $ancestor_id ) {
				hovercraft_breadcrumb_item( get_permalink( $ancestor_id ), get_the_title( $ancestor_id ), $pos++ );
			}
		}
	}

	if ( 'post' === $post_type && isset( $post ) && is_object( $post ) ) {
		$cats = get_the_category( $post->ID );

		if ( $cats ) {
			$cat = end( $cats );
			$ancestors = array_reverse( get_ancestors( $cat->term_id, 'category' ) );

			foreach ( $ancestors as $parent_id ) {
				hovercraft_breadcrumb_item( get_category_link( $parent_id ), get_cat_name( $parent_id ), $pos++ );
			}

			hovercraft_breadcrumb_item( get_category_link( $cat->term_id ), $cat->name, $pos++ );
		}
	}

	hovercraft_breadcrumb_item( '', get_the_title(), $pos++, true );
}

// render archive breadcrumb trail
function hovercraft_breadcrumb_archive() {
	$pos =& $GLOBALS['hovercraft_breadcrumb_position'];

	if ( is_category() ) {
		$cat = get_queried_object();

		if ( $cat && isset( $cat->category_parent, $cat->name ) ) {
			if ( $cat->category_parent ) {
				$parent = get_category( $cat->category_parent );

				if ( $parent && ! is_wp_error( $parent ) && isset( $parent->name ) ) {
					hovercraft_breadcrumb_item( get_category_link( $parent ), $parent->name, $pos++ );
				}
			}

			hovercraft_breadcrumb_item( '', single_cat_title( '', false ), $pos++, true );
		}

	} elseif ( is_tag() ) {
		hovercraft_breadcrumb_item( '', single_tag_title( '', false ), $pos++, true );

	} elseif ( is_tax() ) {
		$term = get_queried_object();

		if ( $term && isset( $term->term_id, $term->taxonomy, $term->name ) ) {
			$ancestors = get_ancestors( $term->term_id, $term->taxonomy );
			$ancestors = array_reverse( $ancestors );

			foreach ( $ancestors as $ancestor_id ) {
				$ancestor = get_term( $ancestor_id, $term->taxonomy );

				if ( $ancestor && ! is_wp_error( $ancestor ) && isset( $ancestor->name ) ) {
					hovercraft_breadcrumb_item( get_term_link( $ancestor ), $ancestor->name, $pos++ );
				}
			}

			hovercraft_breadcrumb_item( '', $term->name, $pos++, true );
		}

	} elseif ( is_author() ) {
		$name = '';
		$author = get_userdata( get_query_var( 'author' ) );

		if ( $author && isset( $author->display_name ) ) {
			$name = $author->display_name;
		}

		hovercraft_breadcrumb_item( '', __( 'Author: ', 'hovercraft' ) . $name, $pos++, true );

	} elseif ( is_year() ) {
		hovercraft_breadcrumb_item( get_year_link( get_the_time( 'Y' ) ), get_the_time( 'Y' ) . ' Archives', $pos++ );

	} elseif ( is_month() ) {
		hovercraft_breadcrumb_item( get_year_link( get_the_time( 'Y' ) ), get_the_time( 'Y' ) . ' Archives', $pos++ );
		hovercraft_breadcrumb_item( '', get_the_time( 'F' ) . ' Archives', $pos++, true );

	} elseif ( is_day() ) {
		hovercraft_breadcrumb_item( get_year_link( get_the_time( 'Y' ) ), get_the_time( 'Y' ) . ' Archives', $pos++ );
		hovercraft_breadcrumb_item( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ), get_the_time( 'F' ) . ' Archives', $pos++ );
		hovercraft_breadcrumb_item( '', get_the_time( 'jS' ) . ' Archives', $pos++, true );

	} elseif ( is_post_type_archive() ) {
		hovercraft_breadcrumb_item( '', post_type_archive_title( '', false ), $pos++, true );
	}
}

// render page breadcrumb trail
function hovercraft_breadcrumb_page() {
	global $post;

	$pos =& $GLOBALS['hovercraft_breadcrumb_position'];

	if ( isset( $post ) && is_object( $post ) && $post->post_parent ) {
		$ancestors = array_reverse( get_post_ancestors( $post->ID ) );

		foreach ( $ancestors as $ancestor ) {
			hovercraft_breadcrumb_item( get_permalink( $ancestor ), get_the_title( $ancestor ), $pos++ );
		}
	}

	hovercraft_breadcrumb_item( '', get_the_title(), $pos++, true );
}

// render search breadcrumb item
function hovercraft_breadcrumb_search() {
	$pos =& $GLOBALS['hovercraft_breadcrumb_position'];
	hovercraft_breadcrumb_item( '', __( 'Search results for: ', 'hovercraft' ) . get_search_query(), $pos++, true );
}

// render 404 breadcrumb item
function hovercraft_breadcrumb_404() {
	$pos =& $GLOBALS['hovercraft_breadcrumb_position'];
	hovercraft_breadcrumb_item( '', __( 'Error 404', 'hovercraft' ), $pos++, true );
}

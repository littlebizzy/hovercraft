<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// disable bbpress native breadcrumbs
add_filter( 'bbp_no_breadcrumb', '__return_true' );

// render schema breadcrumb wrapper
function hovercraft_breadcrumb() {
	echo '<ol id="hovercraft-breadcrumb" class="hovercraft-breadcrumb breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">';

	hovercraft_breadcrumb_home();

	if ( function_exists( 'is_bbpress' ) && is_bbpress() ) {
		hovercraft_breadcrumb_bbpress();
	} elseif ( hovercraft_is_woocommerce_context() ) {
		hovercraft_breadcrumb_woocommerce();
	} elseif ( is_home() && ! is_front_page() ) {
		hovercraft_breadcrumb_home_blog();
	} elseif ( is_singular() ) {
		hovercraft_breadcrumb_single();
	} elseif ( is_archive() ) {
		hovercraft_breadcrumb_archive();
	} elseif ( is_search() ) {
		hovercraft_breadcrumb_search();
	} elseif ( is_404() ) {
		hovercraft_breadcrumb_404();
	}

	echo '</ol>';
}

// render one breadcrumb item
function hovercraft_breadcrumb_item( $url, $name, $position, $is_current = false ) {
	if ( is_wp_error( $url ) ) {
		$url = '';
	}

	$class = 'item';
	$current = '';

	if ( $is_current ) {
		$class = 'item-current item';
		$current = ' aria-current="page"';
	}

	echo '<li class="' . esc_attr( $class ) . '" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"' . $current . '>';

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

// render home breadcrumb item
function hovercraft_breadcrumb_home() {
	$GLOBALS['hovercraft_breadcrumb_position'] = 1;
	hovercraft_breadcrumb_item( home_url(), __( 'Home', 'hovercraft' ), $GLOBALS['hovercraft_breadcrumb_position']++ );
}

// check woocommerce contexts
function hovercraft_is_woocommerce_context() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return false;
	}

	if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
		return true;
	}

	if ( function_exists( 'is_cart' ) && is_cart() ) {
		return true;
	}

	if ( function_exists( 'is_checkout' ) && is_checkout() ) {
		return true;
	}

	if ( function_exists( 'is_account_page' ) && is_account_page() ) {
		return true;
	}

	if ( is_search() && hovercraft_is_product_search() ) {
		return true;
	}

	return false;
}

// check product search context
function hovercraft_is_product_search() {
	$post_type = get_query_var( 'post_type' );

	if ( 'product' === $post_type ) {
		return true;
	}

	if ( is_array( $post_type ) && in_array( 'product', $post_type, true ) ) {
		return true;
	}

	return false;
}

// render bbpress breadcrumb trail
function hovercraft_breadcrumb_bbpress() {
	$pos =& $GLOBALS['hovercraft_breadcrumb_position'];
	$forums_url = function_exists( 'bbp_get_forums_url' ) ? bbp_get_forums_url() : '';

	hovercraft_breadcrumb_item( $forums_url, __( 'Forum', 'hovercraft' ), $pos++ );

	if ( function_exists( 'bbp_is_forum_archive' ) && bbp_is_forum_archive() ) {
		hovercraft_breadcrumb_item( '', __( 'All Forums', 'hovercraft' ), $pos++, true );

	} elseif ( function_exists( 'bbp_is_topic_edit' ) && bbp_is_topic_edit() ) {
		$topic_id = bbp_get_topic_id();
		$forum_id = bbp_get_topic_forum_id( $topic_id );

		hovercraft_breadcrumb_bbpress_hierarchy( $forum_id, $pos );
		hovercraft_breadcrumb_item( get_permalink( $topic_id ), get_the_title( $topic_id ), $pos++ );
		hovercraft_breadcrumb_item( '', __( 'Edit Topic', 'hovercraft' ), $pos++, true );

	} elseif ( function_exists( 'bbp_is_reply_edit' ) && bbp_is_reply_edit() ) {
		$reply_id = bbp_get_reply_id();
		$topic_id = bbp_get_reply_topic_id( $reply_id );
		$forum_id = bbp_get_topic_forum_id( $topic_id );

		hovercraft_breadcrumb_bbpress_hierarchy( $forum_id, $pos );
		hovercraft_breadcrumb_item( get_permalink( $topic_id ), get_the_title( $topic_id ), $pos++ );
		hovercraft_breadcrumb_item( get_permalink( $reply_id ), get_the_title( $reply_id ), $pos++ );
		hovercraft_breadcrumb_item( '', __( 'Edit Reply', 'hovercraft' ), $pos++, true );

	} elseif ( function_exists( 'bbp_is_topic_tag_edit' ) && bbp_is_topic_tag_edit() ) {
		hovercraft_breadcrumb_item( '', __( 'Edit Topic Tag', 'hovercraft' ), $pos++, true );

	} elseif ( function_exists( 'bbp_is_single_reply' ) && bbp_is_single_reply() ) {
		$reply_id = bbp_get_reply_id();
		$topic_id = bbp_get_reply_topic_id( $reply_id );
		$forum_id = bbp_get_topic_forum_id( $topic_id );

		hovercraft_breadcrumb_bbpress_hierarchy( $forum_id, $pos );
		hovercraft_breadcrumb_item( get_permalink( $topic_id ), get_the_title( $topic_id ), $pos++ );
		hovercraft_breadcrumb_item( '', get_the_title( $reply_id ), $pos++, true );

	} elseif ( function_exists( 'bbp_is_single_topic' ) && bbp_is_single_topic() ) {
		$forum_id = bbp_get_topic_forum_id();

		hovercraft_breadcrumb_bbpress_hierarchy( $forum_id, $pos );
		hovercraft_breadcrumb_item( '', get_the_title(), $pos++, true );

	} elseif ( function_exists( 'bbp_is_single_forum' ) && bbp_is_single_forum() ) {
		hovercraft_breadcrumb_bbpress_hierarchy( get_the_ID(), $pos );
		hovercraft_breadcrumb_item( '', get_the_title(), $pos++, true );

	} elseif ( function_exists( 'bbp_is_topic_tag' ) && bbp_is_topic_tag() ) {
		hovercraft_breadcrumb_item( '', bbp_get_topic_tag_name(), $pos++, true );

	} elseif ( function_exists( 'bbp_is_view' ) && bbp_is_view() ) {
		hovercraft_breadcrumb_item( '', bbp_get_view_title(), $pos++, true );

	} elseif ( function_exists( 'bbp_is_search' ) && bbp_is_search() ) {
		hovercraft_breadcrumb_item( '', __( 'Search Results', 'hovercraft' ), $pos++, true );

	} elseif ( function_exists( 'bbp_is_user_edit' ) && bbp_is_user_edit() ) {
		hovercraft_breadcrumb_bbpress_user_parent( $pos );
		hovercraft_breadcrumb_item( '', __( 'Edit Profile', 'hovercraft' ), $pos++, true );

	} elseif ( function_exists( 'bbp_is_user_subscriptions' ) && bbp_is_user_subscriptions() ) {
		hovercraft_breadcrumb_bbpress_user_parent( $pos );
		hovercraft_breadcrumb_item( '', __( 'Subscriptions', 'hovercraft' ), $pos++, true );

	} elseif ( function_exists( 'bbp_is_user_favorites' ) && bbp_is_user_favorites() ) {
		hovercraft_breadcrumb_bbpress_user_parent( $pos );
		hovercraft_breadcrumb_item( '', __( 'Favorites', 'hovercraft' ), $pos++, true );

	} elseif ( function_exists( 'bbp_is_user_topics' ) && bbp_is_user_topics() ) {
		hovercraft_breadcrumb_bbpress_user_parent( $pos );
		hovercraft_breadcrumb_item( '', __( 'User Topics', 'hovercraft' ), $pos++, true );

	} elseif ( function_exists( 'bbp_is_user_replies' ) && bbp_is_user_replies() ) {
		hovercraft_breadcrumb_bbpress_user_parent( $pos );
		hovercraft_breadcrumb_item( '', __( 'User Replies', 'hovercraft' ), $pos++, true );

	} elseif ( function_exists( 'bbp_is_user_engagements' ) && bbp_is_user_engagements() ) {
		hovercraft_breadcrumb_bbpress_user_parent( $pos );
		hovercraft_breadcrumb_item( '', __( 'Engagements', 'hovercraft' ), $pos++, true );

	} elseif ( function_exists( 'bbp_is_user_home' ) && ( bbp_is_user_home() || bbp_is_single_user() ) ) {
		hovercraft_breadcrumb_item( '', hovercraft_breadcrumb_bbpress_user_label(), $pos++, true );

	} else {
		hovercraft_breadcrumb_item( '', hovercraft_breadcrumb_current_title(), $pos++, true );
	}
}

// render bbpress user parent breadcrumb
function hovercraft_breadcrumb_bbpress_user_parent( &$position ) {
	$user_id = function_exists( 'bbp_get_displayed_user_id' ) ? bbp_get_displayed_user_id() : 0;

	if ( $user_id && function_exists( 'bbp_get_user_profile_url' ) ) {
		hovercraft_breadcrumb_item( bbp_get_user_profile_url( $user_id ), hovercraft_breadcrumb_bbpress_user_label(), $position++ );
	}
}

// get bbpress user breadcrumb label
function hovercraft_breadcrumb_bbpress_user_label() {
	$user_id = function_exists( 'bbp_get_displayed_user_id' ) ? bbp_get_displayed_user_id() : 0;
	$name = $user_id && function_exists( 'bbp_get_user_display_name' ) ? bbp_get_user_display_name( $user_id ) : '';

	if ( $name ) {
		return __( 'User: ', 'hovercraft' ) . $name;
	}

	return __( 'User', 'hovercraft' );
}

// render bbpress parent forum hierarchy
function hovercraft_breadcrumb_bbpress_hierarchy( $post_id, &$position ) {
	if ( ! $post_id ) {
		return;
	}

	$ancestors = array_reverse( get_post_ancestors( $post_id ) );

	foreach ( $ancestors as $ancestor ) {
		hovercraft_breadcrumb_item( get_permalink( $ancestor ), get_the_title( $ancestor ), $position++ );
	}

	hovercraft_breadcrumb_item( get_permalink( $post_id ), get_the_title( $post_id ), $position++ );
}

// render woocommerce breadcrumb trail
function hovercraft_breadcrumb_woocommerce() {
	$pos =& $GLOBALS['hovercraft_breadcrumb_position'];
	$shop_page_id = hovercraft_breadcrumb_woocommerce_page_id( 'shop' );

	if ( function_exists( 'is_shop' ) && is_shop() ) {
		hovercraft_breadcrumb_item( '', hovercraft_breadcrumb_woocommerce_page_title( 'shop', __( 'Shop', 'hovercraft' ) ), $pos++, true );
		return;
	}

	if ( $shop_page_id ) {
		hovercraft_breadcrumb_item( get_permalink( $shop_page_id ), hovercraft_breadcrumb_woocommerce_page_title( 'shop', __( 'Shop', 'hovercraft' ) ), $pos++ );
	}

	if ( function_exists( 'is_cart' ) && is_cart() ) {
		hovercraft_breadcrumb_item( '', hovercraft_breadcrumb_woocommerce_page_title( 'cart', __( 'Cart', 'hovercraft' ) ), $pos++, true );
		return;
	}

	if ( function_exists( 'is_checkout' ) && is_checkout() ) {
		hovercraft_breadcrumb_woocommerce_checkout( $pos );
		return;
	}

	if ( function_exists( 'is_account_page' ) && is_account_page() ) {
		hovercraft_breadcrumb_woocommerce_account( $pos );
		return;
	}

	if ( is_tax() ) {
		hovercraft_breadcrumb_woocommerce_taxonomy( $pos );
		return;
	}

	if ( is_singular( 'product' ) && function_exists( 'wc_get_product_terms' ) ) {
		hovercraft_breadcrumb_woocommerce_product( $pos );
		return;
	}

	if ( is_search() ) {
		hovercraft_breadcrumb_item( '', __( 'Search results for: ', 'hovercraft' ) . get_search_query(), $pos++, true );
		return;
	}

	hovercraft_breadcrumb_item( '', hovercraft_breadcrumb_current_title(), $pos++, true );
}

// get woocommerce page id
function hovercraft_breadcrumb_woocommerce_page_id( $page ) {
	if ( ! function_exists( 'wc_get_page_id' ) ) {
		return 0;
	}

	$page_id = wc_get_page_id( $page );

	if ( 0 >= $page_id ) {
		return 0;
	}

	return $page_id;
}

// get woocommerce page title
function hovercraft_breadcrumb_woocommerce_page_title( $page, $fallback ) {
	$page_id = hovercraft_breadcrumb_woocommerce_page_id( $page );

	if ( $page_id ) {
		$title = get_the_title( $page_id );

		if ( $title ) {
			return $title;
		}
	}

	return $fallback;
}

// render woocommerce checkout breadcrumb
function hovercraft_breadcrumb_woocommerce_checkout( &$position ) {
	$checkout_page_id = hovercraft_breadcrumb_woocommerce_page_id( 'checkout' );
	$checkout_title = hovercraft_breadcrumb_woocommerce_page_title( 'checkout', __( 'Checkout', 'hovercraft' ) );

	if ( function_exists( 'is_wc_endpoint_url' ) && is_wc_endpoint_url( 'order-pay' ) ) {
		if ( $checkout_page_id ) {
			hovercraft_breadcrumb_item( get_permalink( $checkout_page_id ), $checkout_title, $position++ );
		}

		hovercraft_breadcrumb_item( '', __( 'Pay For Order', 'hovercraft' ), $position++, true );
		return;
	}

	if ( function_exists( 'is_order_received_page' ) && is_order_received_page() ) {
		if ( $checkout_page_id ) {
			hovercraft_breadcrumb_item( get_permalink( $checkout_page_id ), $checkout_title, $position++ );
		}

		hovercraft_breadcrumb_item( '', __( 'Order Received', 'hovercraft' ), $position++, true );
		return;
	}

	if ( function_exists( 'is_add_payment_method_page' ) && is_add_payment_method_page() ) {
		hovercraft_breadcrumb_item( '', __( 'Add Payment Method', 'hovercraft' ), $position++, true );
		return;
	}

	hovercraft_breadcrumb_item( '', $checkout_title, $position++, true );
}

// render woocommerce account breadcrumb
function hovercraft_breadcrumb_woocommerce_account( &$position ) {
	$account_page_id = hovercraft_breadcrumb_woocommerce_page_id( 'myaccount' );
	$account_title = hovercraft_breadcrumb_woocommerce_page_title( 'myaccount', __( 'My Account', 'hovercraft' ) );
	$endpoint = '';

	if ( function_exists( 'WC' ) && WC() && isset( WC()->query ) && is_object( WC()->query ) ) {
		$endpoint = WC()->query->get_current_endpoint();
	}

	if ( $endpoint ) {
		if ( $account_page_id ) {
			hovercraft_breadcrumb_item( get_permalink( $account_page_id ), $account_title, $position++ );
		}

		hovercraft_breadcrumb_item( '', hovercraft_breadcrumb_woocommerce_endpoint_label( $endpoint ), $position++, true );
		return;
	}

	hovercraft_breadcrumb_item( '', $account_title, $position++, true );
}

// get woocommerce endpoint label
function hovercraft_breadcrumb_woocommerce_endpoint_label( $endpoint ) {
	$labels = array(
		'orders' => __( 'Orders', 'hovercraft' ),
		'view-order' => __( 'View Order', 'hovercraft' ),
		'downloads' => __( 'Downloads', 'hovercraft' ),
		'edit-account' => __( 'Edit Account', 'hovercraft' ),
		'edit-address' => __( 'Edit Address', 'hovercraft' ),
		'payment-methods' => __( 'Payment Methods', 'hovercraft' ),
		'add-payment-method' => __( 'Add Payment Method', 'hovercraft' ),
		'lost-password' => __( 'Lost Password', 'hovercraft' ),
		'customer-logout' => __( 'Logout', 'hovercraft' ),
		'order-pay' => __( 'Pay For Order', 'hovercraft' ),
		'order-received' => __( 'Order Received', 'hovercraft' ),
	);

	if ( isset( $labels[ $endpoint ] ) ) {
		return $labels[ $endpoint ];
	}

	return ucwords( str_replace( array( '-', '_' ), ' ', $endpoint ) );
}

// render woocommerce taxonomy breadcrumb
function hovercraft_breadcrumb_woocommerce_taxonomy( &$position ) {
	$term = get_queried_object();

	if ( ! $term || ! isset( $term->term_id, $term->taxonomy, $term->name ) ) {
		hovercraft_breadcrumb_item( '', hovercraft_breadcrumb_current_title(), $position++, true );
		return;
	}

	$ancestors = array_reverse( get_ancestors( $term->term_id, $term->taxonomy ) );

	foreach ( $ancestors as $ancestor_id ) {
		$ancestor = get_term( $ancestor_id, $term->taxonomy );

		if ( $ancestor && ! is_wp_error( $ancestor ) && isset( $ancestor->name ) ) {
			hovercraft_breadcrumb_item( get_term_link( $ancestor ), $ancestor->name, $position++ );
		}
	}

	hovercraft_breadcrumb_item( '', $term->name, $position++, true );
}

// render woocommerce product breadcrumb
function hovercraft_breadcrumb_woocommerce_product( &$position ) {
	$terms = wc_get_product_terms( get_the_ID(), 'product_cat' );

	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
		$primary = $terms[0];
		$ancestors = array_reverse( get_ancestors( $primary->term_id, 'product_cat' ) );

		foreach ( $ancestors as $ancestor_id ) {
			$ancestor = get_term( $ancestor_id, 'product_cat' );

			if ( $ancestor && ! is_wp_error( $ancestor ) && isset( $ancestor->name ) ) {
				hovercraft_breadcrumb_item( get_term_link( $ancestor ), $ancestor->name, $position++ );
			}
		}

		hovercraft_breadcrumb_item( get_term_link( $primary ), $primary->name, $position++ );
	}

	hovercraft_breadcrumb_item( '', get_the_title(), $position++, true );
}

// get current breadcrumb title
function hovercraft_breadcrumb_current_title() {
	if ( is_singular() ) {
		return get_the_title();
	}

	if ( is_archive() ) {
		return strip_tags( get_the_archive_title() );
	}

	if ( is_search() ) {
		return __( 'Search results for: ', 'hovercraft' ) . get_search_query();
	}

	return wp_get_document_title();
}

// get custom post type fallback breadcrumb
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

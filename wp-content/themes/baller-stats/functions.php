<?php
    // removes from admin menu
    add_action( 'admin_menu', 'remove_admin_menus' );
    function remove_admin_menus() {
        remove_menu_page( 'edit-comments.php' );
        remove_menu_page( 'edit.php' );
        remove_menu_page( 'upload.php' );
        remove_menu_page( 'edit.php?post_type=page' );
        remove_menu_page( 'themes.php' );
        remove_menu_page( 'users.php' );
        remove_menu_page( 'tools.php' );
        remove_menu_page( 'options-general.php' );
        remove_menu_page( 'index.php' );
    }
	
	// register stats post type
	register_post_type('stats',
		array(
			'labels'             => array(
				'name'               => _x('Stats', 'post type general name'),
				'singular_name'      => _x('Stat', 'post type singular name'),
				'menu_name'          => _x('Stats', 'admin menu'),
				'name_admin_bar'     => _x('Stat', 'add new on admin bar'),
				'add_new'            => _x('Add New', 'stat'),
				'add_new_item'       => __('Add New Stat'),
				'new_item'           => __('New Stats'),
				'edit_item'          => __('Edit Stat'),
				'view_item'          => __('View Stat'),
				'all_items'          => __('All Stats'),
				'search_items'       => __('Search Stats'),
				'parent_item_colon'  => __('Parent Stats:'),
				'not_found'          => __('No stats found.'),
				'not_found_in_trash' => __('No stats found in trash.')
			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array('slug' => 'stats'),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => null,
			'menu_icon'          => 'dashicons-media-spreadsheet',
			'supports'           => array('title', 'revisions', 'editor'),
		)
	);
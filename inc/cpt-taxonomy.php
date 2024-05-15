<?php
function create_service_post_type()
{
    //CPT for Services 
    $labels = array(
        'name' => __('Services', 'post type general name'),
        'singular_name' => __('Service', 'post type singular name'),
        'add_new' => __('Add New', 'Specialty'),
        'add_new_item' => __('Add New Service'),
        'edit_item' => __('Edit Service'),
        'new_item' => __('New Service'),
        'view_item' => __('View Service'),
        'search_items' => __('Search Services'),
        'not_found' => __('No services found'),
        'not_found_in_trash' => __('No services found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Services'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'service'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => array('title', 'editor', 'thumbnail'),
        'template' => array(
            array('core/paragraph'),
        ),
    );

    register_post_type('webtech-service', $args);

    //CPT for Staff 
    $labels = array(
			'name' => __('Staffs', 'post type general name'),
			'singular_name' => __('Staff', 'post type singular name'),
			'add_new' => __('Add New', 'Specialty'),
			'add_new_item' => __('Add New Staff'),
			'edit_item' => __('Edit Staff'),
			'new_item' => __('New Staff'),
			'view_item' => __('View Staff'),
			'search_items' => __('Search Staffs'),
			'not_found' => __('No staffs found'),
			'not_found_in_trash' => __('No staffs found in Trash'),
			'parent_item_colon' => '',
			'menu_name' => 'Staffs'
	);

	$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_rest' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'staff'),
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => 'dashicons-admin-tools',
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
			'template' => array(
					array('core/paragraph'),
					array('core/button'),
			),
			'template_lock' => 'all',
	);

	register_post_type('webtech-staff', $args);

    //CPT for Testimonials 
    $labels = array(
        'name' => __('Testimonial', 'post type general name'),
        'singular_name' => __('Staff', 'post type singular name'),
        'add_new' => __('Add New', 'Specialty'),
        'add_new_item' => __('Add New Staff'),
        'edit_item' => __('Edit Staff'),
        'new_item' => __('New Staff'),
        'view_item' => __('View Staff'),
        'search_items' => __('Search Testimonial'),
        'not_found' => __('No Testimonial found'),
        'not_found_in_trash' => __('No Testimonial found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Testimonial'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'testimonial'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'thumbnail'),
        'template' => array(
            array('core/paragraph'),
        ),
        'template_lock' => 'all'
    );

    register_post_type('webtech-testimonial', $args);

}
add_action('init', 'create_service_post_type');
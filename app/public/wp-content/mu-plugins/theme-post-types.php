<?php

function theme_post_types() {
    register_post_type( 'usps', array(
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Usps',
            'add_new_item' => 'Add New Usps Item',
            'edit_item' => 'Edit Usps',
            'all_items' => 'All Usps',
            'singular_name' => 'Usps Item'
        ),
        'menu_icon' => 'dashicons-format-aside'
    ) );
    register_post_type( 'cards', array(
        'public' => true,
        'show_in_rest' => true,
        'support' => array( 'title', 'editor', 'custom_fields' ),
        'labels' => array(
            'name' => 'Cards',
            'add_new_item' => 'Add New Card',
            'all_items' => 'All Cards',
            'singular_name' => 'Card'
        ),
        'menu_icon' => 'dashicons-index-card'
    ) );
}

add_action( 'init', 'theme_post_types' );

?>
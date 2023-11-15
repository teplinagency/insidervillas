<?php
function create_post_type() { 
	register_post_type( 'villa', 
        array(
            'labels' => array(
                'name' => __( 'Villas' ), 
                'singular_name' => __( 'Villa' ), 
                'menu_name' => 'Villas'
            ),
            'show_in_rest' => true,
            'public' => true,
            'menu_position' => 5, 
            'supports' => array('title', 'editor', 'thumbnail') ,
			'rewrite'  => array('slug' => 'properties')
        )
    );
	
	/*register_post_type( 'testimonial', 
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ), 
                'singular_name' => __( 'Testimonial' ), 
                'menu_name' => 'Testimonials'
            ),
            'show_in_rest' => true,
            'public' => true,
            'menu_position' => 5, 
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );*/
	
    register_post_type( 'places', 
        array(
            'labels' => array(
                'name' => __( 'Our Experience Places' ), 
                'singular_name' => __( 'Place' ), 
                'menu_name' => 'Places'
            ),
            'show_in_rest' => true,
            'public' => true,
            'menu_position' => 5, 
            'supports' => array('title', 'editor') 
        )
    );
	
	 register_post_type( 'boat', 
        array(
            'labels' => array(
                'name' => __( 'Yachts' ), 
                'singular_name' => __( 'Yacht' ), 
                'menu_name' => 'Yachts'
            ),
            'show_in_rest' => true,
            'public' => true,
            'menu_position' => 5, 
            'supports' => array('title', 'editor', 'thumbnail'),
			'rewrite'  => array('with_front' => false)
        )
    );
	
	register_post_type( 'helicopter', 
        array(
            'labels' => array(
                'name' => __( 'Helicopters' ), 
                'singular_name' => __( 'Helicopter' ), 
                'menu_name' => 'Helicopters'
            ),
            'show_in_rest' => true,
            'public' => true,
            'menu_position' => 5, 
            'supports' => array('title', 'editor', 'thumbnail') 
        )
    );
	
	register_post_type( 'jets', 
        array(
            'labels' => array(
                'name' => __( 'Private Jets' ), 
                'singular_name' => __( 'Jet' ), 
                'menu_name' => 'Private Jets'
            ),
            'show_in_rest' => true,
            'public' => true,
            'menu_position' => 5, 
            'supports' => array('title', 'editor', 'thumbnail') 
        )
    );
}
add_action( 'init', 'create_post_type' );


add_action( 'init', 'my_taxonomy' );
function my_taxonomy(){
    register_taxonomy( 'areas', array('villa', 'testimonial'), [
        'label'                 => '', 
        'labels'                => [
            'name'              => 'Areas',
            'singular_name'     => 'Area',
            'menu_name'         => 'Areas',
        ],
        'description'           => '', 
        'public'                => true,
        'hierarchical'          => true,
        'capabilities'          => array(),
        'meta_box_cb'           => 'post_categories_meta_box', 
        'show_admin_column'     => false,
    ] );
 
}
?>
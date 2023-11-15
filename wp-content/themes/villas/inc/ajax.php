<?php
function loadmore_posts(){
	
	$data = [];
	
	if(!empty($_POST['term'])) {
		if($_POST['post_type'] == 'testimonial') {
			$tax_query = array(
				'taxonomy' => 'areas',
				'field'    => 'term_id',
				'terms'    => $_POST['term'],
			);
		}
	}
	
	$next_page = $_POST['page'] + 1;
	$args = array(
		'post_type' => $_POST['post_type'],
		'tax_query' => array($tax_query),
		'posts_per_page' => $_POST['per_page'],
		'paged' => $next_page,
		'orderby' => 'DATE',
		'order' => 'DESC',
		'post_status' => 'publish'
	);


	$post_query = new WP_Query( $args );
	
	$template = $_POST['post_type'];

	if( $post_query->have_posts() ) :
		$html = '';
		ob_start();
	
		while( $post_query->have_posts() ): $post_query->the_post();		
			get_template_part('template-parts/post-lists/'.$template.'');
		endwhile;
	
		$html .= ob_get_clean();
	endif;
	wp_reset_postdata();

	$data['html'] = $html;
	
	echo json_encode($data);
	wp_die(); 
}
add_action('wp_ajax_loadmore', 'loadmore_posts'); 
add_action('wp_ajax_nopriv_loadmore', 'loadmore_posts'); 


function filter_by_area(){
	
	$data = [];
	
	if(!empty($_POST['term'])) {
		if($_POST['post_type'] == 'testimonial') {
			$tax_query = array(
				'taxonomy' => 'areas',
				'field'    => 'term_id',
				'terms'    => $_POST['term'],
			);
			$term = get_term_by('id', $_POST['term'], 'areas');
			$data['maxpages'] = ceil($term->count / $_POST['per_page']);
		}

	}
	
	$args = array(
		'post_type' => $_POST['post_type'],
		'tax_query' => array($tax_query),
		'posts_per_page' => $_POST['per_page'],
		'orderby' => 'DATE',
		'order' => 'DESC',
		'post_status' => 'publish'
	);


	$post_query = new WP_Query( $args );
	
	$template = $_POST['post_type'];

	if( $post_query->have_posts() ) :
		$html = '';
		ob_start();
	
		while( $post_query->have_posts() ): $post_query->the_post();		
			get_template_part('template-parts/post-lists/'.$template.'');
		endwhile;
	
		$html .= ob_get_clean();
	endif;
	wp_reset_postdata();

	$data['html'] = $html;
	
	echo json_encode($data);
	wp_die(); 
}
add_action('wp_ajax_filter_by_area', 'filter_by_area'); 
add_action('wp_ajax_nopriv_filter_by_area', 'filter_by_area'); 


function filter_villas(){
	
	$data =  [];
	$data['html'] = '<h4 style="text-align:center; width: 100%;">Nothing found</h4>';
	
	//main_query
	$args = array(
		'post_type' => 'villa',
		'post_status' => 'publish',
		'posts_per_page' => $_POST['per_page'],
		'orderby' => 'ID',
		'order' => 'DESC',
	);
	
	if($_POST['task'] == 'loadmore') {
		$next_page = $_POST['page'] + 1;
		$data['html'] = '';
	} 
	else $next_page =  $_POST['page'];
	$args['paged'] = $next_page;
		
	
	//FILTER
	$args['meta_query'] = array();
	$args['tax_query'] = array();
	
	
	if(!empty($_POST['area'])) {
		$args['tax_query'][] = array(
			'taxonomy' => 'areas',
			'field'    => 'term_id',
			'terms'    => $_POST['area'],
		);
	}
	$args['meta_query'][] = array(
		'relation' => 'OR',
		array(
			'key' => 'price',
			'value' => 0, // также включаем в поиск виллы с 0 ценой
			'type'    => 'numeric',
		),
		'price_field' => array( //for order by this field
			'key' => 'price',
			'value' => array($_POST['price_min'], $_POST['price_max']),
			'type'    => 'numeric',
			'compare' => 'BETWEEN'
		)
	);	
	
	if(!empty($_POST['guests'])) {
		$args['meta_query'][] = array(
			'key' => 'guests',
			'value' => $_POST['guests']
		);
	}
	if(!empty($_POST['bedrooms'])) {
		$args['meta_query'][] = array(
			'key' => 'bedrooms',
			'value' => $_POST['bedrooms']
		);
	}
	if(!empty($_POST['bathrooms'])) {
		$args['meta_query'][] = array(
			'key' => 'bathrooms',
			'value' => $_POST['bathrooms']
		);
	}
	
	
	//ORDER
	$order_by = $_POST['orderby'];
	if(!empty($order_by)) {
		if($order_by == 'price_desc') {
			$args['orderby'] = 'price_field';
			$args['order'] = 'DESC';
		}
		elseif($order_by == 'price_asc') {
			$args['orderby'] = 'price_field';
			$args['order'] = 'ASC';
		}
		elseif($order_by == 'square') {
			
		}
	}
	

	$post_query = new WP_Query( $args );
	$count_villas = $post_query->found_posts;
	
	if( $post_query->have_posts() ) :
		$html = '';
		ob_start();
	
		while( $post_query->have_posts() ): $post_query->the_post();		
			get_template_part('template-parts/post-lists/villa');
		endwhile;
	
		$html .= ob_get_clean();
	endif;
	wp_reset_postdata();
	
	$data['count'] = $count_villas;
	if($html) $data['html'] = $html;
	$data['nextpage'] = $next_page;
	$data['maxpages'] = $post_query->max_num_pages;
	
	
	echo json_encode($data);
	//print_r($args);

	wp_die(); 
}
add_action('wp_ajax_filter_villas', 'filter_villas'); 
add_action('wp_ajax_nopriv_filter_villas', 'filter_villas'); 

?>
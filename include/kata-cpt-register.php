<?php
/**
 * File: kfp-kata/include/kata-cpt-register.php
 *
 * @package kfp_kata
 */

defined( 'ABSPATH' ) || die();

add_action( 'init', 'kfp_kata_cpt_register', 0 );
/**
 * Register Custom Post Type Kata
 *
 * @return void
 */
function kfp_kata_cpt_register() {

	$labels = array(
		'name'                  => _x( 'Katas', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Kata', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Katas', 'text_domain' ),
		'name_admin_bar'        => __( 'Kata', 'text_domain' ),
		'archives'              => __( 'Archivo de Katas', 'text_domain' ),
		'attributes'            => __( 'Atributos de Kata', 'text_domain' ),
		'parent_item_colon'     => __( 'Kata padre:', 'text_domain' ),
		'all_items'             => __( 'Todas las Katas', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nueva Kata', 'text_domain' ),
		'add_new'               => __( 'Nueva Kata', 'text_domain' ),
		'new_item'              => __( 'Nueva Kata', 'text_domain' ),
		'edit_item'             => __( 'Editar Kata', 'text_domain' ),
		'update_item'           => __( 'Actualizar Kata', 'text_domain' ),
		'view_item'             => __( 'Ver Kata', 'text_domain' ),
		'view_items'            => __( 'Ver Katas', 'text_domain' ),
		'search_items'          => __( 'Buscar Kata', 'text_domain' ),
		'not_found'             => __( 'No encontrada', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrando en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en la Kata', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Adjuntos a esta Kata', 'text_domain' ),
		'items_list'            => __( 'Lista de Katas', 'text_domain' ),
		'items_list_navigation' => __( 'Recorrer lista de Katas', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de Katas', 'text_domain' ),
	);
	$args   = array(
		'label'               => __( 'Kata', 'text_domain' ),
		'description'         => __( 'Katas de programación', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor' ),
		'taxonomies'          => array( 'kfp-cinturon', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'kfp-kata', $args );
}

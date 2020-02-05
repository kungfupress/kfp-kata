<?php
/**
 * File: kfp-kata/include/nivel-tax-register.php
 *
 * @package kfp_kata
 */

defined( 'ABSPATH' ) || die();

add_action( 'init', 'kfp_kata_nivel_tax_register', 0 );
/**
 * Registra la taxonomía con lo mínimo indispensable
 *
 * @return void
 */
function kfp_kata_nivel_tax_register() {
	$args = array(
		'label'             => 'Nivel',
		'hierarchical'      => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'kfp-nivel', array( 'kfp-kata' ), $args );
}

add_action( 'init', 'kfp_kata_niveles_add', 1 );
/**
 * Agrega la lista de niveles
 *
 * @return void
 */
function kfp_kata_niveles_add() {
	$niveles = array(
		'1 Cinturón Blanco',
		'2 Cinturón Amarillo',
		'3 Cinturón Naranja',
		'4 Cinturón Verde',
		'5 Cinturón Azul',
		'6 Cinturón Marrón',
		'7 Cinturón Negro',
		'8 Cinturón Rojo',
	);
	foreach ( $niveles as $nivel ) {
		wp_insert_term( $nivel, 'kfp-nivel' );
	}
}

<?php
/**
 * File: kfp-kata/include/kata-comment-form.php
 *
 * @package kfp_kata
 */

defined( 'ABSPATH' ) || die();

add_filter( 'the_content', 'kfp_kata_comment_form' );
/**
 * Agrega un formulario de comentario al final de una kata.
 * La idea es que sirva para dejar el resultado de la kata a cada usuario
 *
 * @param string $content Contenido de la kata actual.
 * @return string
 */
function kfp_kata_comment_form( $content ) {
	if ( is_singular( 'kfp-kata' ) ) {
		$content .= '<h4>Aquí va el formulario</h4>';
		$content .= '<p>Hola</p>';
	}
	return $content;
}

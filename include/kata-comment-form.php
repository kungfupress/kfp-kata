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

	// have_comments()
	// wp_list_comments()
	if ( is_singular( 'kfp-kata' ) ) {
		$content .= comment_form();
	}

	ob_start();
	comment_form();
	$comment_form = ob_get_clean();
	//insert code to modify $comment_form
	$content .= $comment_form;

	return $content;
}

<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$chapter = Timber::query_post();
$context['current_nav'] = 'Edition';

$context['chapter'] = $chapter;



Timber::render( 'single-edition_chapters.twig', $context );

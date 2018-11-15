<?php
/**
 * Template Name: Edition Page Template
 * Description:
 */

$context = Timber::get_context();
$post = Timber::query_post();

$context['current_nav'] = 'Edition';

// $posts = Timber::get_posts('post_type = edition_chapters');
$chapters = Timber::get_posts(array('post_type' => 'edition_chapters', 'posts_per_page' => -1));

$context['chapters'] = $chapters;

Timber::render( 'template-edition.twig', $context );

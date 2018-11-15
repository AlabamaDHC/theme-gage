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
$page = Timber::query_post();
$context['current_nav'] = 'Edition';

$context['page'] = $page;
$context['chapter'] = new Timber\Post(get_field('chapter'));

$page_number = (int) get_field('page_number', $page->ID);
$context['page_number'] = $page_number;

$next_page = Timber::get_posts(array('post_type' => 'edition_pages', 'posts_per_page' => 1, 'meta_key' => 'page_number', 'meta_value' => '16' ));
$prev_page = Timber::get_posts(array('post_type' => 'edition_pages', 'posts_per_page' => 1, 'meta_key' => 'page_number', 'meta_value' => '18' ));
$context['next_page'] = $next_page;
$context['prev_page'] = $prev_page;


Timber::render( 'single-edition_pages.twig', $context );

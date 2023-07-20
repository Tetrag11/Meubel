<?php

/**
 * Register Custom Post collection function
 *
 * Use the Postcollections library to create Simple WordPress custom post collections.
 *
 * @uses jjgrainger/postcollections
 * @package https://github.com/jjgrainger/PostTypes
 * @see https://posttypes.jjgrainger.co.uk/
 */

use PostTypes\PostType;
use PostTypes\Taxonomy;

$product = new PostType('product');

/*
 * Set post type options
 *
 * @see https://developer.wordpress.org/reference/functions/register_post_type
 */

$product->options([
    'has_archive'   => true,
    'show_in_rest'  => true
]);

$product->taxonomy('collection');
$product->taxonomy('material');

/*
 * Menu Icon
 *
 * @see https://developer.wordpress.org/resource/dashicons
 */

$product->icon('dashicons-format-quote');

/*
 * Set options for the taxonomy
 *
 * @see https://developer.wordpress.org/reference/functions/register_taxonomy
 */

$collection = new Taxonomy('collection');
$material = new Taxonomy('material');

$collection->options([
    'hierarchical' => true,
]);

$material->options([
    'hierarchical' => true,
]);



/*
 * Register custom post collection and taxonomy
 */

$product->register();
$collection->register();
$material->register();

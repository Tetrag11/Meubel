<?php

/**
 * Register Custom Post Type function
 *
 * Use the PostTypes library to create Simple WordPress custom post types.
 *
 * @uses jjgrainger/posttypes
 * @package https://github.com/jjgrainger/PostTypes
 * @see https://posttypes.jjgrainger.co.uk/
 */

use PostTypes\PostType;
use PostTypes\Taxonomy;

$collection = new PostType('collection');

/*
 * Set post type options
 *
 * @see https://developer.wordpress.org/reference/functions/register_post_type
 */

$collection->options([
    'has_archive'   => true,
    'show_in_rest'  => true
]);

$collection->taxonomy('type');

/*
 * Menu Icon
 *
 * @see https://developer.wordpress.org/resource/dashicons
 */

$collection->icon('dashicons-superhero-alt');

/*
 * Set options for the taxonomy
 *
 * @see https://developer.wordpress.org/reference/functions/register_taxonomy
 */

$type = new Taxonomy('type');

$type->options([
    'hierarchical' => true,
]);


/*
 * Register custom post type and taxonomy
 */

$collection->register();
$type->register();

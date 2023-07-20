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


$material = new PostType('material');

/*
 * Set post type options
 *
 * @see https://developer.wordpress.org/reference/functions/register_post_type
 */

$material->options([
    'has_archive'   => true,
    'show_in_rest'  => true
]);



/*
 * Menu Icon
 *
 * @see https://developer.wordpress.org/resource/dashicons
 */

$material->icon('dashicons-superhero-alt');

/*
 * Set options for the taxonomy
 *
 * @see https://developer.wordpress.org/reference/functions/register_taxonomy
 */






/*
 * Register custom post type and taxonomy
 */

$material->register();

<?php

/**
 * Template Name: Blog Page
 */
get_header();

?>

<!-- section-1 -->
<div class="blog-1 ctn">
    <div class="inner">
        <div class="item">
            <h1 class="heading gold padding-top-128 padding-bottom-128">The Journal</h1>
        </div>
    </div>
</div>

<!-- blogs -->

<?php

$args = array(
    'post_type' => 'blog',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'orderby' => 'title',
    'order' => 'ASC',
);

$loop = new WP_Query($args);

while ($loop->have_posts()) : $loop->the_post(); ?>

    <div class="blogs ctn">
        <div class="row padding-top-32 padding-bottom-32">
            <div class="col-4">
                <?php $image = get_field('image'); ?>
                <?php if ($image) { ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php } ?>
            </div>

            <div class="col-7">
                <a href="<?php the_permalink() ?>" class="sub-heading black"><?php the_title() ?></a>
                <div>
                    <p class="link-text"><?php the_time(get_option('date_format')); ?></p>
                    <p class="link-text"> <?php the_field('author'); ?></p>
                </div>
            </div>

        </div>
    </div>




<?php endwhile;

wp_reset_postdata();

?>



















<?php
get_footer();
?>`
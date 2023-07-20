<?php


get_header();
?>






<!-- section-1 -->
<div class="single-coll-1 ctn">
    <div class="row">
        <h1 class="heading padding-top-128 padding-bottom-128"><a href="<?php echo get_page_link(11); ?>#collection" class=" black heading">Our Collection</a> / <span class="gold"><?php the_title(); ?></span> </h1>
    </div>
</div>

<!-- section-products -->
<?php
$materials = get_terms(
    array(
        'taxonomy' => 'material'
    )
);
?>
<?php $productitems = get_field('productitems'); ?>
<?php if ($productitems) : ?>
    <?php foreach ($productitems as $post) :  ?>
        <?php setup_postdata($post); ?>
        <div class="relative-wrapper">
            <a href="<?php the_permalink(); ?>" class="link-full"></a>
            <div class="single-coll-2 ctn">
                <div class="padding row border-color">
                    <div class="absolute avbmb-dis"><span class="link-text">Available materials</span></div>
                    <h1 class="sub-heading "><?php the_title(); ?></h1>
                    <a href="<?php the_permalink(); ?>" class="body-text black">View piece</a>
                </div>
                <div class="row material">
                    <?php $terms = wp_get_object_terms($post->ID, 'material');
                    foreach ($terms as $term) { ?>
                        <?php
                        $taxonomy_prefix = 'material';
                        // Define term ID
                        // Replace NULL with ID of term to be queried eg '123'
                        $term_id = $term->term_id;
                        // Define prefixed term ID
                        $term_id_prefixed = $taxonomy_prefix . '_' . $term_id;
                        $image = get_field('image', $term_id_prefixed); ?>
                        <?php if ($image) { ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="main-image row">
                    <?php $image = get_field('image'); ?>
                    <?php if ($image) { ?>
                        <img class="col-10" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php } ?>
                </div>
                <div class="mobile-materials ">
                    <div class="row">
                        <h4 class="link-text ">Available materials</h4>
                    </div>
                    <div class="mobile-material-items padding">
                        <?php $terms2 = wp_get_object_terms($post->ID, 'material');
                        foreach ($terms2 as $term) { ?>
                            <?php
                            $taxonomy_prefix = 'material';
                            // Define term ID
                            // Replace NULL with ID of term to be queried eg '123'
                            $term_id = $term->term_id;
                            // Define prefixed term ID
                            $term_id_prefixed = $taxonomy_prefix . '_' . $term_id;
                            $image = get_field('image', $term_id_prefixed); ?>
                            <?php if ($image) { ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>



<?php
get_footer();
?>
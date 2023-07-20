<?php

/**
 * Template Name: Front Page
 */
get_header();


?>


<!-- section-1 -->
<div class="home-section-1 ctn">
    <div class="inner">
        <div class="inner-flex-item">

            <div class="text padding-top-128 padding-bottom-128">
                <span class="black adjust body-text ">Welcome</span>
                <p class="heading padding-top-32 "> <span class=" adjust">Meubel House is a </span>boutique furniture store that houses an<span class="gold"> elegantly handpicked collection of unique furniture.</span></p>
            </div>

        </div>

    </div>
</div>


<!-- section-2 -->

<div class="home-section-2 ">
    <div class="img">
        <?php $home_page_img_1 = get_field('home-page-img-1', 'option'); ?>
        <?php if ($home_page_img_1) { ?>
            <img src="<?php echo $home_page_img_1['url']; ?>" alt="<?php echo $home_page_img_1['alt']; ?>" />
        <?php } ?>
    </div>
    <div class="text ctn padding-top-32">
        <div class="row">
            <div class="col-md-6">
                <p class="sub-heading white">Explore our collection</p>
            </div>
            <div class="col-md-6"><a href="#" class="link-text white text-right">Open catalog</a></div>
        </div>
    </div>
</div>


<!-- section-3 -->
<div id="collection" class="home-section-3 ctn">
    <?php
    $collections = get_terms(
        array(
            'taxonomy' => 'collection'
        )
    );
    foreach ($collections as $key => $collection) {
        $i = $key + 1;
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => '1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'collection',
                    'terms' => $collection->term_id,
                ),
            ),
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {

            while ($query->have_posts()) {
                $query->the_post();
                $terms = get_the_terms($collection->ID, 'collection');

                foreach ($terms as $term) { ?>
                    <!-- echo '<li><a href="' . get_term_link($term) . '">' . $term->name . $i . '</a></li>'; -->
                    <div class="row black-line">
                        <!-- web -->
                        <div class="col-1 web number-text black"><?php echo $i ?></div>
                        <div class="col-11 web inner-flex">
                            <a href="<?php echo get_term_link($term) ?>" class="inner-flex">
                                <p class="sub-heading black"><?php echo $term->name ?></p>
                                <p class="link-text black">View all</p>
                            </a>
                        </div>
                        <!-- tab -->
                        <div class="col-2 tab number-text"><?php echo $i ?></div>
                        <div class="col-10 tab">
                            <a href="<?php echo get_term_link($term) ?>" class="inner-flex">
                                <p class="sub-heading black"><?php echo $term->name ?></p>
                                <p class="link-text black">View all</p>
                            </a>
                        </div>
                        <!-- mobile -->
                        <div class="col-12 mob">
                            <a href="<?php echo get_term_link($term) ?>" class="inner-flex">
                                <p class="sub-heading black"><?php echo $term->name ?></p>
                                <p" class="link-text black"><i class="fa-solid fa-arrow-right"></i></p>
                            </a>
                        </div>
                    </div>
    <?php }
            }
        }
    }
    ?>
</div>


<!-- section-4-->
<div class="home-section-4 ctn">
    <div class="inner">
        <div class="inner-flex-item">
            <div class="text padding-top-128 padding-bottom-128">
                <span class="black adjust body-text ">Our store</span>
                <p class="heading padding-top-32 "> <span class="gold adjust">
                        Meubel House at its location on Gower Street, Colombo </span>is a spacious place giving people the
                    opportunity to examine each unique piece at leisure,
                    enabling them to find the perfect signature work that
                    suits their individual preference.</p>
            </div>

        </div>

    </div>
</div>

<!-- section-5 -->
<script src="https://fast.wistia.com/embed/medias/2xzp37nkdj.jsonp" async></script>
<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
    <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
        <div class="wistia_embed wistia_async_2xzp37nkdj videoFoam=true" style="height:100%;position:relative;width:100%">
            <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/2xzp37nkdj/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div>
        </div>
    </div>
</div>




<?php
get_footer();
?>
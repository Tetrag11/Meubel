<?php
get_header();
?>



<div class="single-blog-1 ctn">
    <div class="row padding-top-128 ">
        <div class="col-7">
            <div class="header">
                <h1 class="sub-heading  padding-bottom-32"><?php the_title() ?></h1>


                <div class="cred padding-top-32  padding-bottom-32">
                    <p class="link-text"><?php the_time(get_option('date_format')); ?></p>
                    <p class="link-text"><?php the_field('author'); ?></p>
                </div>

            </div>

            <div class="image padding-bottom-32">
                <img class="" src="<?php echo get_stylesheet_directory_uri() . '/images/rec.png'; ?>" alt="">
            </div>
            <div class="text padding-bottom-128">
                <?php the_content(); ?>
            </div>


        </div>
    </div>
</div>


<div class="single-blog-back ctn ">
    <div class="row">
        <div class="col-7">
            <a href="<?php echo get_page_link(103); ?>" class="sub-heading black padding-top-32 padding-bottom-32">Back to journal</a>
        </div>
    </div>
</div>








<?php
get_footer();
?>
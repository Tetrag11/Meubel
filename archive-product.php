<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>

        <?php
        // Define our WP Query Parameters
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => -1,
        );
        $the_query = new WP_Query($args); ?>

        <?php
        // Start our WP Query
        while ($the_query->have_posts()) : $the_query->the_post();

            // Display the Post Title with Hyperlink
        ?>

            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>



        <?php
        // Repeat the process and reset once it hits the limit
        endwhile;
        wp_reset_postdata();
        ?>
    </ul>
</body>

</html>
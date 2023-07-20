<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
    <?php wp_head() ?>


</head>

<body>

    <nav class="ctn">
        <div class="explore">
            <a href="<?php echo get_page_link(11); ?>#collection" class="link-text black col-2 explore-link">Explore our collection</a>
        </div>

        <div class="logo">
            <a href="<?php echo get_page_link(11); ?>" class="logo-text gold col-3 ">MEUBEL HOUSE</a>
            <a href="<?php echo get_page_link(11); ?>" class="mobile-logo">
                <?php $logo = get_field('logo', 'option'); ?>
                <?php if ($logo) { ?>
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                <?php } ?>
            </a>
        </div>

        <div class="links">
            <ul>
                <li><a class="link-text black" href="#" style="opacity: 0; pointer-events:none;">About Meubel</a></li>
                <li><a class="link-text black" href="<?php echo get_page_link(65); ?>" style="opacity: 0; pointer-events: none;">The Journal</a></li>
                <li><a class="link-text gold" href="<?php echo get_page_link(72); ?>">Contact Us</a></li>
            </ul>
            <a href="javascript:void(0)" onclick="openMenu()" class="menu">
                <?php $menu_icon = get_field('menu_icon', 'option'); ?>
                <?php if ($menu_icon) { ?>
                    <img src="<?php echo $menu_icon['url']; ?>" alt="<?php echo $menu_icon['alt']; ?>" />
                <?php } ?></a>
            <a href="javascript:void(0)" onclick="closeMenu()" class="closemenu link-text white">Back</a>
        </div>

    </nav>
    <!-- tab menu -->
    <!-- full screen menu -->
    <div class="fsm">
        <div class="ctn">
            <div class="row align-items-center">
                <div class="items">
                    <div class="white-line">
                        <div class="row">
                            <div class="col-1 mh"><span class="number-text white">01</span></div>
                            <div class="col-6 ml"><a href="<?php echo get_page_link(11); ?>" class="menu-text white ml">Home</a></div>

                            <div class="col-1 mh"></div>
                            <div class="col-4 mh"><a href="<?php echo get_page_link(11); ?>" class="menu-text white mh">Home</a></div>
                            <div class="col-4 mh"></div>
                            <div class="col-2 mh">
                                <p class="body-text white text-right">Enter</p>
                            </div>
                            <div class="col-6 ml">
                                <p class="body-text white text-right"><i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="white-line">
                        <div class="row">
                            <div class="col-1 mh"><span class="number-text white">02</span></div>
                            <div class="col-6 ml"><a href="<?php echo get_page_link(11); ?>#collection" class="menu-text white ml">Our Collection</a></div>

                            <div class="col-1 mh"></div>
                            <div class="col-4 mh"><a href="<?php echo get_page_link(11); ?>#collection" class="menu-text white mh">Our Collection</a></div>
                            <div class="col-4 mh"></div>
                            <div class="col-2 mh">
                                <p class="body-text white text-right">Enter</p>
                            </div>
                            <div class="col-6 ml">
                            </div>
                        </div>
                    </div>
                    <div class="white-line" style="display: none;">
                        <div class="row">
                            <div class="col-1 mh"><span class="number-text white">03</span></div>
                            <div class="col-6 ml"><a href="" class="menu-text white ml" style="opacity: 0; pointer-events:none;">About Meubel</a></div>

                            <div class="col-1 mh"></div>
                            <div class="col-4 mh"><a href="" class="menu-text white mh" style="opacity: 0; pointer-events:none;">About Meubel</a></div>
                            <div class="col-4 mh"></div>
                            <div class="col-2 mh">
                                <p class="body-text white text-right">Enter</p>
                            </div>
                            <div class="col-6 ml">
                                <p class="body-text white text-right"><i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="white-line" style="display: none;">
                        <div class="row">
                            <div class="col-1 mh"><span class="number-text white">04</span></div>
                            <div class="col-6 ml"><a href="<?php echo get_page_link(65); ?>" style="opacity: 0; pointer-events: none;" class="menu-text white ml">Our Journal</a></div>

                            <div class="col-1 mh"></div>
                            <div class="col-4 mh"><a href="<?php echo get_page_link(65); ?>" style="opacity: 0; pointer-events: none;" class="menu-text white mh">Our Journal</a></div>
                            <div class="col-4 mh"></div>
                            <div class="col-2 mh">
                                <p class="body-text white text-right">Enter</p>
                            </div>
                            <div class="col-6 ml">
                                <p class="body-text white text-right"><i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="white-line">
                        <div class="row">
                            <div class="col-1 mh"><span class="number-text white">05</span></div>
                            <div class="col-6 ml"><a href="<?php echo get_page_link(72); ?>" class="menu-text white ml">Contact</a></div>

                            <div class="col-1 mh"></div>
                            <div class="col-4 mh"><a href="<?php echo get_page_link(72); ?>" class="menu-text white mh">Contact</a></div>
                            <div class="col-4 mh"></div>
                            <div class="col-2 mh">
                                <p class="body-text white text-right">Enter</p>
                            </div>
                            <div class="col-6 ml">
                                <p class="body-text white text-right"><i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<!-- section before footer -->

<div class="section-before-footer ctn">
    <div class="text padding-top-128 padding-bottom-128">
        <span class="black adjust body-text ">Contact us</span>
        <p class="heading padding-top-32 "> <span class="gold adjust">Our staff at Meubel is always here for you. </span>Whether you have questions or just want to say hello, we're happy to assist you!</p>
    </div>
    <div class="cards">
        <div class="padding-top-72 padding-bottom-72 border-bottom box-link" data-location="<?php the_field('whatsapp_link', 'option'); ?>" onclick="href1()">
            <img class="" src="<?php echo get_stylesheet_directory_uri() . '/images/raushan.png'; ?>" alt="">
            <div class="mobile-flex">
                <p class="body-text padding-bottom-24 padding-top-24">Raushan is online to chat</p>
                <a href='#' class="sub-heading green">Open Whatsapp</a>
            </div>
        </div>
        <div class="padding-top-72 padding-bottom-72 border-div border-bottom box-link2" data-location2="tel:94765391157" onclick="href2()">
            <img src="<?php echo get_stylesheet_directory_uri() . '/images/saduni.png'; ?>" alt="">
            <div class="mobile-flex">
                <p class="body-text padding-bottom-24 padding-top-24">Call Sanduni at our store</p>
                <a href="tel:94765391157" class="sub-heading gold">+94 76 539 1157</a>
            </div>
        </div>
        <div class="padding-top-72 padding-bottom-72 border-bottom box-link3" data-location3="<?php echo get_page_link(72); ?>" onclick="href3()">
            <img src="<?php echo get_stylesheet_directory_uri() . '/images/meubel.png'; ?>" alt="">
            <div class="mobile-flex">
                <p class="body-text padding-bottom-24 padding-top-24">Lets talk</p>
                <a href='#' class="sub-heading black">Inquiry online</a>
            </div>
        </div>
    </div>
</div>

<!-- footer-new -->
<div class="footer-new">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9801461562824!2d79.8567354147505!3d6.892977895019189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bdbe0e72189%3A0x9d5ca5fd589a5468!2sMeubel%20House!5e0!3m2!1sen!2slk!4v1664337244151!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="footer ctn">
        <div class="inner-grid">
            <div class="second-item">
                <div class="row footer-web-tab-show ">
                    <div class="col-3">
                        <a href=""><a href=""><span class="link-text grey">Facebook</span></a></a>
                        <a href=""><span class="link-text grey">Instagram</span></a>
                    </div>
                    <div class="col-3">
                        <a href="<?php echo get_page_link(11); ?>#collection"><span class="link-text grey">Our Collection</span></a>
                        <a href="<?php echo get_page_link(72); ?>"><span class="link-text grey">Contact us</span></a>
                    </div>
                    <div class="col-3">
                        <span class="link-text grey">No. 34, Gower Street,</span>
                        <span class="link-text grey">Colombo 05,</span>
                    </div>
                    <div class="col-3 lastchild">
                        <a href="tel:+94765391157 "><span class="link-text grey">+94 76 539 1157</span></a>
                        <a href='tel:+94117470025'><span class="link-text grey">+94 11 747 0025</span></a>
                    </div>
                </div>
                <div class="footer-web-tab-hidden ">
                    <div class="row">
                        <div class="col-6">
                            <a href=""><span class="link-text grey">Facebook</span></a>
                            <a href=""><span class="link-text grey">Instagram</span></a>
                        </div>
                        <div class="col-6">
                            <a href="<?php echo get_page_link(11); ?>#collection"><span class="link-text grey">Our Collection</span></a>
                            <a href="<?php echo get_page_link(72); ?>"><span class="link-text grey">Contact us</span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <span class="link-text grey">No. 34, Gower Street,</span>
                            <span class="link-text grey">Colombo 05,</span>
                        </div>
                        <div class="col-6">
                            <a href="tel:+94765391157 "><span class="link-text grey">+94 76 539 1157</span></a>
                            <a href='tel:+94117470025'><span class="link-text grey">+94 11 747 0025</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<script>
    function href1() {
        window.location = document.querySelector('.box-link').dataset.location;

    }

    function href2() {
        window.location = document.querySelector('.box-link2').dataset.location2;

    }

    function href3() {
        window.location = document.querySelector('.box-link3').dataset.location3;

    }

    function hrefmap() {
        window.open(document.querySelector('.map').dataset.locationMap, '_blank');

    }

    function hrefwaInquire() {
        window.location = document.querySelector('.wa-inquire').dataset.locationWai;

    }

    function hrefprodcon() {
        window.location = document.querySelector('.prodcon').dataset.locationProdcon;

    }
</script>



<?php wp_footer() ?>
</body>

</html>
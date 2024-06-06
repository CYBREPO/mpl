</body>

</html>


<footer class="main-footer bg-purple pt-5">
    <div class="container border-bottom pb-5">
        <div class="row">
            <div class="col-md-3 ps-0">
                <div class="footer-logo-widget">

                <figure class="wp-block-image size-large">
                 
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
	echo '<img src="' . esc_url( $logo[0] ) . '" class="w-100 wp-image-491" alt="' . get_bloginfo( 'name' ) . '">';
}  ?>

                  
                
                    </figure>




                </div>
            </div>
            <div class="col-md-3 ps-md-5">
                <h6>
                    TeamS
                </h6>
                <div class="menu-footer-menu-container">
                    <ul id="menu-footer-menu" class="menu">

                        <li id="menu-item-656"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-656"><a href="<?php bloginfo('url')?>/team">
                                4S Puneri Bappa</a></li>
                        <li id="menu-item-656"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-656"><a href="<?php bloginfo('url')?>/team">
                                PBG Kolhapur Tuskers</a></li>
                        <li id="menu-item-656"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-656"><a href="<?php bloginfo('url')?>/team">
                                Ratnagiri Jets</a></li>
                        <li id="menu-item-656"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-656"><a href="<?php bloginfo('url')?>/team">
                                Eagle Nashik Titans</a></li>
                        <li id="menu-item-656"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-656"><a href="<?php bloginfo('url')?>/team">
                                Chhatrapti Sambhaji Kings </a></li>
                        <li id="menu-item-656"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-656"><a href="<?php bloginfo('url')?>/team">
                            Raigad Royals</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 ps-md-5">
                <h6>
                    About
                </h6>
                <div class="menu-footer-menu-container">
                    <div class="menu-footer-menu-container" id="menu-footer-menu">
                        <ul id="menu-footer-menu" class="menu">

                            <li id="menu-item-656"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-656"><a
                                    href="#">About Us</a></li>
                            <li id="menu-item-656"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-656"><a
                                    href="#">Code of Conduct</a></li>
                            <li id="menu-item-657"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-657"><a
                                    href="#">Rules and Regulations</a></li>
                            <li id="menu-item-667"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-667"><a
                                    href="https://mpl.thebrandodyssey.com/index.php/contact-us/">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ps-md-5">
                <h6>Social links</h6>
                <ul class="social-icons">
                    <li>
                        <a href="https://www.instagram.com/mplt20tournament/?igshid=MzRlODBiNWFlZA=="
                            target="_blank"><img
                                src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Vector.svg"
                                alt=""></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/mpltournament?s=21&t=2-7IwCyW7Jf5I-D1j1-OFw" target="_blank"><img
                                src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Vector-1.svg"
                                alt=""></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/mplt20tournament?mibextid=LQQJ4d" target="_blank"><img
                                src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Vector-2.svg"
                                alt=""></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCaUZedaymGsM_mJZMAiQzVA" target="_blank"><img
                                src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Vector-3.svg"
                                alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<footer class="copyright-footer pt-0">
    <div class="container">
        <div class="row">
            <div class="col-6 ps-0">
                <ul class="d-md-flex px-0 py-3 m-0 justify-content-center justify-content-md-start  w-100">
                    <li><a href="#" class="text-white text-decoration-none">terms & conditions </a>
                    </li>
                    <li class="my-4 my-md-0 "><a href="#" class="text-white text-decoration-none mx-md-3">Privacy
                            policy</a>
                    </li>
                    <li class="text-white text-decoration-none">Copyright@MPL</li>
                </ul>
            </div>
            <div class="col-6 pe-0 ">
                <ul
                    class="d-md-flex px-0 py-3 m-0 justify-content-center justify-content-md-end w-100 text-end lower-footer">
                    <li><a href="https://thebrandodyssey.com/"
                            class="text-white text-decoration-none designbay">Website By
                            <span>THE BRAND ODYSSEY</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script>
AOS.init({
    disable: 'mobile'
});
</script>
<script>
const lightbox = GLightbox({
    touchNavigation: true,
    loop: true,
    width: "90vw",
    height: "90vh"
});
</script>
<script>
$(function() {
    // Owl Carousel
    var owl = $(".higlights");
    owl.owlCarousel({
        items: 4,
        margin: 20,
        dots: true,
        nav: true,
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 4,
                nav: true,
                loop: false
            }
        }
    });
});
</script>
<script>
$(function() {
    // Owl Carousel
    var owl = $(".higlights2");
    owl.owlCarousel({
        items: 4,
        margin: 20,
        dots: true,
        nav: true,
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 4,
                nav: true,
                loop: false
            }
        }
    });
});
</script>
<script>
$(function() {
    // Owl Carousel
    var owl = $(".squadcarousel");
    owl.owlCarousel({
        items: 5,
        margin: 20,
        dots: true,
        nav: true,
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 5,
                nav: true,
                loop: false
            }
        }
    });
});
</script>
<script>
$('.team').each(function() {
    $(this).attr('data-search-term', $(this).find('.teamplayername').text().toLowerCase());
});

$('#playerSearch').on('keyup', function() {

    var searchTerm = $(this).val().toLowerCase();
    if (searchTerm != '') {
        $('.team').each(function() {

            if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm
                .length <
                1) {
                $(this).show();
            } else {
                $(this).hide();
            }

        });
    } else {
        $(".team").each(function() {
            $(this).show();
        });
    }

});
</script>
<script>
$(document).ready(function() {
    $(".content").slice(0, 9).show();
    $(".content2").slice(0, 12).show();
    $(".loadmorebutton").on("click", function(e) {
        e.preventDefault();
        $(".content:hidden").slice(0, 4).slideDown();
        $(".content2:hidden").slice(0, 4).slideDown();
        if ($(".content:hidden").length == 0) {
            $(".loadmorebutton").addClass("d-none");
        }
        if ($(".content2:hidden").length == 0) {
            $(".loadmorebutton").addClass("d-none");
        }
    });

})
</script>
<!-- Bootstrap Javascript -->
<?php
wp_footer();
?>

</body>

</html>
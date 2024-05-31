<!doctype html>
<html lang="en" style="margin-top:0 !important">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon"
        href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Lato:wght@100;300;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/newassets/css/styles.css">
    <?php wp_head(); ?>
    <title>MPL</title>

</head>

<body>
    <topheader class="d-none d-md-block">
        <nav class="navbar p-0 d-flex align-items-center justify-content-between"
            style="background: linear-gradient(90deg, #18001C 0%, #DD460F 100%);height: 50px;">
            <div class="container">
                <div class="d-flex align-items-center">
                    <a href="https://mpl.thebrandodyssey.com">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/mcalogo.svg"
                            class="w-100" alt="mpl.thebrandodyssey.com" style="max-width: 37px;"></a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="2" height="21" viewBox="0 0 2 21"
                        fill="none">
                        <path opacity="0.6" d="M1 0V21" stroke="white" stroke-width="0.5" />
                    </svg>
                    <a href="https://mpl.thebrandodyssey.com">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/WMPLcorrected-013.svg"
                            class="w-100" alt="mpl.thebrandodyssey.com" style="max-width: 37px;"></a>
                </div>
                <div class="menu-header-menu-container">
                    <ul id="menu-header-menu" class="p-0 m-0 d-flex">
                        <div aria-current="page" style="font-family: Rubik;" class="text-white">Follow Us</div>
                        <li class="ms-4">
                            <a href="https://www.instagram.com/mplt20tournament/?igshid=MzRlODBiNWFlZA=="
                                target="_blank"><img
                                    src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Vector.svg"
                                    alt=""></a>
                        </li>
                        <li class="ms-4">
                            <a href="https://twitter.com/mpltournament?s=21&t=2-7IwCyW7Jf5I-D1j1-OFw"
                                target="_blank"><img
                                    src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Vector-1.svg"
                                    alt=""></a>
                        </li>
                        <li class="ms-4">
                            <a href="https://www.facebook.com/mplt20tournament?mibextid=LQQJ4d" target="_blank"><img
                                    src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Vector-2.svg"
                                    alt=""></a>
                        </li>
                        <li class="ms-4">
                            <a href="https://www.youtube.com/channel/UCaUZedaymGsM_mJZMAiQzVA" target="_blank"><img
                                    src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Vector-3.svg"
                                    alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </topheader>
    <header class="d-none d-md-block">
        <nav class="navbar p-0 d-flex align-items-center justify-content-between">
            <div class="container">
            <a class="navbar-brand" href="<?php bloginfo('url')?>">
                    <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
	echo '<img src="' . esc_url( $logo[0] ) . '" class="w-100" alt="' . get_bloginfo( 'name' ) . '">';
} else {
	echo '<h1>' . get_bloginfo('name') . '</h1>';
}  ?></a>

                <div class="menu-header-menu-container">
                    <ul id="menu-header-menu" class="p-0 m-0 menu">
                        <?php if (has_nav_menu('new-header-menu')) {
                        wp_nav_menu(array('theme_location' => 'new-header-menu'));
                    } ?>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
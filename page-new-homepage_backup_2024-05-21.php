<?php
/*
 * Template Name: new homepage
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>




<main>
    <section class="banner position-relative">
        <div class="animatelogo">
            <div class="container">
                <div class="d-flex flex-column-reverse flex-md-row justify-content-between align-items-center">
                    <div class="bannerplayers">
                        <img src="<?php the_field('players_banner_image') ?>" class="img-fluid" alt="">
                    </div>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Group-197-1-1-1-1.png"
                        class="map d-block animate__animated animate__bounceInUp animate__delay-1s" alt="">
                </div>
            </div>
        </div>

        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/newbg.png" alt=""
            class="d-none d-md-block w-100 main-bg">

    </section>
    <!-- Banner -->

    <div class="livematch">
        <div class="livematch-container">
            <div class="livematchlabel">
                Live match
            </div>
            <div class="d-flex justify-content-between align-items-center p-3 p-md-0">
                <div class="stadium">
                    <div class="stadiumnamelable" style="color: #606061;">Location</div>
                    <div class="stadiumname">
                        Arun Jaitley Stadium
                        New Delhi
                    </div>
                </div>
                <div class="d-flex align-items-center flex-column flex-md-row ovhjuhjh">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Puneri-Bappa-Logo-01-1.png"
                        alt="" class="liveteam1">
                    <div class="liveversus">
                        <div>
                            <span>
                                165/3
                            </span>
                            <span>
                                20 overs
                            </span>
                        </div>
                        <div>
                            <span>
                                yet to bat
                            </span>
                            <span>
                                20 overs
                            </span>
                        </div>
                    </div>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Puneri-Bappa-Logo-01-1.png"
                        alt="" class="liveteam2">
                </div>
            </div>
            <a href="#" class="orange-button">View More</a>
        </div>
    </div>

    <!-- MEN’S TEAMS -->
    <section class="mens-team">
        <div class="container">
            <div class="section-title mb-md-5" data-aos="fade-up" data-aos-duration="1500">
                MEN’S TEAMS
            </div>
            <div data-aos="fade-up" data-aos-duration="1500">
                <div class="d-flex align-items-center justify-content-around flex-sm-wrap">

                    <?php if (have_rows("team_images")):
                        while (have_rows("team_images")):
                             the_row(); ?>
                    <div class="teams-image">
                        <img src=" <?php the_sub_field("team_image"); ?>" alt="" class="img-fluid">
                    </div>
                    <?php endwhile;  
                        endif; ?>



                </div>
            </div>
        </div>
    </section>
    <!-- END MEN’S TEAMS -->

    <section class="highlights py-md-5">
        <div class="container">
            <div class="section-title mb-md-4" data-aos="fade-up" data-aos-duration="1500">
                Highlights
            </div>
            <div class="owl-carousel higlights mt-4 mt-md-5" data-aos="fade-up" data-aos-duration="1500">
                <?php if (have_rows("highlights")):while (have_rows("highlights")):the_row(); ?>
                <div class="video-background">
                    <?php the_sub_field("higlights_video_url"); ?>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>

    <section class="section-5 players-section d-block">
        <div class="row mx-auto p-0 w-100">
            <div class="col-md-6 p-0 position-relative oragnescapplayer">
                <div class="cap-container text-center">
                    <div class="cap-image-container">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/hexplayer.png"
                            alt="" class="cap-image">
                    </div>
                    <div class="cap-title">
                        ORANGE CAP HOLDER
                    </div>
                    <div class="cap-player-name">
                        Rohit Sharma
                    </div>

                    <div class="d-flex justify-content-center capscores">
                        <span>
                            <div class="cap-run">251</div>
                            <div class="cap-label">
                                Runs
                            </div>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="2" height="71" viewBox="0 0 2 71" fill="none"
                            style="margin: 0 25px;">
                            <path d="M1 0.5V70.5" stroke="url(#paint0_linear_13_5921)" />
                            <defs>
                                <linearGradient id="paint0_linear_13_5921" x1="1.5" y1="0.5" x2="1.5" y2="70.5"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F15A29" />
                                    <stop offset="0.495" stop-color="white" />
                                    <stop offset="1" stop-color="#F15A29" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <span>
                            <div class="cap-run">8</div>
                            <div class="cap-label">
                                matches
                            </div>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="2" height="71" viewBox="0 0 2 71" fill="none"
                            style="margin: 0 25px;">
                            <path d="M1 0.5V70.5" stroke="url(#paint0_linear_13_5921)" />
                            <defs>
                                <linearGradient id="paint0_linear_13_5921" x1="1.5" y1="0.5" x2="1.5" y2="70.5"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F15A29" />
                                    <stop offset="0.495" stop-color="white" />
                                    <stop offset="1" stop-color="#F15A29" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <span>
                            <div class="cap-run">52.20</div>
                            <div class="cap-label">
                                Average
                            </div>
                        </span>
                    </div>
                </div>
            </div>



            <!-- mobile -->
            <div class="col-md-6 p-0 position-relative purplecapplayer">
                <div class="cap-container text-center">
                    <div class="cap-image-container">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/hexplayer.png"
                            alt="" class="cap-image">
                    </div>
                    <div class="cap-title">
                        ORANGE CAP HOLDER
                    </div>
                    <div class="cap-player-name">
                        Rohit Sharma
                    </div>

                    <div class="d-flex justify-content-center capscores">
                        <span>
                            <div class="cap-run">251</div>
                            <div class="cap-label">
                                Runs
                            </div>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="2" height="71" viewBox="0 0 2 71" fill="none"
                            style="margin: 0 25px;">
                            <path d="M1 0.5V70.5" stroke="url(#paint0_linear_13_5921)" />
                            <defs>
                                <linearGradient id="paint0_linear_13_5921" x1="1.5" y1="0.5" x2="1.5" y2="70.5"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F15A29" />
                                    <stop offset="0.495" stop-color="white" />
                                    <stop offset="1" stop-color="#F15A29" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <span>
                            <div class="cap-run">8</div>
                            <div class="cap-label">
                                matches
                            </div>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="2" height="71" viewBox="0 0 2 71" fill="none"
                            style="margin: 0 25px;">
                            <path d="M1 0.5V70.5" stroke="url(#paint0_linear_13_5921)" />
                            <defs>
                                <linearGradient id="paint0_linear_13_5921" x1="1.5" y1="0.5" x2="1.5" y2="70.5"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F15A29" />
                                    <stop offset="0.495" stop-color="white" />
                                    <stop offset="1" stop-color="#F15A29" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <span>
                            <div class="cap-run">52.20</div>
                            <div class="cap-label">
                                Average
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<section class="sponsors d-block">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="section-title mb-md-5" data-aos="fade-up" data-aos-duration="1500">
                SPONSORS
            </div>
        </div>
        <div class="row">
            <?php for ($i=1; $i < 4; $i++) { ?>
            <div class="col-md-4">
                <img src="<?php the_field('sponsor_'.$i.'_image') ?>" alt="">
                <div class="wp-block-media-text__content">
                    <p><?php the_field('sponsor_'.$i.'_title') ?></p>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</section>


<?php get_footer("footer2"); ?>
<?php
/*
 * Template Name: new fixtures
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>


<main class="bg-light">
    <section class="position-relative">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/fixturesbanner.svg" class="d-block w-100" alt="">

        <div class="page-title">
            Fixtures
        </div>
    </section>
    <!-- Banner -->
    <div class="fixtures">
        <div class="container">
            <div class="dropdown my-md-5">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Season 2024
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>

            <div class="fixture">
                <div class="fixture-head">
                    <div>MATCH 1</div>
                    <div>Royal Challengers Bangalore beat Delhi Capitals by 8 wickets</div>
                </div>

                <div class="fixtures-body">
                    <img decoding="async"
                        src="https://eav76vtooc4.exactdn.com/wp-content/uploads/2024/04/MPL-FINAL-LOGO-02-1-e1713525502173.png?strip=all&amp;lossy=1&amp;ssl=1&amp;fit=284,237"
                        alt="" width="100px">


                    <div class="fixtures-schedule">
                        <div class="fixtures-schedule-date">
                            THU, 15TH JUNE <b>19:30</b>
                        </div>
                        Arun Jaitley Stadium, Delhi
                    </div>


                    <div class="d-flex align-items-center ms-auto">
                        <div class="fixture-run1">
                            <div>
                                113
                            </div>
                            <div>
                                (18.3)
                            </div>
                        </div>

                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Puneri-Bappa-Logo-01-1.png" alt="" style="max-width: 110px;">

                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/versusfixtures.svg" alt="" class="fixtures-versus">

                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Puneri-Bappa-Logo-01-1.png" alt="" style="max-width: 110px;">

                        <div class="fixture-run fixture-run2">
                            <div>
                                113
                            </div>
                            <div>
                                (18.3)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer("footer2"); ?>
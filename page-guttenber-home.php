<?php
/*
 * Template Name: new homepage
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>

<?php 
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-tournament-batting-leaderboard/702687',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'api-key: 7d313d7c02c39e21dc4abee42760c8f3',
                'secret_access_key: o5LgzLbpIb-e60b-11e7-mSJcQWyxHf-3de7cd8c6cf4',
                'udid: 8817480565574762',
                'device-type: thirdparty-mpl',
                'master_key: 45632789202',
                'Cookie: connect.sid=s%3ApOKpq6TM9Ez-EUAHW9aY8kuGn1HsHm9h.e0Kix5fgKITBPbFe57REWStVOCF8K1%2FfCFsU2AoLgyc'
              ),
            ));
            
            $response = curl_exec($curl);
            $batting_leader =  json_decode($response,true);

            curl_close($curl);

            $curl2 = curl_init();
            curl_setopt_array($curl2, array(
              CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-tournament-bowling-leaderboard/702687',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'api-key: 7d313d7c02c39e21dc4abee42760c8f3',
                'secret_access_key: o5LgzLbpIb-e60b-11e7-mSJcQWyxHf-3de7cd8c6cf4',
                'udid: 8817480565574762',
                'device-type: thirdparty-mpl',
                'master_key: 45632789202',
                'Cookie: connect.sid=s%3ApOKpq6TM9Ez-EUAHW9aY8kuGn1HsHm9h.e0Kix5fgKITBPbFe57REWStVOCF8K1%2FfCFsU2AoLgyc'
              ),
            ));
            
            $response2 = curl_exec($curl2);
            $bowling_leader =  json_decode($response2,true);

            $curl3 = curl_init();
            curl_setopt_array($curl3, array(
              CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-tournament-match-list/702687?type=1&teamId=&order=ASC',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'api-key: 7d313d7c02c39e21dc4abee42760c8f3',
                'secret_access_key: o5LgzLbpIb-e60b-11e7-mSJcQWyxHf-3de7cd8c6cf4',
                'udid: 8817480565574762',
                'device-type: thirdparty-mpl',
                'master_key: 45632789202',
                'Cookie: connect.sid=s%3ApOKpq6TM9Ez-EUAHW9aY8kuGn1HsHm9h.e0Kix5fgKITBPbFe57REWStVOCF8K1%2FfCFsU2AoLgyc'
              ),
            ));
            
            $response3 = curl_exec($curl3);
            $live_score =  json_decode($response3,true);

            $up_flag = 0;
            if($live_score['status'] == true){
                $up_flag = 1;
            }
        }
          catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
      
        // echo "<pre>";
        // print_r($batting_leader);
        curl_close($curl2);
       
    ?>


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

        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/newbg.webp" alt=""
            class="d-none d-md-block w-100 main-bg">

    </section>
    <!-- Banner -->
    <?php if($up_flag == 1){ ?>
    <div class="livematch">
        <div class="livematch-container">
            <div class="livematchlabel">
                Live match
            </div>
            <div class="d-flex justify-content-between align-items-center p-3 p-md-0">
                <div class="stadium">
                    <div class="stadiumnamelable" style="color: #606061;">Location</div>
                    <div class="stadiumname">
                        <?php echo $live_score['data'][0]['ground_name']; ?>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-column flex-md-row ovhjuhjh">
                    <img src="<?php echo $live_score['data'][0]['team_a_logo']; ?>"
                        alt="" class="liveteam1">
                    <div class="liveversus">
                        <div>
                            <span>
                                <?php echo $live_score['data'][0]['team_a_summary']?>
                            </span>
                            <span>
                                <?php echo $live_score['data'][0]['team_a_innings'][0]['summary']['over']?>
                            </span>
                        </div>
                        <div>
                            <span>
                            <?php echo $live_score['data'][0]['team_b_summary']?>
                            </span>
                            <span>
                                <?php echo $live_score['data'][0]['team_b_innings'][0]['summary']['over']?>
                            </span>
                        </div>
                    </div>
                    <img src="<?php echo $live_score['data'][0]['team_b_logo']; ?>"
                        alt="" class="liveteam2">
                </div>
            </div>
            <a href="#" class="orange-button">View More</a>
        </div>
    </div>
    <?php } ?>
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
                        <img src="<?php echo $batting_leader['data'][0]['profile_photo']; ?>"
                            alt="" class="cap-image">
                    </div>
                    <div class="cap-title">
                        ORANGE CAP HOLDER
                    </div>
                    <div class="cap-player-name">
                    <?php echo $batting_leader['data'][0]['name'] ?>;
                    </div>

                    <div class="d-flex justify-content-center capscores">
                        <span>
                            <div class="cap-run"><?php echo $batting_leader['data'][0]['total_runs'] ?></div>
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
                            <div class="cap-run"><?php echo $batting_leader['data'][0]['total_match'] ?></div>
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
                            <div class="cap-run"><?php echo $batting_leader['data'][0]['average'] ?></div>
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
                        <img src="<?php echo $bowling_leader['data'][0]['profile_photo']; ?>"
                            alt="" class="cap-image">
                    </div>
                    <div class="cap-title">
                        Purple CAP HOLDER
                    </div>
                    <div class="cap-player-name">
                    <?php echo $bowling_leader['data'][0]['name']; ?>
                    </div>

                    <div class="d-flex justify-content-center capscores">
                        <span>
                            <div class="cap-run"><?php echo $bowling_leader['data'][0]['total_wickets']; ?></div>
                            <div class="cap-label">
                                Wickets
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
                            <div class="cap-run"><?php echo $bowling_leader['data'][0]['total_match']; ?></div>
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
                            <div class="cap-run"><?php echo $bowling_leader['data'][0]['avg']; ?></div>
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
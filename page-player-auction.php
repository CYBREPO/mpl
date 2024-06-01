<?php
/*
 * Template Name: Players auction
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>


<main>

    <?php include 'components/page-title-header.php';?>
<style>
    .content2{
        display: none;
    }
</style>
    <!-- Banner -->
    <div class="auctionsection text-white">
        <div class="container">
            <ul class="nav auction-nav-tabs" id="auction" role="tablist">
                <li class="" role="presentation">
                    <button class=" active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">2023</button>
                </li>
                <li class="" role="presentation">
                    <button class="" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                        type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">2024</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php if (have_rows("player_auction")):
                        while (have_rows("player_auction")):
                             the_row(); ?>
             
             




           



             <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="section-title">
                    <?php the_sub_field("player_auction_year"); ?> Player Auction
                    </div>
                    <p class="text-center mt-3 mb-5" style="font-family: Rubik;">  <?php the_sub_field("player_auction_description"); ?></p>

                    <div class="row justify-content-between pt-4">
                        <div class="col-md-5 text-start">
                            <div class="section-title text-start">
                            <?php the_sub_field("player_auction_title"); ?>

                            </div>
                            <div class="fs-32 playervalue">
                            <?php the_sub_field("player_auction_subtitle"); ?>
                            </div>
                            <div class="d-flex align-items-center auctionplayerdteails">
                                <img src="<?php the_sub_field("team_image"); ?>"
                                    alt="" class="img-fluid me-3 me-md-5 aucttteamimage">
                                <div class="fs-24" style="font-family: Rubik;">
                                    <div>   <?php the_sub_field("team_player_name"); ?></div>
                                    <div>   <?php the_sub_field("team_player_worth"); ?></div>
                                </div>
                            </div>

                            <div class="aution-details">
                                <div>
                                    <div class="fs-24" style="font-family: Koulen;">
                                    <?php the_sub_field("players_sold"); ?>
                                    </div>
                                    <div class="fs-14">
                                        Players sold
                                    </div>
                                </div>
                                <div>
                                    <div class="fs-24" style="font-family: Koulen;"><?php the_sub_field("overseas_players"); ?></div>
                                    <div class="fs-14">Overseas Players</div>
                                </div>
                                <div>
                                    <div class="fs-24" style="font-family: Koulen;"><?php the_sub_field("total_spent"); ?></div>
                                    <div class="fs-14">Total Spent</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 pb-5 pb-md-0">
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>
                    </div>


                </div>















                <?php endwhile;  
                        endif; ?>
          
            </div>





        </div>
    </div>
    <div class="auction-stats bg-light">
        <div class="section-title">
            STATS
        </div>
        <div class="container">
            <div class="row mx-auto w-100">

            <?php if (have_rows("stats_team")):
                        while (have_rows("stats_team")):
                             the_row(); ?>
             
                <div class="col-md-2">
                    <div class="agv-main w-100" style="border: 1.499px solid <?php the_sub_field("team_color_border"); ?>; background: <?php the_sub_field("team_color"); ?>">
                        <div class="agv-team-logo"><img
                                src="<?php the_sub_field("stats_team_image"); ?>"
                                alt=""></div>
                        <div class="agv-team-name"><?php the_sub_field("stats_team_text"); ?></div>
                        <div class="avg-bottom">

                            <div class="fr-name">Funds Remaining</div>
                            <div class="fr-fund"><?php the_sub_field("funds_remaining"); ?></div>

                            <div class="fr-name">Total Players</div>
                            <div class="fr-fund"><?php the_sub_field("total_players"); ?></div>
                        </div>
                    </div>
                </div>

                <?php endwhile;  
                        endif; ?>
            </div>
        </div>
    </div>

    <div class="stats-gallery bg-white">
        <div class="container">
            <div class="section-title">
                PLAYER AUCTION
            </div>
            <div class="gallerystats row">
            <?php if (have_rows("gallery")):
                        while (have_rows("gallery")):
                             the_row(); ?>
                <div class="col-md-3 mt-4 content2"><a
                        href="<?php the_sub_field("gallery_image"); ?>"
                        class="glightbox w-100" data-glightbox="type: image">
                        <img src="<?php the_sub_field("gallery_image"); ?>"
                            alt="image" /></a></div>
              
                            <?php endwhile;  
                        endif; ?>
            </div>


            <a href="#" class="loadmorebutton">
                LOAD MORE
            </a>
        </div>
    </div>
</main>

<?php get_footer("footer2"); ?>
<?php
/*
 * Template Name: Stats
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>

<main class="bg-white">
    <div class="stats-banner stats-banner2">


        <div class="stats-details">
            <div class="container">
                <div class="bread-crumb d-md-none text-center pt-4">
                    hOME | sTATS
                </div>
                <div class="statsplayer">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/rohitfull.png" alt="">
                </div>

                <div class="theplayersstats">
                    <div class="bread-crumb d-none d-md-block">
                        hOME | sTATS
                    </div>
                    <div class="playername">
                        Rohit Sharma
                    </div>

                    <div class="statstable">
                        <div>
                            <div class="statsnumb">261</div>
                            <div class="statstext">RUNS
                            </div>
                        </div>
                        <div>
                            <div class="statsnumb">261</div>
                            <div class="statstext">Matches</div>
                        </div>
                        <div>
                            <div class="statsnumb">261</div>
                            <div class="statstext">Average</div>
                        </div>
                        <div>
                            <div class="statsnumb">261</div>
                            <div class="statstext">Strike Rate</div>
                        </div>
                        <div>
                            <div class="statsnumb">261</div>
                            <div class="statstext">Hs. Score</div>
                        </div>
                        <div>
                            <div class="statsnumb">261</div>
                            <div class="statstext">50s/100s</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Banner -->
    <div class="fixtures">
        <div class="container">


            <ul class="nav custom-nav-tabs" id="stats" role="tablist">
                <li class="" role="presentation">
                    <button class=" active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Players</button>
                </li>
                <li class="" role="presentation">
                    <button class="" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                        type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                        Seasons & Teams</button>
                </li>
                <li class="" role="presentation">
                    <button class="" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                        type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                        Records</button>
                </li>
                <li class="" role="presentation">
                    <button class="" id="Table-tab" data-bs-toggle="tab" data-bs-target="#Table-tab-pane" type="button"
                        role="tab" aria-controls="Table-tab-pane" aria-selected="false">
                        Table</button>
                </li>

            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">

                    <div class="d-md-flex align-items-center justify-content-between">
                        <div class="dropdown my-3 my-md-5">
                            <button class="btn btn-secondary dropdown-toggle bg-white" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Batter
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="dropdown my-3 my-md-5">
                            <button class="btn btn-secondary dropdown-toggle bg-white" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                orang cap
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="dropdown my-3 my-md-5">
                            <button class="btn btn-secondary dropdown-toggle bg-white" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                All teams
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="dropdown my-3 my-md-5">
                            <button class="btn btn-secondary dropdown-toggle bg-white" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                ALL PLAYERS
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <form action="">
                            <div class="search">
                                <input type="text" placeholder="&#xF002; &nbsp; Search by player name"
                                    style="font-family:Arial, FontAwesome" />
                            </div>
                        </form>

                    </div>
                    <div class="table-responsive mb-4">
                        <table width="100%" class="ih-td-tab">
                            <tbody>
                                <tr class="ih-pt-tbl" style="display:revert;">
                                    <th>POs</th>
                                    <th style="text-align: left;">Batters</th>
                                    <th>M4</th>
                                    <th>M4 Inns</th>
                                    <th>M6</th>
                                    <th>M6 Inns</th>
                                    <th>50</th>
                                    <th>100</th>
                                    <th>F-50</th>
                                    <th>F-100</th>
                                    <th>HS</th>
                                    <th>SR</th>
                                    <th>SR inns</th>
                                    <th>AVG</th>
                                </tr>
                            </tbody>
                            <tbody id="pointsdata">
                                <tr class="team0 ">

                                    <td class="table-qualified  ">1 </td>
                                    <td class="ih-t-color">
                                        <div class="ih-pt-ic ">
                                            <div class="ih-pt-img"> <img alt=""
                                                    src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/rohit.png">
                                            </div>
                                            <div class="text-start ">
                                                <h2 class="ih-pt-cont mb-0 text-black fw-400">Rohit Sharma</h2>
                                                <h2 class="ih-pt-cont mb-0 fw-400">RR</h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td>35</td>
                                    <td>35</td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>105*</td>
                                    <td>167.30</td>
                                    <td>167.30</td>
                                    <td>52.20</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">...</div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                    tabindex="0">...</div>
                <div class="tab-pane fade" id="Table-tab-pane" role="tabpanel" aria-labelledby="Table-tab" tabindex="0">
                    ...</div>
            </div>



            <div class="orange-cap-holder">
                <div class="orange-cap-internal"
                    style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/newassets/images/orangecapholdlerimage.png);">
                    <div class="d-flex ">
                        <div class="capplayerimage">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/individualplayer.png"
                                alt="" class="">
                        </div>
                        <div class="cap-details-side">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/orangecap.svg"
                                alt="" class="orangecap">
                            <div class="captitle">
                                ORANGE CAP HOLDER
                            </div>
                            <div class="cap-player-name">
                                Rohit Sharma
                            </div>
                            <div class="d-flex" style="font-family: Koulen;">
                                <span class="me-5">
                                    <div class="cap-run">251</div>
                                    <div class="cap-label">
                                        Runs
                                    </div>
                                </span>

                                <span class="me-5">
                                    <div class="cap-run">8</div>
                                    <div class="cap-label">
                                        matches
                                    </div>
                                </span>

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

            </div>




            <div class="purple-cap-holder">
                <div class="purple-cap-internal"
                    style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/newassets/images/purplecapholdlerimage.png);">
                    <div class="d-flex justify-content-end">

                        <div class="cap-details-side">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/purplecap.svg"
                                alt="" class="orangecap">
                            <div class="captitle">
                                PURPLE CAP HOLDER
                            </div>
                            <div class="cap-player-name">
                                Jasprit Bumrah
                            </div>
                            <div class="d-flex" style="font-family: Koulen;">
                                <span class="me-5">
                                    <div class="cap-run">251</div>
                                    <div class="cap-label">
                                        Runs
                                    </div>
                                </span>

                                <span class="me-5">
                                    <div class="cap-run">8</div>
                                    <div class="cap-label">
                                        matches
                                    </div>
                                </span>

                                <span>
                                    <div class="cap-run">52.20</div>
                                    <div class="cap-label">
                                        Average
                                    </div>
                                </span>
                            </div>
                        </div>



                        <div class="capplayerimage">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/individualplayer.png"
                                alt="" class="">
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </div>
</main>


<?php get_footer("footer2"); ?>
<?php
/*
 * Template Name: Stats
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>

 
<?php 


        try {
            // $data='';
            // $d = [];
            // $curl = curl_init();
            // curl_setopt_array($curl, array(
            //   CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-tournament-batting-leaderboard/702687',
            //   CURLOPT_RETURNTRANSFER => true,
            //   CURLOPT_ENCODING => '',
            //   CURLOPT_MAXREDIRS => 10,
            //   CURLOPT_TIMEOUT => 0,
            //   CURLOPT_FOLLOWLOCATION => true,
            //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //   CURLOPT_CUSTOMREQUEST => 'GET',
            //   CURLOPT_HTTPHEADER => array(
            //     'Content-Type: application/json',
            //     'api-key: 7d313d7c02c39e21dc4abee42760c8f3',
            //     'secret_access_key: o5LgzLbpIb-e60b-11e7-mSJcQWyxHf-3de7cd8c6cf4',
            //     'udid: 8817480565574762',
            //     'device-type: thirdparty-mpl',
            //     'master_key: 45632789202',
            //     'Cookie: connect.sid=s%3ApOKpq6TM9Ez-EUAHW9aY8kuGn1HsHm9h.e0Kix5fgKITBPbFe57REWStVOCF8K1%2FfCFsU2AoLgyc'
            //   ),
            // ));
            
            // $response = curl_exec($curl);
            // $batting_leader_board =  json_decode($response,true);


            // $data='';
            // $d = [];
            // $curl = curl_init();
            // curl_setopt_array($curl, array(
            //   CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-tournament-bowling-leaderboard/702687',
            //   CURLOPT_RETURNTRANSFER => true,
            //   CURLOPT_ENCODING => '',
            //   CURLOPT_MAXREDIRS => 10,
            //   CURLOPT_TIMEOUT => 0,
            //   CURLOPT_FOLLOWLOCATION => true,
            //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //   CURLOPT_CUSTOMREQUEST => 'GET',
            //   CURLOPT_HTTPHEADER => array(
            //     'Content-Type: application/json',
            //     'api-key: 7d313d7c02c39e21dc4abee42760c8f3',
            //     'secret_access_key: o5LgzLbpIb-e60b-11e7-mSJcQWyxHf-3de7cd8c6cf4',
            //     'udid: 8817480565574762',
            //     'device-type: thirdparty-mpl',
            //     'master_key: 45632789202',
            //     'Cookie: connect.sid=s%3ApOKpq6TM9Ez-EUAHW9aY8kuGn1HsHm9h.e0Kix5fgKITBPbFe57REWStVOCF8K1%2FfCFsU2AoLgyc'
            //   ),
            // ));
            
            // $response = curl_exec($curl);
            // $bowling_leader_board =  json_decode($response,true);


          
            $curl2 = curl_init();
            curl_setopt_array($curl2, array(
              CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-tournament-stat-leaderboard-filter/702687',
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
            $filters =  json_decode($response2,true);
            
            foreach($filters['data']['season'] as $k){
                $batting_leader_board = getOrange($k['value']);
                $bowling_leader_board = getPurple($k['value']);
                $season = $k['key'];
                if($batting_leader_board['status'] != '' && $bowling_leader_board['status'] != ''){
                    $batting_leader_board = getOrange($k['value']);
                    $bowling_leader_board = getPurple($k['value']);
                    break;
                }
            }
        }
          catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
      
        // echo "<pre>";
        // print_r($points_table);
        // curl_close($curl);
       
?>
<main class="bg-white">
    <div class="stats-banner stats-banner2" id="battingStats">


        <div class="stats-details">
            <div class="container">
                <div class="bread-crumb d-md-none text-center pt-4">
                    hOME | sTATS
                </div>
                <div class="statsplayer">
                    <img src="<?php echo $batting_leader_board['data'][0]['profile_photo']; ?>" alt="">
                </div>

                <div class="theplayersstats">
                    <div class="bread-crumb d-none d-md-block">
                        hOME | sTATS
                    </div>
                    <div class="playername">
                        <?php echo $batting_leader_board['data'][0]['name']; ?>
                        <!-- Rohit Sharma -->
                    </div>

                    <div class="statstable">
                        <div>
                            <div class="statsnumb"><?php echo $batting_leader_board['data'][0]['total_runs']; ?></div>
                            <div class="statstext">RUNS
                            </div>
                        </div>
                        <div>
                            <div class="statsnumb"><?php echo $batting_leader_board['data'][0]['total_match']; ?></div>
                            <div class="statstext">Matches</div>
                        </div>
                        <div>
                            <div class="statsnumb"><?php echo $batting_leader_board['data'][0]['average']; ?></div>
                            <div class="statstext">Average</div>
                        </div>
                        <div>
                            <div class="statsnumb"><?php echo $batting_leader_board['data'][0]['strike_rate']; ?></div>
                            <div class="statstext">Strike Rate</div>
                        </div>
                        <div>
                            <div class="statsnumb"><?php echo $batting_leader_board['data'][0]['highest_run']; ?></div>
                            <div class="statstext">Hs. Score</div>
                        </div>
                        <div>
                            <div class="statsnumb">
                                <?php echo $batting_leader_board['data'][0]['50s'].'/'.$batting_leader_board['data'][0]['100s']; ?>
                            </div>
                            <div class="statstext">50s/100s</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="stats-banner stats-banner2" id="bowlingStats">
        <div class="stats-details">
            <div class="container">
                <div class="bread-crumb d-md-none text-center pt-4">
                    hOME | sTATS
                </div>
                <div class="statsplayer">
                    <img src="<?php echo $bowling_leader_board['data'][0]['profile_photo']; ?>" alt="">
                </div>

                <div class="theplayersstats">
                    <div class="bread-crumb d-none d-md-block">
                        hOME | sTATS
                    </div>
                    <div class="playername">
                        <?php echo $bowling_leader_board['data'][0]['name']; ?>
                        <!-- Rohit Sharma -->
                    </div>

                    <div class="statstable">
                        <div>
                            <div class="statsnumb"><?php echo $bowling_leader_board['data'][0]['total_wickets']; ?>
                            </div>
                            <div class="statstext">Wickets
                            </div>
                        </div>
                        <div>
                            <div class="statsnumb"><?php echo $bowling_leader_board['data'][0]['total_match']; ?></div>
                            <div class="statstext">Matches</div>
                        </div>
                        <div>
                            <div class="statsnumb"><?php echo $bowling_leader_board['data'][0]['economy']; ?></div>
                            <div class="statstext">Economy Rate</div>
                        </div>
                        <div>
                            <div class="statsnumb"><?php echo $bowling_leader_board['data'][0]['maidens']; ?></div>
                            <div class="statstext">Madiens</div>
                        </div>
                        <div>
                            <div class="statsnumb">0</div>
                            <div class="statstext">BBI</div>
                        </div>
                        <div>
                            <div class="statsnumb">
                                <?php echo $bowling_leader_board['data'][0]['4_wickets'].'/'. $bowling_leader_board['data'][0]['5_wickets']; ?>0/0
                            </div>
                            <div class="statstext">4Ws/5Ws</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="stats-banner stats-banner2" id="battingInngStats">
        <div class="stats-details">
            <div class="container">
                <div class="bread-crumb d-md-none text-center pt-4">
                    hOME | sTATS
                </div>
                <div class="statsplayer">
                    <img src="<?php echo $batting_leader_board['data'][0]['profile_photo']; ?>" alt="">
                </div>

                <div class="theplayersstats">
                    <div class="bread-crumb d-none d-md-block">
                        hOME | sTATS
                    </div>
                    <div class="playername">
                        <?php echo $batting_leader_board['data'][0]['name']; ?>
                        <!-- Rohit Sharma -->
                    </div>

                    <div class="statstable">
                        <div>
                            <div class="statsnumb"><?php echo $batting_leader_board['data'][0]['total_runs']; ?></div>
                            <div class="statstext">Runs
                            </div>
                        </div>
                        <div>
                            <div class="statsnumb">1</div>
                            <div class="statstext">Matches</div>
                        </div>
                        <div>
                            <div class="statsnumb"><?php echo $batting_leader_board['data'][0]['strike_rate']; ?></div>
                            <div class="statstext">Strike Rate</div>
                        </div>
                        <div>
                            <div class="statsnumb"><?php echo $batting_leader_board['data'][0]['highest_run']; ?></div>
                            <div class="statstext">Highest Score</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="stats-banner stats-banner2" id="bowlingInngStats">
        <div class="stats-details">
            <div class="container">
                <div class="bread-crumb d-md-none text-center pt-4">
                    hOME | sTATS
                </div>
                <div class="statsplayer">
                    <img src="<?php echo $bowling_leader_board['data'][0]['profile_photo']; ?>" alt="">
                </div>

                <div class="theplayersstats">
                    <div class="bread-crumb d-none d-md-block">
                        hOME | sTATS
                    </div>
                    <div class="playername">
                        <?php echo $bowling_leader_board['data'][0]['name']; ?>
                        <!-- Rohit Sharma -->
                    </div>

                    <div class="statstable">
                        <div>
                            <div class="statsnumb"></div>
                            <div class="statstext">OV
                            </div>
                        </div>
                        <div>
                            <div class="statsnumb">1</div>
                            <div class="statstext">Runs</div>
                        </div>
                        <div>
                            <div class="statsnumb"></div>
                            <div class="statstext">WKTS</div>
                        </div>
                        <div>
                            <div class="statsnumb"></div>
                            <div class="statstext">DOTS BALLS</div>
                        </div>
                        <div>
                            <div class="statsnumb"></div>
                            <div class="statstext">ECONOMY RATE</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <!-- Banner -->
    <div class="fixtures pb-0 pb-md-3">
        <div class="container p-0">

            <div class="tab-content px-2" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">

                    <div class="d-md-flex align-items-center">
                        <div class="dropdown me-md-3 my-3 my-md-5">
                            <button class="btn btn-secondary dropdown-toggle bg-white" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false" id="SeasonDropdown">
                                <?php echo $season;?>
                            </button>
                            <ul class="dropdown-menu">
                                <?php foreach($filters['data']['season'] as $k) { if($k['value'] != -1){?>
                                <li><a class="dropdown-item" href=""
                                        data-value="<?php echo $k['value'];?>"><?php echo $k['key']; ?></a></li>
                                <?php }} ?>
                            </ul>
                        </div>
                        <div class="dropdown me-md-3 my-3 my-md-5">
                            <button class="btn btn-secondary dropdown-toggle bg-white" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false" id="orangCapDropdown">
                                orange cap
                            </button>
                            <ul class="dropdown-menu">


                                <?php foreach($filters['data']['batting'] as $k) { if($k['value'] != -1 && $k['key'] != 'Angel One Super Sixes of the Season' && $k['key'] != 'RuPay On-The-Go 4s of the Season' && $k['key'] != 'Punch.ev Electric Striker of the Season'){?>
                                <li><a class="dropdown-item" href="" data-value="<?php echo $k['value'];?>"
                                        data-url="<?php echo $k['url'];?>"><?php echo $k['key']; ?></a></li>
                                <?php }} ?>

                                <?php foreach($filters['data']['bowling'] as $k) { if($k['value'] != -1){?>
                                <li><a class="dropdown-item" href="" data-value="<?php echo $k['value'];?>"
                                        data-url="<?php echo $k['url'];?>"><?php echo $k['key']; ?></a></li>
                                <?php }} ?>
                            </ul>
                        </div>
                        <div class="dropdown me-md-3 my-3 my-md-5">
                            <button class="btn btn-secondary dropdown-toggle bg-white" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false" id="teamsDropdown">
                                All teams
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="" data-value="All teams">All teams</a></li>
                                <?php foreach($filters['data']['teams'] as $k) { ?>
                                <li><a class="dropdown-item" href=""
                                        data-value="<?php echo $k['team_id'];?>"><?php echo $k['team_name']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <form action="" class="my-3 my-md-0">
                            <div class="search">
                                <input type="text" placeholder="&#xF002; &nbsp; Search by player name"
                                    style="font-family:Arial, FontAwesome" id="playerSearch" />
                            </div>
                        </form>
                    </div>
                    <!-- Batting stats table -->
                    <div class="table-responsive mb-4" id="BattingStatsTable">
                        <table width="100%" class="ih-td-tab">
                            <tbody>
                                <tr class="ih-pt-tbl" style="display:revert;">
                                    <th>POs</th>
                                    <th style="text-align: left;">BATTERS</th>
                                    <th>MAT</th>
                                    <th>INNS</th>
                                    <th>4S</th>
                                    <th>6S</th>
                                    <th>50</th>
                                    <th>100</th>
                                    <th>RUNS</th>
                                    <th>HS</th>
                                    <th>SR</th>
                                    <th>AVG</th>
                                </tr>
                            </tbody>
                            <tbody id="pointsdata">
                                <?php foreach($batting_leader_board['data'] as $index => $values){?>
                                <tr class="team" <?php echo $index; ?>>

                                    <td class="table-qualified  "><?php echo $index + 1; ?> </td>
                                    <td class="ih-t-color">
                                        <div class="ih-pt-ic ">
                                            <div class="ih-pt-img"> <img alt=""
                                                    src="<?php echo $values['profile_photo']; ?>">
                                            </div>
                                            <div class="text-start ">
                                                <h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">
                                                    <?php echo $values['name']; ?></h2>
                                                <h2 class="ih-pt-cont mb-0 fw-400"><?php echo $values['team_name']; ?>
                                                </h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo $values['total_match']; ?></td>
                                    <td><?php echo $values['innings']; ?></td>
                                    <td><?php echo $values['4s']; ?></td>
                                    <td><?php echo $values['6s']; ?></td>
                                    <td><?php echo $values['50s']; ?></td>
                                    <td><?php echo $values['100s']; ?></td>
                                    <td><?php echo $values['total_runs']; ?></td>
                                    <td><?php echo $values['highest_run']; ?></td>
                                    <td><?php echo $values['strike_rate']; ?></td>
                                    <td><?php echo $values['average']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Bowling stats table-->
                    <div class="table-responsive mb-4" id="BowlingStatsTable">
                        <table width="100%" class="ih-td-tab">
                            <tbody>
                                <tr class="ih-pt-tbl" style="display:revert;">
                                    <th>POs</th>
                                    <th style="text-align: left;">BOWLERS</th>
                                    <th>MAT</th>
                                    <th>INNS</th>
                                    <th>OV</th>
                                    <th>RUNS</th>
                                    <th>WKTS</th>
                                    <th>BBI</th>
                                    <th>AVG</th>
                                    <th>ECON</th>
                                    <th>SR</th>
                                    <th>4W</th>
                                    <th>5W</th>
                                </tr>
                            </tbody>
                            <tbody id="pointsdatabowling">
                                <?php foreach($bowling_leader_board['data'] as $index => $values){?>
                                <tr class="team" <?php echo $index; ?>>

                                    <td class="table-qualified  "><?php echo $index + 1; ?> </td>
                                    <td class="ih-t-color">
                                        <div class="ih-pt-ic ">
                                            <div class="ih-pt-img"> <img alt=""
                                                    src="<?php echo $values['profile_photo']; ?>">
                                            </div>
                                            <div class="text-start ">
                                                <h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">
                                                    <?php echo $values['name']; ?></h2>
                                                <h2 class="ih-pt-cont mb-0 fw-400"><?php echo $values['team_name']; ?>
                                                </h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo $values['total_match']; ?></td>
                                    <td><?php echo $values['innings']; ?></td>
                                    <td><?php echo $values['overs']; ?></td>
                                    <td><?php echo $values['runs']; ?></td>
                                    <td><?php echo $values['total_wickets']; ?></td>
                                    <td>0</td>
                                    <td><?php echo $values['avg']; ?></td>
                                    <td><?php echo $values['economy']; ?></td>
                                    <td><?php echo $values['SR']; ?></td>
                                    <td><?php echo $values['4_wickets']; ?></td>
                                    <td><?php echo $values['5_wickets']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Best Batting Inning -->
                    <div class="table-responsive mb-4" id="BattingInningStatsTable">
                        <table width="100%" class="ih-td-tab">
                            <tbody>
                                <tr class="ih-pt-tbl" style="display:revert;">
                                    <th>POs</th>
                                    <th style="text-align: left;">BATTERS</th>
                                    <th>RUNS</th>
                                    <th>SR</th>
                                    <th>4S</th>
                                    <th>6S</th>
                                    <th>AGAINTS</th>
                                    <th>VENUE</th>
                                    <th>MATCH DATE</th>
                                </tr>
                            </tbody>
                            <tbody id="pointsdatainningsBatting">
                                <?php foreach($batting_leader_board['data'] as $index => $values){?>
                                <tr class="team" <?php echo $index; ?>>

                                    <td class="table-qualified  "><?php echo $index + 1; ?> </td>
                                    <td class="ih-t-color">
                                        <div class="ih-pt-ic ">
                                            <div class="ih-pt-img"> <img alt=""
                                                    src="<?php echo $values['profile_photo']; ?>">
                                            </div>
                                            <div class="text-start ">
                                                <h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">
                                                    <?php echo $values['name']; ?></h2>
                                                <h2 class="ih-pt-cont mb-0 fw-400"><?php echo $values['team_name']; ?>
                                                </h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo $values['total_runs']; ?></td>
                                    <td><?php echo $values['strike_rate']; ?></td>
                                    <td><?php echo $values['4s']; ?></td>
                                    <td><?php echo $values['6s']; ?></td>
                                    <td><?php echo $values['against_team_name']; ?></td>
                                    <td><?php echo $values['against_team_name']; ?></td>
                                    <td><?php echo $values['match_date']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Best Bowling Inning -->
                    <div class="table-responsive mb-4" id="BowlingInningStatsTable">
                        <table width="100%" class="ih-td-tab">
                            <tbody>
                                <tr class="ih-pt-tbl" style="display:revert;">
                                    <th>POs</th>
                                    <th style="text-align: left;">BOWLER</th>
                                    <th>OV</th>
                                    <th>RUNS</th>
                                    <th>WKTS</th>
                                    <th>DOTS</th>
                                    <th>SR</th>
                                    <th>AGAINTS</th>
                                    <th>VENUE</th>
                                    <th>MATCH DATE</th>
                                </tr>
                            </tbody>
                            <style>
                            .whitespacewrap .ih-td-tab,
                            .whitespacewrap td,
                            .whitespacewrap th {
                                white-space: pre-wrap;
                                font-size: 13px;

                            }
                            </style>
                            <tbody id="pointsdatainningsBowling" class="whitespacewrap">
                                <?php foreach($bowling_leader_board['data'] as $index => $values){?>
                                <tr class="team" <?php echo $index; ?>>

                                    <td class="table-qualified  "><?php echo $index + 1; ?> </td>
                                    <td class="ih-t-color">
                                        <div class="ih-pt-ic ">
                                            <div class="ih-pt-img"> <img alt=""
                                                    src="<?php echo $values['profile_photo']; ?>">
                                            </div>
                                            <div class="text-start ">
                                                <h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">
                                                    <?php echo $values['name']; ?></h2>
                                                <h2 class="ih-pt-cont mb-0 fw-400"><?php echo $values['team_name']; ?>
                                                </h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php } ?>
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

            <div class="mobile-caps d-md-none" style="background: linear-gradient(90deg, #260531 0%, #E04413 100%);">
                <div class="mobile-orange-cap-holder">
                    <img src="<?php echo $batting_leader_board['data'][0]['profile_photo']; ?>" alt="" class="w-100"
                        id="photo_orange" style="clip-path: polygon(24% 0%, 74% 0%, 100% 22%, 100% 75%, 75% 100%, 30% 108%, 0% 79%, 0% 23%);
    width: 168.028px !important;
    height: 172.829px;
    object-fit: cover;
    margin: auto;
    display: block;">
                    <div class="cap-details-side text-white">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/orangecap.svg"
                            alt="" class="orangecap" style="    width: 95px;
    height: 72px;">
                        <div class="captitle text-white" style>
                            ORANGE CAP HOLDER
                        </div>
                        <div class="cap-player-name" id="o_player_name">
                            <?php echo $batting_leader_board['data'][0]['name']; ?>
                        </div>
                        <div class="d-flex" style="font-family: Koulen;">
                            <span class="me-5">
                                <div class="cap-run" id="o_to_run">
                                    <?php echo $batting_leader_board['data'][0]['total_runs']; ?>
                                </div>
                                <div class="cap-label">
                                    Runs
                                </div>
                            </span>

                            <span class="me-5">
                                <div class="cap-run" id="o_to_match">
                                    <?php echo $batting_leader_board['data'][0]['total_match']; ?>
                                </div>
                                <div class="cap-label">
                                    matches
                                </div>
                            </span>

                            <span>
                                <div class="cap-run" id="o_to_avg">
                                    <?php echo $batting_leader_board['data'][0]['average']; ?>
                                </div>
                                <div class="cap-label">
                                    Average
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-caps d-md-none" style="background: linear-gradient(-90deg, #260531 0%, #E04413 100%);margin-top:-20px;">
                <div class="mobile-orange-cap-holder">
                    <img src="<?php echo $batting_leader_board['data'][0]['profile_photo']; ?>" alt="" class="w-100"
                        id="photo_orange" style="clip-path: polygon(24% 0%, 74% 0%, 100% 22%, 100% 75%, 75% 100%, 30% 108%, 0% 79%, 0% 23%);
    width: 168.028px !important;
    height: 172.829px;
    object-fit: cover;
    margin: auto;
    display: block;">
                    <div class="cap-details-side">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/purplecap.svg"
                                alt="" class="orangecap" style="    width: 95px;
    height: 72px;">
                            <div class="captitle">
                                PURPLE CAP HOLDER
                            </div>
                            <div class="cap-player-name" id="p_player">
                                <?php echo $bowling_leader_board['data'][0]['name'] ?>
                            </div>
                            <div class="d-flex" style="font-family: Koulen;">
                                <span class="me-5">
                                    <div class="cap-run" id="p_wickets">
                                        <?php echo $bowling_leader_board['data'][0]['total_wickets']; ?></div>
                                    <div class="cap-label">
                                        Wickets
                                    </div>
                                </span>

                                <span class="me-5">
                                    <div class="cap-run" id="p_match">
                                        <?php echo $bowling_leader_board['data'][0]['total_match']; ?>
                                    </div>
                                    <div class="cap-label">
                                        Matches
                                    </div>
                                </span>

                                <span>
                                    <div class="cap-run" id="p_avg">
                                        <?php echo $bowling_leader_board['data'][0]['avg']; ?></div>
                                    <div class="cap-label">
                                        Average
                                    </div>
                                </span>
                            </div>
                        </div>
                </div>
            </div>
            <div class="orange-cap-holder d-none d-md-block">
                <div class="orange-cap-internal"
                    style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/newassets/images/orangecapholdlerimage.webp);">
                    <div class="d-flex ">
                        <div class="capplayerimage">
                            <img src="<?php echo $batting_leader_board['data'][0]['profile_photo']; ?>" alt="" class=""
                                id="photo_orange">
                        </div>
                        <div class="cap-details-side">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/orangecap.svg"
                                alt="" class="orangecap">
                            <div class="captitle">
                                ORANGE CAP HOLDER
                            </div>
                            <div class="cap-player-name" id="o_player_name">
                                <?php echo $batting_leader_board['data'][0]['name']; ?>
                            </div>
                            <div class="d-flex" style="font-family: Koulen;">
                                <span class="me-5">
                                    <div class="cap-run" id="o_to_run">
                                        <?php echo $batting_leader_board['data'][0]['total_runs']; ?>
                                    </div>
                                    <div class="cap-label">
                                        Runs
                                    </div>
                                </span>

                                <span class="me-5">
                                    <div class="cap-run" id="o_to_match">
                                        <?php echo $batting_leader_board['data'][0]['total_match']; ?>
                                    </div>
                                    <div class="cap-label">
                                        matches
                                    </div>
                                </span>

                                <span>
                                    <div class="cap-run" id="o_to_avg">
                                        <?php echo $batting_leader_board['data'][0]['average']; ?>
                                    </div>
                                    <div class="cap-label">
                                        Average
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>




            <div class="purple-cap-holder d-none d-md-block">
                <div class="purple-cap-internal"
                    style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/newassets/images/purplecapholdlerimage.webp);">
                    <div class="d-flex justify-content-end">

                        <div class="cap-details-side">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/purplecap.svg"
                                alt="" class="orangecap">
                            <div class="captitle">
                                PURPLE CAP HOLDER
                            </div>
                            <div class="cap-player-name" id="p_player">
                                <?php echo $bowling_leader_board['data'][0]['name'] ?>
                            </div>
                            <div class="d-flex" style="font-family: Koulen;">
                                <span class="me-5">
                                    <div class="cap-run" id="p_wickets">
                                        <?php echo $bowling_leader_board['data'][0]['total_wickets']; ?></div>
                                    <div class="cap-label">
                                        Wickets
                                    </div>
                                </span>

                                <span class="me-5">
                                    <div class="cap-run" id="p_match">
                                        <?php echo $bowling_leader_board['data'][0]['total_match']; ?>
                                    </div>
                                    <div class="cap-label">
                                        Matches
                                    </div>
                                </span>

                                <span>
                                    <div class="cap-run" id="p_avg">
                                        <?php echo $bowling_leader_board['data'][0]['avg']; ?></div>
                                    <div class="cap-label">
                                        Average
                                    </div>
                                </span>
                            </div>
                        </div>



                        <div class="capplayerimage">
                            <img src="<?php echo $bowling_leader_board['data'][0]['profile_photo']; ?>" alt="" class=""
                                id="photo_purple">
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </div>





</main>


<?php get_footer("footer2"); ?>

<script>
$(document).ready(function() {
    //Stats to be hidden
    $("#bowlingStats").hide();
    $("#battingInngStats").hide();
    $("#bowlingInngStats").hide();

    //Table to be hidden
    $("#BowlingStatsTable").hide();
    $("#BattingInningStatsTable").hide();
    $("#BowlingInningStatsTable").hide();


    $('.dropdown-item').on('click', function(e) {
        e.preventDefault();
        var selectedValue = $(this).data('value');
        var selectedUrl = $(this).data('url');
        var dropdownButton = $(this).closest('.dropdown').find('.dropdown-toggle');
        dropdownButton.text($(this).text());
        dropdownButton.data('selected-value', selectedValue);
        dropdownButton.data('selected-url', selectedUrl);
        fetchData();

        // $('#playerSearch').on('input', function() {
        //     //fetchData();
        // });

    });

    function fetchData() {
        // Collect values from all filters
        var season = $('#SeasonDropdown').data('selected-value');
        var orangCap = $('#orangCapDropdown').data('selected-value');
        var selectedOrangeCap = $('#orangCapDropdown').data('selected-url');
        var teams = $('#teamsDropdown').text().trim();
        var players = $('#playersDropdown').text().trim();
        // var search = $('#playerSearch').val().trim();

        if (season == undefined) {
            season = 1029866;
        }

        console.log(season);
        console.log(orangCap);
        console.log(selectedOrangeCap);
        console.log(teams);
        console.log(players);
        // console.log(search);

        if (orangCap == 'WICKET' || orangCap == 'MMOVB' || orangCap == 'MODB' || orangCap == 'MIMDB' ||
            orangCap == 'MBAVG' || orangCap == 'MBECO' || orangCap == 'MIBBE' || orangCap == 'MBSR' ||
            orangCap == 'BB' || orangCap == 'MIMRC' || orangCap == 'MIBB') {
            if (teams == 'undefined' || teams == 'All teams') {
                getBowlingData(orangCap, selectedOrangeCap, season, teams);
            } else {
                getBowlingData(orangCap, selectedOrangeCap, season, teams);
            }

            // if(orangCap == 'MIMDB' || orangCap == 'MBAVG' || orangCap == 'MIBBE' || orangCap == 'MBSR'){
            //     fetch('https://mplt20.in/wp-json/custom-api/v1/mpl/getstats?tournamentId='+season+'&url='+selectedOrangeCap+'&value='+orangCap)
            //     .then(response => {
            //         if (!response.ok) {
            //             throw new Error('Network response was not ok');
            //         }
            //         return response.json();
            //         })
            //         .then(data => {

            //         //stats to be hidden 
            //         $("#battingStats").hide();
            //         $("#bowlingStats").hide();
            //         $("#battingInngStats").hide();

            //         //table to be hidden
            //         $("#BattingStatsTable").hide();
            //         $("#BowlingStatsTable").hide();
            //         $("#BattingInningStatsTable").hide();

            //         //ignore
            //         $('#pointsdatainningsBowling').empty();



            //         if(data.data.length > 0) {
            //         var firstBowler = data.data[0];
            //         $('#bowlingInngStats .statsplayer img').attr('src', firstBowler.profile_photo);
            //         $('#bowlingInngStats .playername').text(firstBowler.name);
            //         $('#bowlingInngStats .statstable div:nth-child(1) .statsnumb').text(firstBowler.overs);
            //         $('#bowlingInngStats .statstable div:nth-child(2) .statsnumb').text(firstBowler.total_match);
            //         $('#bowlingInngStats .statstable div:nth-child(3) .statsnumb').text(firstBowler.runs);
            //         $('#bowlingInngStats .statstable div:nth-child(4) .statsnumb').text(firstBowler.total_wickets);
            //         $('#bowlingInngStats .statstable div:nth-child(5) .statsnumb').text(firstBowler.dot_ball || '0'); // Assuming best_bowling field for BBI
            //         $('#bowlingInngStats .statstable div:nth-child(6) .statsnumb').text(firstBowler.economy); // Assuming 4w and 5w fields for 4Ws/5Ws
            //         }

            //         $("#bowlingInngStats").show();

            //         $.each(data.data, function(index, values) {

            //         var date = new Date(values['match_date']);
            //         var options = { day: 'numeric', month: 'long', year: 'numeric' };

            //         var formattedDate = date.toLocaleDateString('en-GB', options);
            //         var newRow = '<tr class="team">' +
            //             '<td class="table-qualified">' + (index + 1) + '</td>' +
            //             '<td class="ih-t-color">' +
            //                 '<div class="ih-pt-ic">' +
            //                     '<div class="ih-pt-img"><img alt="" src="' + values.profile_photo + '"></div>' +
            //                     '<div class="text-start">' +
            //                         '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' + values.name + '</h2>' +
            //                         '<h2 class="ih-pt-cont mb-0 fw-400">RR</h2>' +
            //                     '</div>' +
            //                 '</div>' +
            //             '</td>' +
            //             '<td>' + values.overs + '</td>' +
            //             '<td>' + values.runs + '</td>' +
            //             '<td>' + values.total_wickets + '</td>' +
            //             '<td>' + values.dot_ball + '</td>' +
            //             '<td>' + values.balls/values.total_wickets + '</td>' +
            //             '<td>' + values.against_team_name + '</td>' +
            //             '<td>' + values.against_team_name + '</td>' +
            //             '<td>' + formattedDate + '</td>' +
            //             '</tr>';
            //             $('#pointsdatainningsBowling').append(newRow);
            //         });

            //         $("#BowlingInningStatsTable").show();
            //         console.log('API call successful', data);
            //         })
            //         .catch(error => {
            //             // Handle any errors
            //             console.error('API call failed', error);
            //     });
            // }else{

            //     fetch('https://mplt20.in/wp-json/custom-api/v1/mpl/getstats?tournamentId='+season+'&url='+selectedOrangeCap+'&value='+orangCap)
            //     .then(response => {
            //         if (!response.ok) {
            //             throw new Error('Network response was not ok');
            //         }
            //         return response.json();
            //         })
            //         .then(data => {

            //         //stats to be hidden

            //         $("#battingStats").hide();
            //         $("#battingInngStats").hide();
            //         $("#bowlingInngStats").hide();

            //         // Table to be hidden
            //         $("#BattingStatsTable").hide();
            //         $("#BattingInningStatsTable").hide();
            //         $("#BowlingInningStatsTable").hide();

            //         //ignore
            //         $('#pointsdatabowling').empty();

            //         if(data.data.length > 0) {
            //         var firstBowler = data.data[0];
            //         $('#bowlingStats .statsplayer img').attr('src', firstBowler.profile_photo);
            //         $('#bowlingStats .playername').text(firstBowler.name);
            //         $('#bowlingStats .statstable div:nth-child(1) .statsnumb').text(firstBowler.total_wickets);
            //         $('#bowlingStats .statstable div:nth-child(2) .statsnumb').text(firstBowler.total_match);
            //         $('#bowlingStats .statstable div:nth-child(3) .statsnumb').text(firstBowler.economy);
            //         $('#bowlingStats .statstable div:nth-child(4) .statsnumb').text(firstBowler.maidens);
            //         $('#bowlingStats .statstable div:nth-child(5) .statsnumb').text(firstBowler.best_bowling || '0'); // Assuming best_bowling field for BBI
            //         $('#bowlingStats .statstable div:nth-child(6) .statsnumb').text((firstBowler['4w'] || '0') + '/' + (firstBowler['5w'] || '0')); // Assuming 4w and 5w fields for 4Ws/5Ws
            //         }

            //         $("#bowlingStats").show();

            //         $.each(data.data, function(index, values) {
            //         var newRow = '<tr class="team">' +
            //             '<td class="table-qualified">' + (index + 1) + '</td>' +
            //             '<td class="ih-t-color">' +
            //                 '<div class="ih-pt-ic">' +
            //                     '<div class="ih-pt-img"><img alt="" src="' + values.profile_photo + '"></div>' +
            //                     '<div class="text-start">' +
            //                         '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' + values.name + '</h2>' +
            //                         '<h2 class="ih-pt-cont mb-0 fw-400">RR</h2>' +
            //                     '</div>' +
            //                 '</div>' +
            //             '</td>' +
            //             '<td>' + values.total_match + '</td>' +
            //             '<td>' + values.innings + '</td>' +
            //             '<td>' + values.overs + '</td>' +
            //             '<td>' + values.runs + '</td>' +
            //             '<td>' + values.total_wickets + '</td>' +
            //             '<td>0</td>' +
            //             '<td>' + values.avg + '</td>' +
            //             '<td>' + values.economy + '</td>' +
            //             '<td>' + values.SR + '</td>' +
            //             '<td>0</td>' +
            //             '<td>0</td>' +
            //             '</tr>';
            //             $('#pointsdatabowling').append(newRow);
            //         });

            //         $("#BowlingStatsTable").show();
            //         console.log('API call successful', data);
            //         })
            //         .catch(error => {
            //             // Handle any errors
            //             console.error('API call failed', error);
            //     });
            // }

        } else {

            if (teams == 'undefined' || teams == 'All teams') {
                getBattingData(orangCap, selectedOrangeCap, season, teams);
                // if(orangCap == 'MISIX' || orangCap == 'MIFOUR' || orangCap == 'MIHSR' || orangCap == 'MIHS'){

                //     fetch('https://mplt20.in/wp-json/custom-api/v1/mpl/getstats?tournamentId='+season+'&url='+selectedOrangeCap+'&value='+orangCap)
                //     .then(response => {
                //     if (!response.ok) {
                //         throw new Error('Network response was not ok');
                //     }
                //     return response.json();
                //     })
                //     .then(data => {
                //     $('#pointsdatainningsBatting').empty();
                //     //Stats to be hiiden 
                //     $("#battingStats").hide();
                //     $("#bowlingStats").hide();
                //     $("#bowlingInngStats").hide();

                //     //tables to be hidden
                //     $("#BattingStatsTable").hide();
                //     $("#BowlingStatsTable").hide();
                //     $("#BowlingInningStatsTable").hide();


                //     if(data.data.length > 0) {
                //         var firstPlayer = data.data[0];
                //         $('#battingInngStats .statsplayer img').attr('src', firstPlayer.profile_photo);
                //         $('#battingInngStats .playername').text(firstPlayer.name);
                //         $('#battingInngStats .statstable div:nth-child(1) .statsnumb').text(firstPlayer.total_runs);
                //         $('#battingInngStats .statstable div:nth-child(2) .statsnumb').text(1);
                //         $('#battingInngStats .statstable div:nth-child(3) .statsnumb').text(firstPlayer.strike_rate);
                //         $('#battingInngStats .statstable div:nth-child(4) .statsnumb').text(firstPlayer.highest_run);
                //     }
                //     $.each(data.data, function(index, values) {
                //         var date = new Date(values['match_date']);
                //         var options = { day: 'numeric', month: 'long', year: 'numeric' };

                //         var formattedDate = date.toLocaleDateString('en-GB', options);

                //         var newRow = '<tr class="team">' +
                //         '<td class="table-qualified">' + (index + 1) + '</td>' +
                //         '<td class="ih-t-color">' +
                //             '<div class="ih-pt-ic">' +
                //                 '<div class="ih-pt-img"><img alt="" src="' + values.profile_photo + '"></div>' +
                //                 '<div class="text-start">' +
                //                     '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' + values.name + '</h2>' +
                //                     '<h2 class="ih-pt-cont mb-0 fw-400">RR</h2>' +
                //                 '</div>' +
                //             '</div>' +
                //         '</td>' +
                //         '<td>' + values['total_runs'] + '</td>' +
                //         '<td>' + values['strike_rate'] + '</td>' +
                //         '<td>' + values['4s'] + '</td>' +
                //         '<td>' + values['6s'] + '</td>' +
                //         '<td>' + values['against_team_name'] + '</td>' +
                //         '<td>' + values['against_team_name'] + '</td>' +
                //         '<td>' + formattedDate + '</td>' +
                //         '</tr>';
                //         $('#pointsdatainningsBatting').append(newRow);
                //     });

                //     $("#battingInngStats").show();
                //     $("#BattingInningStatsTable").show();

                //     console.log('API call successful', data);
                //     })
                //     .catch(error => {
                //     // Handle any errors
                //     console.error('API call failed', error);
                //     });
                // }else{

                // fetch('https://mplt20.in/wp-json/custom-api/v1/mpl/getstats?tournamentId='+season+'&url='+selectedOrangeCap+'&value='+orangCap)
                // .then(response => {
                // if (!response.ok) {
                //     throw new Error('Network response was not ok');
                // }
                // return response.json();
                // })
                // .then(data => {
                // //Stats to be hidden
                // $("#bowlingStats").hide();
                // $("#battingInngStats").hide();
                // $("#BowlingInningStatsTable").hide(); 

                // //table to be hidden
                // $("#BowlingStatsTable").hide();
                // $("#BattingInningStatsTable").hide();
                // $("#bowlingInngStats").hide();

                // $('#pointsdata').empty();

                // if(data.data.length > 0) {
                //     var firstPlayer = data.data[0];
                //     $('#battingStats .statsplayer img').attr('src', firstPlayer.profile_photo);
                //     $('#battingStats .playername').text(firstPlayer.name);
                //     $('#battingStats .statstable div:nth-child(1) .statsnumb').text(firstPlayer.total_runs);
                //     $('#battingStats .statstable div:nth-child(2) .statsnumb').text(firstPlayer.total_match);
                //     $('#battingStats .statstable div:nth-child(3) .statsnumb').text(firstPlayer.average);
                //     $('#battingStats .statstable div:nth-child(4) .statsnumb').text(firstPlayer.strike_rate);
                //     $('#battingStats .statstable div:nth-child(5) .statsnumb').text(firstPlayer.highest_run);
                //     $('#battingStats .statstable div:nth-child(6) .statsnumb').text(firstPlayer['50s'] + '/' + firstPlayer['100s']);
                // }
                // $.each(data.data, function(index, values) {
                //     var newRow = '<tr class="team">' +
                //     '<td class="table-qualified">' + (index + 1) + '</td>' +
                //     '<td class="ih-t-color">' +
                //         '<div class="ih-pt-ic">' +
                //             '<div class="ih-pt-img"><img alt="" src="' + values.profile_photo + '"></div>' +
                //             '<div class="text-start">' +
                //                 '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' + values.name + '</h2>' +
                //                 '<h2 class="ih-pt-cont mb-0 fw-400">RR</h2>' +
                //             '</div>' +
                //         '</div>' +
                //     '</td>' +
                //     '<td>' + values['4s'] + '</td>' +
                //     '<td>' + values['4s'] + '</td>' +
                //     '<td>' + values['6s'] + '</td>' +
                //     '<td>' + values['6s'] + '</td>' +
                //     '<td>' + values['50s'] + '</td>' +
                //     '<td>' + values['100s'] + '</td>' +
                //     '<td>' + values['50s'] + '</td>' +
                //     '<td>' + values['100s'] + '</td>' +
                //     '<td>' + values['highest_run'] + '</td>' +
                //     '<td>' + values['strike_rate'] + '</td>' +
                //     '<td>' + values['strike_rate'] + '</td>' +
                //     '<td>' + values['average'] + '</td>' +
                //     '</tr>';
                //     $('#pointsdata').append(newRow);
                // });
                // //stats and table to be shown
                // $("#battingStats").show();
                // $("#BattingStatsTable").show();
                // console.log('API call successful', data);
                // })
                // .catch(error => {
                // // Handle any errors
                // console.error('API call failed', error);
                // });
                // }
            } else {
                getBattingData(orangCap, selectedOrangeCap, season, teams);
                // if(orangCap == 'MISIX' || orangCap == 'MIFOUR' || orangCap == 'MIHSR' || orangCap == 'MIHS'){

                //     fetch('https://mplt20.in/wp-json/custom-api/v1/mpl/getstats?tournamentId='+season+'&url='+selectedOrangeCap+'&value='+orangCap)
                //     .then(response => {
                //     if (!response.ok) {
                //         throw new Error('Network response was not ok');
                //     }
                //     return response.json();
                //     })
                //     .then(data => {
                //     $('#pointsdatainningsBatting').empty();
                //     //Stats to be hiiden 
                //     $("#battingStats").hide();
                //     $("#bowlingStats").hide();
                //     $("#bowlingInngStats").hide();

                //     //tables to be hidden
                //     $("#BattingStatsTable").hide();
                //     $("#BowlingStatsTable").hide();
                //     $("#BowlingInningStatsTable").hide();


                //     if(data.data.length > 0) {
                //         var firstPlayer = data.data[0];
                //         $('#battingInngStats .statsplayer img').attr('src', firstPlayer.profile_photo);
                //         $('#battingInngStats .playername').text(firstPlayer.name);
                //         $('#battingInngStats .statstable div:nth-child(1) .statsnumb').text(firstPlayer.total_runs);
                //         $('#battingInngStats .statstable div:nth-child(2) .statsnumb').text(1);
                //         $('#battingInngStats .statstable div:nth-child(3) .statsnumb').text(firstPlayer.strike_rate);
                //         $('#battingInngStats .statstable div:nth-child(4) .statsnumb').text(firstPlayer.highest_run);
                //     }
                //     $.each(data.data, function(index, values) {
                //         var date = new Date(values['match_date']);
                //         var options = { day: 'numeric', month: 'long', year: 'numeric' };

                //         var formattedDate = date.toLocaleDateString('en-GB', options);

                //         var newRow = '<tr class="team">' +
                //         '<td class="table-qualified">' + (index + 1) + '</td>' +
                //         '<td class="ih-t-color">' +
                //             '<div class="ih-pt-ic">' +
                //                 '<div class="ih-pt-img"><img alt="" src="' + values.profile_photo + '"></div>' +
                //                 '<div class="text-start">' +
                //                     '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' + values.name + '</h2>' +
                //                     '<h2 class="ih-pt-cont mb-0 fw-400">RR</h2>' +
                //                 '</div>' +
                //             '</div>' +
                //         '</td>' +
                //         '<td>' + values['total_runs'] + '</td>' +
                //         '<td>' + values['strike_rate'] + '</td>' +
                //         '<td>' + values['4s'] + '</td>' +
                //         '<td>' + values['6s'] + '</td>' +
                //         '<td>' + values['against_team_name'] + '</td>' +
                //         '<td>' + values['against_team_name'] + '</td>' +
                //         '<td>' + formattedDate + '</td>' +
                //         '</tr>';
                //         $('#pointsdatainningsBatting').append(newRow);
                //     });

                //     $("#battingInngStats").show();
                //     $("#BattingInningStatsTable").show();

                //     console.log('API call successful', data);
                //     })
                //     .catch(error => {
                //     // Handle any errors
                //     console.error('API call failed', error);
                //     });
                // }else{

                //     fetch('https://mplt20.in/wp-json/custom-api/v1/mpl/getstats?tournamentId='+season+'&url='+selectedOrangeCap+'&value='+orangCap)
                //     .then(response => {
                //     if (!response.ok) {
                //         throw new Error('Network response was not ok');
                //     }
                //     return response.json();
                //     })
                //     .then(data => {
                //     //Stats to be hidden
                //     $("#bowlingStats").hide();
                //     $("#battingInngStats").hide();
                //     $("#BowlingInningStatsTable").hide(); 

                //     //table to be hidden
                //     $("#BowlingStatsTable").hide();
                //     $("#BattingInningStatsTable").hide();
                //     $("#bowlingInngStats").hide();

                //     $('#pointsdata').empty();

                //     if(data.data.length > 0) {
                //         var firstPlayer = data.data[0];
                //         $('#battingStats .statsplayer img').attr('src', firstPlayer.profile_photo);
                //         $('#battingStats .playername').text(firstPlayer.name);
                //         $('#battingStats .statstable div:nth-child(1) .statsnumb').text(firstPlayer.total_runs);
                //         $('#battingStats .statstable div:nth-child(2) .statsnumb').text(firstPlayer.total_match);
                //         $('#battingStats .statstable div:nth-child(3) .statsnumb').text(firstPlayer.average);
                //         $('#battingStats .statstable div:nth-child(4) .statsnumb').text(firstPlayer.strike_rate);
                //         $('#battingStats .statstable div:nth-child(5) .statsnumb').text(firstPlayer.highest_run);
                //         $('#battingStats .statstable div:nth-child(6) .statsnumb').text(firstPlayer['50s'] + '/' + firstPlayer['100s']);
                //     }
                //     $.each(data.data, function(index, values) {
                //         var newRow = '<tr class="team">' +
                //         '<td class="table-qualified">' + (index + 1) + '</td>' +
                //         '<td class="ih-t-color">' +
                //             '<div class="ih-pt-ic">' +
                //                 '<div class="ih-pt-img"><img alt="" src="' + values.profile_photo + '"></div>' +
                //                 '<div class="text-start">' +
                //                     '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' + values.name + '</h2>' +
                //                     '<h2 class="ih-pt-cont mb-0 fw-400">RR</h2>' +
                //                 '</div>' +
                //             '</div>' +
                //         '</td>' +
                //         '<td>' + values['4s'] + '</td>' +
                //         '<td>' + values['4s'] + '</td>' +
                //         '<td>' + values['6s'] + '</td>' +
                //         '<td>' + values['6s'] + '</td>' +
                //         '<td>' + values['50s'] + '</td>' +
                //         '<td>' + values['100s'] + '</td>' +
                //         '<td>' + values['50s'] + '</td>' +
                //         '<td>' + values['100s'] + '</td>' +
                //         '<td>' + values['highest_run'] + '</td>' +
                //         '<td>' + values['strike_rate'] + '</td>' +
                //         '<td>' + values['strike_rate'] + '</td>' +
                //         '<td>' + values['average'] + '</td>' +
                //         '</tr>';
                //         $('#pointsdata').append(newRow);
                //     });
                //     //stats and table to be shown
                //     $("#battingStats").show();
                //     $("#BattingStatsTable").show();
                //     console.log('API call successful', data);
                //     })
                //     .catch(error => {
                //     // Handle any errors
                //     console.error('API call failed', error);
                //     });
                // }
            }


        }

    }

    function getBattingData(orangCap, selectedOrangeCap, season, teams) {
        getOrangeCap(season);
        getPurpleCap(season);
        if (orangCap == 'MISIX' || orangCap == 'MIFOUR' || orangCap == 'MIHSR' || orangCap == 'MIHS') {

            fetch('https://mplt20.in/wp-json/custom-api/v1/mpl/getstats?tournamentId=' + season +
                    '&url=' + selectedOrangeCap + '&value=' + orangCap)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    $('#pointsdatainningsBatting').empty();
                    //Stats to be hiiden 
                    $("#battingStats").hide();
                    $("#bowlingStats").hide();
                    $("#bowlingInngStats").hide();

                    //tables to be hidden
                    $("#BattingStatsTable").hide();
                    $("#BowlingStatsTable").hide();
                    $("#BowlingInningStatsTable").hide();


                    var foundedPlayer = false;
                    $.each(data.data, function(index, values) {
                        if (teams != 'All teams') {
                            if (values.team_name == teams) {
                                if (!foundedPlayer) {
                                    if (data.data.length > 0) {
                                        //var firstPlayer = data.data[0];
                                        $('#battingInngStats .statsplayer img').attr('src', values
                                            .profile_photo);
                                        $('#battingInngStats .playername').text(values.name);
                                        $('#battingInngStats .statstable div:nth-child(1) .statsnumb')
                                            .text(values.total_runs);
                                        $('#battingInngStats .statstable div:nth-child(2) .statsnumb')
                                            .text(1);
                                        $('#battingInngStats .statstable div:nth-child(3) .statsnumb')
                                            .text(values.strike_rate);
                                        $('#battingInngStats .statstable div:nth-child(4) .statsnumb')
                                            .text(values.highest_run);
                                    }

                                    foundedPlayer = true;
                                }

                                var date = new Date(values['match_date']);
                                var options = {
                                    day: 'numeric',
                                    month: 'long',
                                    year: 'numeric'
                                };

                                var formattedDate = date.toLocaleDateString('en-GB', options);

                                var newRow = '<tr class="team ' + index + '" data-search-term="' +
                                    values.name + '">' +
                                    '<td class="table-qualified">' + (index + 1) + '</td>' +
                                    '<td class="ih-t-color">' +
                                    '<div class="ih-pt-ic">' +
                                    '<div class="ih-pt-img"><img alt="" src="' + values
                                    .profile_photo + '"></div>' +
                                    '<div class="text-start">' +
                                    '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' +
                                    values.name + '</h2>' +
                                    '<h2 class="ih-pt-cont mb-0 fw-400">' + values.team_name +
                                    '</h2>' +
                                    '</div>' +
                                    '</div>' +
                                    '</td>' +
                                    '<td>' + values['total_runs'] + '</td>' +
                                    '<td>' + values['strike_rate'] + '</td>' +
                                    '<td>' + values['4s'] + '</td>' +
                                    '<td>' + values['6s'] + '</td>' +
                                    '<td>' + values['against_team_name'] + '</td>' +
                                    '<td>' + values['ground_name'] + '</td>' +
                                    '<td>' + formattedDate + '</td>' +
                                    '</tr>';
                                $('#pointsdatainningsBatting').append(newRow);
                            }

                        } else {
                            if (data.data.length > 0) {
                                var firstPlayer = data.data[0];
                                $('#battingInngStats .statsplayer img').attr('src', firstPlayer
                                    .profile_photo);
                                $('#battingInngStats .playername').text(firstPlayer.name);
                                $('#battingInngStats .statstable div:nth-child(1) .statsnumb').text(
                                    firstPlayer.total_runs);
                                $('#battingInngStats .statstable div:nth-child(2) .statsnumb').text(
                                    1);
                                $('#battingInngStats .statstable div:nth-child(3) .statsnumb').text(
                                    firstPlayer.strike_rate);
                                $('#battingInngStats .statstable div:nth-child(4) .statsnumb').text(
                                    firstPlayer.highest_run);
                            }
                            var date = new Date(values['match_date']);
                            var options = {
                                day: 'numeric',
                                month: 'long',
                                year: 'numeric'
                            };

                            var formattedDate = date.toLocaleDateString('en-GB', options);

                            var newRow = '<tr class="team ' + index + '" data-search-term="' +
                                values.name + '">' +
                                '<td class="table-qualified">' + (index + 1) + '</td>' +
                                '<td class="ih-t-color">' +
                                '<div class="ih-pt-ic">' +
                                '<div class="ih-pt-img"><img alt="" src="' + values.profile_photo +
                                '"></div>' +
                                '<div class="text-start">' +
                                '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' +
                                values.name + '</h2>' +
                                '<h2 class="ih-pt-cont mb-0 fw-400">' + values.team_name + '</h2>' +
                                '</div>' +
                                '</div>' +
                                '</td>' +
                                '<td>' + values['total_runs'] + '</td>' +
                                '<td>' + values['strike_rate'] + '</td>' +
                                '<td>' + values['4s'] + '</td>' +
                                '<td>' + values['6s'] + '</td>' +
                                '<td>' + values['against_team_name'] + '</td>' +
                                '<td>' + values['ground_name'] + '</td>' +
                                '<td>' + formattedDate + '</td>' +
                                '</tr>';
                            $('#pointsdatainningsBatting').append(newRow);
                        }

                    });
                    if (data.status == false) {
                        var firstPlayer = data.data[0];
                        $('#battingInngStats .statsplayer img').attr('src', '');
                        $('#battingInngStats .playername').text('');
                        $('#battingInngStats .statstable div:nth-child(1) .statsnumb').text('');
                        $('#battingInngStats .statstable div:nth-child(2) .statsnumb').text(
                            '');
                        $('#battingInngStats .statstable div:nth-child(3) .statsnumb').text(
                            '');
                        $('#battingInngStats .statstable div:nth-child(4) .statsnumb').text(
                            '');
                    }
                    $("#battingInngStats").show();
                    $("#BattingInningStatsTable").show();

                    console.log('API call successful', data);
                })
                .catch(error => {
                    // Handle any errors
                    console.error('API call failed', error);
                });
        } else {

            fetch('https://mplt20.in/wp-json/custom-api/v1/mpl/getstats?tournamentId=' + season +
                    '&url=' + selectedOrangeCap + '&value=' + orangCap)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    //Stats to be hidden
                    $("#bowlingStats").hide();
                    $("#battingInngStats").hide();
                    $("#BowlingInningStatsTable").hide();

                    //table to be hidden
                    $("#BowlingStatsTable").hide();
                    $("#BattingInningStatsTable").hide();
                    $("#bowlingInngStats").hide();

                    $('#pointsdata').empty();


                    var foundedPlayer = false;
                    $.each(data.data, function(index, values) {
                        if (teams != 'All teams') {
                            // console.log("test");
                            if (values.team_name == teams) {
                                if (!foundedPlayer) {
                                    $('#battingStats .statsplayer img').attr('src', values
                                        .profile_photo);
                                    $('#battingStats .playername').text(values.name);
                                    $('#battingStats .statstable div:nth-child(1) .statsnumb').text(
                                        values.total_runs);
                                    $('#battingStats .statstable div:nth-child(2) .statsnumb').text(
                                        values.total_match);
                                    $('#battingStats .statstable div:nth-child(3) .statsnumb').text(
                                        values.average);
                                    $('#battingStats .statstable div:nth-child(4) .statsnumb').text(
                                        values.strike_rate);
                                    $('#battingStats .statstable div:nth-child(5) .statsnumb').text(
                                        values.highest_run);
                                    $('#battingStats .statstable div:nth-child(6) .statsnumb').text(
                                        values['50s'] + '/' + values['100s']);
                                    foundedPlayer = true;
                                }

                                var newRow = '<tr class="team ' + index + '" data-search-term="' +
                                    values.name + '">' +
                                    '<td class="table-qualified">' + (index + 1) + '</td>' +
                                    '<td class="ih-t-color">' +
                                    '<div class="ih-pt-ic">' +
                                    '<div class="ih-pt-img"><img alt="" src="' + values
                                    .profile_photo + '"></div>' +
                                    '<div class="text-start">' +
                                    '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' +
                                    values.name + '</h2>' +
                                    '<h2 class="ih-pt-cont mb-0 fw-400">' + values.team_name +
                                    '</h2>' +
                                    '</div>' +
                                    '</div>' +
                                    '</td>' +
                                    '<td>' + values['4s'] + '</td>' +
                                    '<td>' + values['4s'] + '</td>' +
                                    '<td>' + values['6s'] + '</td>' +
                                    '<td>' + values['6s'] + '</td>' +
                                    '<td>' + values['50s'] + '</td>' +
                                    '<td>' + values['100s'] + '</td>' +
                                    '<td>' + values['50s'] + '</td>' +
                                    '<td>' + values['100s'] + '</td>' +
                                    '<td>' + values['highest_run'] + '</td>' +
                                    '<td>' + values['strike_rate'] + '</td>' +
                                    '<td>' + values['strike_rate'] + '</td>' +
                                    '<td>' + values['average'] + '</td>' +
                                    '</tr>';
                                $('#pointsdata').append(newRow);
                            }

                        } else {
                            if (data.data.length > 0) {
                                var firstPlayer = data.data[0];
                                $('#battingStats .statsplayer img').attr('src', firstPlayer
                                    .profile_photo);
                                $('#battingStats .playername').text(firstPlayer.name);
                                $('#battingStats .statstable div:nth-child(1) .statsnumb').text(
                                    firstPlayer.total_runs);
                                $('#battingStats .statstable div:nth-child(2) .statsnumb').text(
                                    firstPlayer.total_match);
                                $('#battingStats .statstable div:nth-child(3) .statsnumb').text(
                                    firstPlayer.average);
                                $('#battingStats .statstable div:nth-child(4) .statsnumb').text(
                                    firstPlayer.strike_rate);
                                $('#battingStats .statstable div:nth-child(5) .statsnumb').text(
                                    firstPlayer.highest_run);
                                $('#battingStats .statstable div:nth-child(6) .statsnumb').text(
                                    firstPlayer['50s'] + '/' + firstPlayer['100s']);
                            }
                            var newRow = '<tr class="team ' + index + '" data-search-term="' +
                                values.name + '">' +
                                '<td class="table-qualified">' + (index + 1) + '</td>' +
                                '<td class="ih-t-color">' +
                                '<div class="ih-pt-ic">' +
                                '<div class="ih-pt-img"><img alt="" src="' + values.profile_photo +
                                '"></div>' +
                                '<div class="text-start">' +
                                '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' +
                                values.name + '</h2>' +
                                '<h2 class="ih-pt-cont mb-0 fw-400">' + values.team_name + '</h2>' +
                                '</div>' +
                                '</div>' +
                                '</td>' +
                                '<td>' + values['total_match'] + '</td>' +
                                '<td>' + values['innings'] + '</td>' +
                                '<td>' + values['4s'] + '</td>' +
                                '<td>' + values['6s'] + '</td>' +
                                '<td>' + values['50s'] + '</td>' +
                                '<td>' + values['100s'] + '</td>' +
                                '<td>' + values['highest_run'] + '</td>' +
                                '<td>' + values['total_runs'] + '</td>' +
                                '<td>' + values['strike_rate'] + '</td>' +
                                '<td>' + values['average'] + '</td>' +
                                '</tr>';
                            $('#pointsdata').append(newRow);
                        }

                    });

                    if (data.status == false) {
                        $('#battingStats .statsplayer img').attr('src',
                            '');
                        $('#battingStats .playername').text('');
                        $('#battingStats .statstable div:nth-child(1) .statsnumb').text(
                            '');
                        $('#battingStats .statstable div:nth-child(2) .statsnumb').text(
                            '');
                        $('#battingStats .statstable div:nth-child(3) .statsnumb').text(
                            '');
                        $('#battingStats .statstable div:nth-child(4) .statsnumb').text(
                            '');
                        $('#battingStats .statstable div:nth-child(5) .statsnumb').text(
                            '');
                        $('#battingStats .statstable div:nth-child(6) .statsnumb').text('');
                    }
                    //stats and table to be shown
                    $("#battingStats").show();
                    $("#BattingStatsTable").show();
                    console.log('API call successful', data);
                })
                .catch(error => {
                    // Handle any errors
                    console.error('API call failed', error);
                });
        }
    }

    function getBowlingData(orangCap, selectedOrangeCap, season, teams) {
        getOrangeCap(season);
        getPurpleCap(season);
        if (orangCap == 'MIMDB' || orangCap == 'MIBB' || orangCap == 'MIBBE' || orangCap == 'MIMRC') {
            fetch('https://mplt20.in/wp-json/custom-api/v1/mpl/getstats?tournamentId=' + season +
                    '&url=' + selectedOrangeCap + '&value=' + orangCap)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {

                    //stats to be hidden 
                    $("#battingStats").hide();
                    $("#bowlingStats").hide();
                    $("#battingInngStats").hide();

                    //table to be hidden
                    $("#BattingStatsTable").hide();
                    $("#BowlingStatsTable").hide();
                    $("#BattingInningStatsTable").hide();

                    //ignore
                    $('#pointsdatainningsBowling').empty();





                    $("#bowlingInngStats").show();
                    var foundedPlayer = false;
                    $.each(data.data, function(index, values) {
                        if (teams != 'All teams') {
                            if (teams == values.team_name) {
                                if (!foundedPlayer) {
                                    if (data.data.length > 0) {
                                        //var firstBowler = data.data[0];
                                        $('#bowlingInngStats .statsplayer img').attr('src', values
                                            .profile_photo);
                                        $('#bowlingInngStats .playername').text(values.name);
                                        $('#bowlingInngStats .statstable div:nth-child(1) .statsnumb')
                                            .text(values.overs);
                                        $('#bowlingInngStats .statstable div:nth-child(2) .statsnumb')
                                            .text(values.total_match);
                                        $('#bowlingInngStats .statstable div:nth-child(3) .statsnumb')
                                            .text(values.runs);
                                        $('#bowlingInngStats .statstable div:nth-child(4) .statsnumb')
                                            .text(values.total_wickets);
                                        $('#bowlingInngStats .statstable div:nth-child(5) .statsnumb')
                                            .text(values.dot_ball ||
                                                '0'); // Assuming best_bowling field for BBI
                                        $('#bowlingInngStats .statstable div:nth-child(6) .statsnumb')
                                            .text(values
                                                .economy); // Assuming 4w and 5w fields for 4Ws/5Ws
                                    }
                                    foundedPlayer = true;
                                }
                                var date = new Date(values['match_date']);
                                var options = {
                                    day: 'numeric',
                                    month: 'long',
                                    year: 'numeric'
                                };

                                var formattedDate = date.toLocaleDateString('en-GB', options);
                                var newRow = '<tr class="team ' + index + ' data-search-term="' +
                                    values.name + '">' +
                                    '<td class="table-qualified">' + (index + 1) + '</td>' +
                                    '<td class="ih-t-color">' +
                                    '<div class="ih-pt-ic">' +
                                    '<div class="ih-pt-img"><img alt="" src="' + values
                                    .profile_photo + '"></div>' +
                                    '<div class="text-start">' +
                                    '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' +
                                    values.name + '</h2>' +
                                    '<h2 class="ih-pt-cont mb-0 fw-400">' + values.team_name +
                                    '</h2>' +
                                    '</div>' +
                                    '</div>' +
                                    '</td>' +
                                    '<td>' + values.overs + '</td>' +
                                    '<td>' + values.runs + '</td>' +
                                    '<td>' + values.total_wickets + '</td>' +
                                    '<td>' + values.dot_ball + '</td>' +
                                    '<td>' + values.balls / values.total_wickets + '</td>' +
                                    '<td>' + values.against_team_name + '</td>' +
                                    '<td>' + values.ground_name + '</td>' +
                                    '<td>' + formattedDate + '</td>' +
                                    '</tr>';
                                $('#pointsdatainningsBowling').append(newRow);
                            }

                        } else {
                            if (data.data.length > 0) {
                                var firstBowler = data.data[0];
                                $('#bowlingInngStats .statsplayer img').attr('src', firstBowler
                                    .profile_photo);
                                $('#bowlingInngStats .playername').text(firstBowler.name);
                                $('#bowlingInngStats .statstable div:nth-child(1) .statsnumb').text(
                                    firstBowler.overs);
                                $('#bowlingInngStats .statstable div:nth-child(2) .statsnumb').text(
                                    firstBowler.total_match);
                                $('#bowlingInngStats .statstable div:nth-child(3) .statsnumb').text(
                                    firstBowler.runs);
                                $('#bowlingInngStats .statstable div:nth-child(4) .statsnumb').text(
                                    firstBowler.total_wickets);
                                $('#bowlingInngStats .statstable div:nth-child(5) .statsnumb').text(
                                    firstBowler.dot_ball || '0'
                                ); // Assuming best_bowling field for BBI
                                $('#bowlingInngStats .statstable div:nth-child(6) .statsnumb').text(
                                    firstBowler.economy); // Assuming 4w and 5w fields for 4Ws/5Ws
                            }

                            var date = new Date(values['match_date']);
                            var options = {
                                day: 'numeric',
                                month: 'long',
                                year: 'numeric'
                            };

                            var formattedDate = date.toLocaleDateString('en-GB', options);
                            var newRow = '<tr class="team ' + index + '" data-search-term="' +
                                values.name + '">' +
                                '<td class="table-qualified">' + (index + 1) + '</td>' +
                                '<td class="ih-t-color">' +
                                '<div class="ih-pt-ic">' +
                                '<div class="ih-pt-img"><img alt="" src="' + values.profile_photo +
                                '"></div>' +
                                '<div class="text-start">' +
                                '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' +
                                values.name + '</h2>' +
                                '<h2 class="ih-pt-cont mb-0 fw-400">' + values.team_name + '</h2>' +
                                '</div>' +
                                '</div>' +
                                '</td>' +
                                '<td>' + values.overs + '</td>' +
                                '<td>' + values.runs + '</td>' +
                                '<td>' + values.total_wickets + '</td>' +
                                '<td>' + values.dot_ball + '</td>' +
                                '<td>' + values.balls / values.total_wickets + '</td>' +
                                '<td>' + values.against_team_name + '</td>' +
                                '<td>' + values.ground_name + '</td>' +
                                '<td>' + formattedDate + '</td>' +
                                '</tr>';
                            $('#pointsdatainningsBowling').append(newRow);
                        }

                    });

                    if (data.status == 'false') {
                        $('#bowlingInngStats .statsplayer img').attr('src', '');
                        $('#bowlingInngStats .playername').text('');
                        $('#bowlingInngStats .statstable div:nth-child(1) .statsnumb').text(
                            '');
                        $('#bowlingInngStats .statstable div:nth-child(2) .statsnumb').text(
                            '');
                        $('#bowlingInngStats .statstable div:nth-child(3) .statsnumb').text(
                            '');
                        $('#bowlingInngStats .statstable div:nth-child(4) .statsnumb').text(
                            '');
                        $('#bowlingInngStats .statstable div:nth-child(5) .statsnumb').text(
                            ''
                        ); // Assuming best_bowling field for BBI
                        $('#bowlingInngStats .statstable div:nth-child(6) .statsnumb').text(
                            ''); // Assuming 4w and 5w fields for 4Ws/5Ws
                    }
                    $("#BowlingInningStatsTable").show();
                    console.log('API call successful', data);
                })
                .catch(error => {
                    // Handle any errors
                    console.error('API call failed', error);
                });
        } else {

            fetch('https://mplt20.in/wp-json/custom-api/v1/mpl/getstats?tournamentId=' + season +
                    '&url=' + selectedOrangeCap + '&value=' + orangCap)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {

                    //stats to be hidden

                    $("#battingStats").hide();
                    $("#battingInngStats").hide();
                    $("#bowlingInngStats").hide();

                    // Table to be hidden
                    $("#BattingStatsTable").hide();
                    $("#BattingInningStatsTable").hide();
                    $("#BowlingInningStatsTable").hide();

                    //ignore
                    $('#pointsdatabowling').empty();


                    var foundedPlayer = false;
                    $.each(data.data, function(index, values) {
                        if (teams != 'All teams') {
                            if (teams == values.team_name) {
                                if (!foundedPlayer) {
                                    if (data.data.length > 0) {
                                        //var firstBowler = data.data[0];
                                        $('#bowlingStats .statsplayer img').attr('src', values
                                            .profile_photo);
                                        $('#bowlingStats .playername').text(values.name);
                                        $('#bowlingStats .statstable div:nth-child(1) .statsnumb')
                                            .text(values.total_wickets);
                                        $('#bowlingStats .statstable div:nth-child(2) .statsnumb')
                                            .text(values.total_match);
                                        $('#bowlingStats .statstable div:nth-child(3) .statsnumb')
                                            .text(values.economy);
                                        $('#bowlingStats .statstable div:nth-child(4) .statsnumb')
                                            .text(values.maidens);
                                        $('#bowlingStats .statstable div:nth-child(5) .statsnumb')
                                            .text(values.best_bowling ||
                                                '0'); // Assuming best_bowling field for BBI
                                        $('#bowlingStats .statstable div:nth-child(6) .statsnumb')
                                            .text((values['4_wickets'] || '0') + '/' + (values[
                                                    '5_wickets'] ||
                                                '0')); // Assuming 4w and 5w fields for 4Ws/5Ws
                                    }
                                    foundedPlayer = true;
                                }


                                var newRow = '<tr class="team ' + index + '" data-search-term="' +
                                    values.name + '">' +
                                    '<td class="table-qualified">' + (index + 1) + '</td>' +
                                    '<td class="ih-t-color">' +
                                    '<div class="ih-pt-ic">' +
                                    '<div class="ih-pt-img"><img alt="" src="' + values
                                    .profile_photo + '"></div>' +
                                    '<div class="text-start">' +
                                    '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' +
                                    values.name + '</h2>' +
                                    '<h2 class="ih-pt-cont mb-0 fw-400">' + values.team_name +
                                    '</h2>' +
                                    '</div>' +
                                    '</div>' +
                                    '</td>' +
                                    '<td>' + values.total_match + '</td>' +
                                    '<td>' + values.innings + '</td>' +
                                    '<td>' + values.overs + '</td>' +
                                    '<td>' + values.runs + '</td>' +
                                    '<td>' + values.total_wickets + '</td>' +
                                    '<td>0</td>' +
                                    '<td>' + values.avg + '</td>' +
                                    '<td>' + values.economy + '</td>' +
                                    '<td>' + values.SR + '</td>' +
                                    '<td>0</td>' +
                                    '<td>0</td>' +
                                    '</tr>';
                                $('#pointsdatabowling').append(newRow);
                            }
                        } else {
                            if (data.data.length > 0) {
                                var firstBowler = data.data[0];
                                $('#bowlingStats .statsplayer img').attr('src', firstBowler
                                    .profile_photo);
                                $('#bowlingStats .playername').text(firstBowler.name);
                                $('#bowlingStats .statstable div:nth-child(1) .statsnumb').text(
                                    firstBowler.total_wickets);
                                $('#bowlingStats .statstable div:nth-child(2) .statsnumb').text(
                                    firstBowler.total_match);
                                $('#bowlingStats .statstable div:nth-child(3) .statsnumb').text(
                                    firstBowler.economy);
                                $('#bowlingStats .statstable div:nth-child(4) .statsnumb').text(
                                    firstBowler.maidens);
                                $('#bowlingStats .statstable div:nth-child(5) .statsnumb').text(
                                    firstBowler.best_bowling || '0'
                                ); // Assuming best_bowling field for BBI
                                $('#bowlingStats .statstable div:nth-child(6) .statsnumb').text((
                                    firstBowler['4_wickets'] || '0') + '/' + (firstBowler[
                                    '5_wickets'] || '0')); // Assuming 4w and 5w fields for 4Ws/5Ws
                            }

                            $("#bowlingStats").show();

                            var newRow = '<tr class="team ' + index + '" data-search-term="' +
                                values.name + '">' +
                                '<td class="table-qualified">' + (index + 1) + '</td>' +
                                '<td class="ih-t-color">' +
                                '<div class="ih-pt-ic">' +
                                '<div class="ih-pt-img"><img alt="" src="' + values.profile_photo +
                                '"></div>' +
                                '<div class="text-start">' +
                                '<h2 class="ih-pt-cont teamplayername mb-0 text-black fw-400">' +
                                values.name + '</h2>' +
                                '<h2 class="ih-pt-cont mb-0 fw-400">' + values.team_name + '</h2>' +
                                '</div>' +
                                '</div>' +
                                '</td>' +
                                '<td>' + values.total_match + '</td>' +
                                '<td>' + values.innings + '</td>' +
                                '<td>' + values.overs + '</td>' +
                                '<td>' + values.runs + '</td>' +
                                '<td>' + values.total_wickets + '</td>' +
                                '<td>0</td>' +
                                '<td>' + values.avg + '</td>' +
                                '<td>' + values.economy + '</td>' +
                                '<td>' + values.SR + '</td>' +
                                '<td>' + values['4_wickets'] + '</td>' +
                                '<td>' + values['5_wickets'] + '</td>' +
                                '</tr>';
                            $('#pointsdatabowling').append(newRow);
                        }
                    });

                    $("#BowlingStatsTable").show();
                    console.log('API call successful', data);
                })
                .catch(error => {
                    // Handle any errors
                    console.error('API call failed', error);
                });
        }
    }

    function getOrangeCap(season) {
        fetch('https://mplt20.in/wp-json/custom-api/v1/mpl/getstats?tournamentId=' + season +
                '&url=thirdparty/mpl/get-tournament-batting-leaderboard&value=RUN')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                var data = data.data[0];
                $('#photo_orange').attr('src', data.profile_photo);
                $('#o_player_name').text(data.name);
                $('#o_to_run').text(data.total_runs);
                $('#o_to_match').text(data.total_match);
                $('#o_to_avg').text(data.average);
                // $.each(data.data, function(index, values) {

                // });
                console.log('API call successful orange cap', data);
            })
            .catch(error => {
                // Handle any errors
                console.error('API call failed', error);
            });
    }

    function getPurpleCap(season) {
        fetch('https://mplt20.in/wp-json/custom-api/v1/mpl/getstats?tournamentId=' + season +
                '&url=thirdparty/mpl/get-tournament-bowling-leaderboard&value=WICKET')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                var data = data.data[0];
                $('#photo_purple').attr('src', data.profile_photo);
                $('#p_player').text(data.name);
                $('#p_wickets').text(data.total_wickets);
                $('#p_match').text(data.total_match);
                $('#p_avg').text(data.avg);
                // $.each(data.data, function(index, values) {

                // });
                console.log('API call successful purple cap', data);
            })
            .catch(error => {
                // Handle any errors
                console.error('API call failed', error);
            });
    }
});
</script>

<?php 

function getOrange($tournament_id){
    try {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-tournament-batting-leaderboard/'.$tournament_id,
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

        

        // $up_flag = 0;
        // if($live_score['status'] == true){
        //     $up_flag = 1;
        // }
    }
      catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
    return $batting_leader;
}

function getPurple($tournament_id){
    try {

        $curl2 = curl_init();
        curl_setopt_array($curl2, array(
          CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-tournament-bowling-leaderboard/'.$tournament_id,
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

        
    }
      catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
    return $bowling_leader;
}

?>
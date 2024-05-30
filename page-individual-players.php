<?php
/*
 * Template Name: new individual players
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>

<?php 
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-player-batting-season-data/'.$_GET['playerid'],
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
              CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-player-bowling-season-data/'.$_GET['playerid'],
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
              CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-player-tournament-match-batting-data/702687/'.$_GET['playerid'],
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
            $personal_dat =  json_decode($response3,true);

            // $up_flag = 0;
            // if($live_score['status'] == true){
            //     $up_flag = 1;
            // }
        }
          catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
      
        // echo "<pre>";
        // print_r($batting_leader);
        curl_close($curl2);
       
    ?>
<main class="bg-white">
    <div class="stats-banner ">

        <div class="stats-details individualplayer">
            <div class="container d-md-flex">
            <div class="bread-crumb d-md-none mb-5">
                        hOME | individual player
                    </div>
                <div class="statsplayerindiplayer">
                    <img src="<?php echo $personal_dat['data']['player_info']['profile_photo']; ?>"
                        alt="" class="indiplayer">
                </div>

                <div class="theplayersstats">
                    <div class="bread-crumb d-none d-md-block">
                        hOME | individual player
                    </div>
                    <div class="playername text-center text-md-start">
                        <?php echo $personal_dat['data']['player_info']['name']; ?>
                    </div>






                    <div class="individualtable">
                        <div>
                            <div class="statsnumb">2016</div>
                            <div class="statstext">IPL Debut</div>
                        </div>
                        <div>
                            <div class="statsnumb"><?php echo $personal_dat['data']['player_info']['player_role']; ?></div>
                            <div class="statstext">Specialization</div>
                        </div>
                        <div>
                            <div class="statsnumb"><?php echo $personal_dat['data']['player_info']['dob'] != '' ? date("d F Y", strtotime($personal_dat['data']['player_info']['dob'] )) : ''; ?></div>
                            <div class="statstext">Date of Birth</div>
                        </div>
                        <div>
                            <div class="statsnumb"><?php echo count($personal_dat['data']['player_data']); ?></div>
                            <div class="statstext">Matches</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Banner -->
    <div class="fixtures">
        <div class="container">


            <div class="section-title text-dark text-start pt-5 pt-md-5 mb-md-2">
                ABOUT
            </div>
            <p style="color:#504F50;">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium,
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
                veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,</p>

            <div class="section-title text-dark text-start py-md-5 mb-md-3">
                Batting & Fielding Stats
            </div>


            <div class="table-responsive mb-4">
                <table width="100%" class="ih-td-tab text-start indiplayertable">
                    <tbody>
                        <tr class="ih-pt-tbl">
                            <th>Year</th>
                            <th>Mat</th>
                            <th>No</th>
                            <th>Runs</th>
                            <th>Hs</th>
                            <th>AVg</th>
                            <th>BF</th>
                            <th>SR</th>
                            <th>100</th>
                            <th>50</th>
                            <th>4s</th>
                            <th>6s</th>
                            <th>Ct</th>
                            <th>St</th>
                        </tr>
                    </tbody>
                    <tbody id="pointsdata">
                        <?php foreach($batting_leader['data'] as $index => $values) {?>
                        <tr class="team"<?php echo $index;?> >
                            <td><?php echo $values['year']; ?></td>
                            <td><?php echo $values['mat']; ?></td>
                            <td><?php echo $values['no']; ?></td>
                            <td><?php echo $values['runs']; ?></td>
                            <td><?php echo $values['hs']; ?></td>
                            <td><?php echo $values['avg']; ?></td>
                            <td><?php echo $values['bf']; ?></td>
                            <td><?php echo $values['sr']; ?></td>
                            <td><?php echo $values['100s']; ?></td>
                            <td><?php echo $values['50s']; ?></td>
                            <td><?php echo $values['4s']; ?></td>
                            <td><?php echo $values['6s']; ?></td>
                            <td>72</td>
                            <td>21</td>
                        </tr>
                        <?php } ?>
                        <!-- <tr class="team0 ">
                            <td>Career</td>
                            <td>105</td>
                            <td>16</td>
                            <td>3048</td>
                            <td>128*</td>
                            <td>34.64</td>
                            <td>2052</td>
                            <td>148.54</td>
                            <td>1</td>
                            <td>17</td>
                            <td>277</td>
                            <td>141</td>
                            <td>72</td>
                            <td>21</td>
                        </tr>
                        <tr class="team0 ">
                            <td>Career</td>
                            <td>105</td>
                            <td>16</td>
                            <td>3048</td>
                            <td>128*</td>
                            <td>34.64</td>
                            <td>2052</td>
                            <td>148.54</td>
                            <td>1</td>
                            <td>17</td>
                            <td>277</td>
                            <td>141</td>
                            <td>72</td>
                            <td>21</td>
                        </tr>
                        <tr class="team0 ">
                            <td>Career</td>
                            <td>105</td>
                            <td>16</td>
                            <td>3048</td>
                            <td>128*</td>
                            <td>34.64</td>
                            <td>2052</td>
                            <td>148.54</td>
                            <td>1</td>
                            <td>17</td>
                            <td>277</td>
                            <td>141</td>
                            <td>72</td>
                            <td>21</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>

            <div class="section-title text-dark text-start mt-md-5 mb-md-3">
                Bowling
            </div>


            <div class="table-responsive mb-4">
                <table width="100%" class="ih-td-tab text-start indiplayertable">
                    <tbody>
                        <tr class="ih-pt-tbl">
                            <th>Year</th>
                            <th>Mat</th>
                            <th>Balls</th>
                            <th>Runs</th>
                            <th>WKTS</th>
                            <th>BBM</th>
                            <th>AVG</th>
                            <th>Econ</th>
                            <th>SR</th>
                            <th>4W</th>
                            <th>5w</th>
                        </tr>
                    </tbody>
                    <tbody id="pointsdata">
                        <?php foreach($bowling_leader['data'] as $index => $values) {?>
                        <tr class="team"<?php echo $index;?> >
                            <td><?php echo $values['year'];?></td>
                            <td><?php echo $values['mat'];?></td>
                            <td><?php echo $values['balls'];?></td>
                            <td><?php echo $values['runs'];?></td>
                            <td><?php echo $values['wickets'];?></td>
                            <td><?php echo $values['bbm'];?></td>
                            <td><?php echo $values['ave'];?></td>
                            <td><?php echo $values['econ'];?></td>
                            <td><?php echo $values['sr'];?></td>
                            <td><?php echo $values['4_wickets'];?></td>
                            <td><?php echo $values['5_wickets'];?></td>
                        </tr>
                        <?php } ?>
                        <!-- <tr class="team0 ">
                            <td>Career</td>
                            <td>105</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr class="team0 ">
                            <td>Career</td>
                            <td>105</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr class="team0 ">
                            <td>Career</td>
                            <td>105</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr class="team0 ">
                            <td>Career</td>
                            <td>105</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>0</td>
                            <td>0</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>

            <div class="section-title text-start mt-md-5 mb-md-2">
                Rest Of the Squad
            </div>


            <div class="owl-carousel squadcarousel mt-5" data-aos="fade-up" data-aos-duration="1500">

                <?php  for ($i=1; $i < 8; $i++) { 
                 
             ?>
            
            <div class="squad-card">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/squadcard.png" alt="">
            <div class="squadbody">
                <div class="squad-player-name">
                    David Warner
                </div>
                <div class="squad-player-role">
                    Batter
                </div>
            </div>
        </div>
        <?php     }    ?>

            </div>
        </div>
    </div>
</main>

<?php get_footer("footer2"); ?>
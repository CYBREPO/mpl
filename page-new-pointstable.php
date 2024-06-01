<?php
/*
 * Template Name: New pointstable
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>


<main class="bg-light">
    <?php include 'components/page-title-header.php';?>

    <?php 
        try {
            $data='';
            $d = [];
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-tournament-point-table/702687',
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
            $points_table =  json_decode($response,true);

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

            

        }
          catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
      
        // echo "<pre>";
        // print_r($points_table);
        // curl_close($curl);
       
        ?>

    <!-- Banner -->
    <div class="points-table pb-5 page-pattern">
        <div class="container">
            <div class="dropdown py-4 py-md-5">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?php echo $filters['data']['season'][1]['key']?>
                    <!-- Season 2024 -->
                </button>
                <ul class="dropdown-menu">
                    <?php foreach($filters['data']['season'] as $k) { if($k['value'] != -1){?>
                        <li><a class="dropdown-item" href="" data-action="<?php echo $k['value'];?>"><?php echo $k['key']; ?></a></li>
                    <?php }} ?>
                    <!-- <li><a class="dropdown-item" href="" data-action="action1">Action</a></li>
                    <li><a class="dropdown-item" href="" data-action="action2">Another action</a></li>
                    <li><a class="dropdown-item" href="" data-action="action3">Something else here</a></li> -->
                </ul>
            </div>
            <div class="table-responsive mb-4">
                <table width="100%" class="ih-td-tab">
                    <tbody>
                        <tr class="ih-pt-tbl" style="display:revert;">
                            <th>POS</th>
                            <th style="text-align: left;">TEAM</th>
                            <th>P</th>
                            <th>W</th>
                            <th>L</th>
                            <th>NR</th>
                            <th>NRR</th>
                            <th>PTS</th>
                            <th class="text-white mob-hide text-start">RECENT FORM</th>
                        </tr>
                    </tbody>
                    <tbody id="pointsdata">
                        <?php 
                            foreach($points_table['data'] as $index => $value){
                        ?>
                        <tr class="team"<?php echo $index; ?> >

                            <td class="table-qualified  "><?php echo $index+1; ?> </td>
                            <td class="ih-t-color">
                                <div class="ih-pt-ic ">
                                    <div class="ih-pt-img"> <img alt=""
                                            src="<?php echo $value['team_logo']?>">
                                    </div>

                                    <h2 class="ih-pt-cont mb-0 "><?php echo $value['Team Name']?></h2>
                                </div>
                            </td>
                            <td><?php echo $value['Matches']; ?></td>
                            <td><?php echo $value['Won']; ?></td>
                            <td><?php echo $value['Lost']; ?></td>
                            <td><?php echo $value['N/R']; ?></td>
                            <td><?php echo $value['Net RR']; ?></td>
                            <td class="bt "><?php echo $value['Points']; ?></td>
                            <td class="ih-pt-fb-w mob-hide ">
                                <?php 
                                    $last_results = explode("-",$value['Last 5']);
                                ?>
                                <div class="ih-pt-fb " style="justify-content: center">
                                    <?php foreach($last_results as $k) { 
                                        $class  = $k == 'W' ? 'rf W ih-pt-g' : 'rf L ih-pt-r';
                                        ?>
                                        <span class="<?php echo $class; ?>"><?php echo $k; ?></span>
                                   <?php } ?>
                                </div>
                                <!-- <div class="ih-pt-fb " style="justify-content: center">
                                    <span class="rf W ih-pt-g">W</span><span class="rf W ih-pt-g">W</span><span
                                        class="rf W ih-pt-g">W</span><span class="rf W ih-pt-g">W</span><span
                                        class="rf L ih-pt-r">L</span>
                                </div> -->
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- <div class="table-responsive">
                <table width="100%" class="ih-td-tab">
                    <tbody>
                        <tr class="ih-pt-tbl" style="display:revert;">
                            <th>POS</th>
                            <th style="text-align: left;">TEAM</th>
                            <th>P</th>
                            <th>W</th>
                            <th>L</th>
                            <th>NR</th>
                            <th>NRR</th>
                            <th>PTS</th>
                            <th class="text-white mob-hide text-start">RECENT FORM</th>
                        </tr>
                    </tbody>
                    <tbody id="pointsdata">
                        <tr class="team0 ">

                            <td class="table-qualified  ">1 </td>
                            <td class="ih-t-color">
                                <div class="ih-pt-ic ">
                                    <div class="ih-pt-img"> <img alt=""
                                            src="https://scores.iplt20.com/ipl/teamlogos/RR.png?v=2">
                                    </div>

                                    <h2 class="ih-pt-cont mb-0 ">RR</h2>
                                </div>
                            </td>
                            <td>9</td>
                            <td>8</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0.694</td>
                            <td class="bt ">16</td>
                            <td class="ih-pt-fb-w mob-hide ">
                                <div class="ih-pt-fb " style="justify-content: center">
                                    <span class="rf W ih-pt-g">W</span><span class="rf W ih-pt-g">W</span><span
                                        class="rf W ih-pt-g">W</span><span class="rf W ih-pt-g">W</span><span
                                        class="rf L ih-pt-r">L</span>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div> -->
        </div>
    </div>
</main>

<?php  get_footer("footer2"); ?>
<script>

$(document).ready(function() {
     
    $('.dropdown-item').on('click', function(e) {
        e.preventDefault(); 
        
        var action = $(this).data('action'); 
        
        fetch('https://staging.mplt20.in/wp-json/custom-api/v1/mpl/getPointsTable?tournamentId='+action)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Handle the response from the API
            $('#pointsdata').empty();
            //console.log(data.data);
            $.each(data.data, function(index, value) {
                    var last_results = value['Last 5'].split("-");
                    var row = '<tr class="team">' +
                        '<td class="table-qualified">' + (index + 1) + '</td>' +
                        '<td class="ih-t-color">' +
                        '<div class="ih-pt-ic">' +
                        '<div class="ih-pt-img"><img alt="" src="' + value['team_logo'] + '"></div>' +
                        '<h2 class="ih-pt-cont mb-0">'+ value['Team Name'] +'</h2>' +
                        '</div>' +
                        '</td>' +
                        '<td>' + value['Matches'] + '</td>' +
                        '<td>' + value['Won'] + '</td>' +
                        '<td>' + value['Lost'] + '</td>' +
                        '<td>' + value['N/R'] + '</td>' +
                        '<td>' + value['Net RR'] + '</td>' +
                        '<td class="bt">' + value['Points'] + '</td>' +
                        '<td class="ih-pt-fb-w mob-hide">';
                    
                    // Add last 5 results
                    row += '<div class="ih-pt-fb" style="justify-content: center">';
                    $.each(last_results, function(k, result) {
                        var class_name = result == 'W' ? 'rf W ih-pt-g' : 'rf L ih-pt-r';
                        row += '<span class="' + class_name + '">' + result + '</span>';
                    });
                    row += '</div>';

                    // Close the row
                    row += '</td></tr>';
                    
                    // Append the row to the tbody
                    $('#pointsdata').append(row);
            });
            console.log('API call successful', data);
        })
        .catch(error => {
            // Handle any errors
            console.error('API call failed', error);
        });
        
    });
});
</script>
<?php
/*
 * Template Name: new fixtures
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>


<main class="bg-light">
<?php 
        try {
            $data='';
            $d = [];
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-tournament-match-list/1029866?type=&teamId=&order=ASC',
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
            $tournament_list =  json_decode($response,true);

            $curl2 = curl_init();
            curl_setopt_array($curl2, array(
              CURLOPT_URL => 'https://cricheroes.in/api/v1/thirdparty/mpl/get-tournament-stat-leaderboard-filter/1029866',
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
        // print_r($tournament_list);
        curl_close($curl);
       
        ?>


    <?php include 'components/page-title-header.php';?>
    <!-- Banner -->
    <div class="fixtures page-pattern">
        <div class="container">
            <select id="seasonSelect" class="form-select" aria-label="Default select example">
                <?php foreach($filters['data']['season'] as $k) { if($k['value'] != -1){?>
                    <option value="<?php echo $k['value'];?>"><?php echo $k['key'];?></option>
                <?php }} ?>
            </select>
            <div id="fixtures-container">
                <?php foreach($tournament_list['data'] as $index => $values){ ?>
                <div class="fixture">
                <div class="fixture-head">
                    <div class="matchname">MATCH <?php echo $index + 1;?></div>
                    <?php 
                    if($values['match_result'] == 'Resulted') { ?>
                    <div><?php echo $values['match_summary']['summary']; ?></div>
                    <?php } else { ?>
                        <div></div>
                    <?php } ?>
                </div>

                <div class="fixtures-body">
                    <div class="d-md-flex">
                        <img decoding="async"
                            src="https://eav76vtooc4.exactdn.com/wp-content/uploads/2024/04/MPL-FINAL-LOGO-02-1-e1713525502173.png?strip=all&amp;lossy=1&amp;ssl=1&amp;fit=284,237"
                            alt="" class="fixteamimage">


                        <div class="fixtures-schedule">
                            <div class="fixtures-schedule-date">
                                <!-- THU, 15TH JUNE <b>19:30</b> -->
                                <?php echo date("D, jS F", strtotime($values['match_date_time']));?>
                            </div>
                            <!-- TODO bind the location-->
                            <?php echo $values['ground_name']; ?>
                            <!-- Arun Jaitley Stadium, Delhi -->
                        </div>
                    </div>


                    <div class="d-flex align-items-center ms-auto flex-column flex-md-row justify-content-center fixturesrow">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="fixture-run fixture-run1">
                                <div>
                                    <?php echo $values['team_a_summary']; ?>
                                </div>
                                <div>
                                    <?php echo $values['team_a_innings'][0]['summary']['over']; ?>
                                </div>
                            </div>

                            <img src="<?php echo $values['team_a_logo']; ?>"
                                alt="" class="versusteamimage">
                        </div>

                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/versusfixtures.svg"
                            alt="" class="fixtures-versus">

                        <div class="d-flex align-items-center justify-content-between ">
                            <img src="<?php echo $values['team_b_logo']; ?>"
                                alt="" class="versusteamimage">

                            <div class="fixture-run fixture-run2">
                                <div>
                                    <?php echo $values['team_b_summary']; ?>
                                </div>
                                <div>
                                    <?php echo $values['team_b_innings'][0]['summary']['over']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer("footer2"); ?>

<script>

$(document).ready(function() {
     
    $('#seasonSelect').on('change', function(e) {
        e.preventDefault(); 
        
        var action = $(this).val(); 
        
        fetch('https://staging.mplt20.in/wp-json/custom-api/v1/mpl/getFixtures?tournamentId='+action)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            $('#fixtures-container').empty();

            // Iterate through the new data and build the fixtures
            $.each(data.data, function(index, values) {
                var formattedDate = formatDateTime(values.match_date_time);
                var fixtureHTML = `
                <div class="fixture">
                <div class="fixture-head">
                <div class="matchname">MATCH ${index + 1}</div>
                ${values.match_result == 'Resulted' || 'abandoned'? `<div>${values.match_summary.summary}</div>` : `<div>${values.match_summary.summary}</div>` }
                </div>
                <div class="fixtures-body">
                <div class="d-md-flex">
                    <img decoding="async"
                        src="https://eav76vtooc4.exactdn.com/wp-content/uploads/2024/04/MPL-FINAL-LOGO-02-1-e1713525502173.png?strip=all&amp;lossy=1&amp;ssl=1&amp;fit=284,237"
                        alt="" class="fixteamimage">
                    <div class="fixtures-schedule">
                        <div class="fixtures-schedule-date">
                            ${formattedDate}</b>
                        </div>
                            ${values.ground_name}
                    </div>
                </div>
                <div class="d-flex align-items-center ms-auto flex-column flex-md-row justify-content-center fixturesrow">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="fixture-run fixture-run1">
                            <div>${values.team_a_summary}</div>
                            <div>${values.team_a_innings?.[0]?.summary?.over ?? ' '}</div>
                        </div>
                        <img src="${values.team_a_logo}" alt="" class="versusteamimage">
                    </div>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/versusfixtures.svg"
                        alt="" class="fixtures-versus">
                    <div class="d-flex align-items-center justify-content-between ">
                        <img src="${values.team_b_logo}" alt="" class="versusteamimage">
                        <div class="fixture-run fixture-run2">
                            <div>${values.team_b_summary}</div>
                            <div>${values.team_b_innings?.[0]?.summary?.over ?? ' '}</div>
                        </div>
                    </div>
                </div>
                </div>
                </div>`;
                $('#fixtures-container').append(fixtureHTML);
            });
            console.log('API call successful', data);
        })
        .catch(error => {
            // Handle any errors
            console.error('API call failed', error);
        });
        
    });


    function formatDateTime(dateString) {
        const date = new Date(dateString);

        const weekdays = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        function getOrdinalSuffix(day) {
            if (day > 3 && day < 21) return 'th';
            switch (day % 10) {
                case 1: return 'st';
                case 2: return 'nd';
                case 3: return 'rd';
                default: return 'th';
            }
        }

        const day = date.getUTCDate();
        const dayWithSuffix = day + getOrdinalSuffix(day);

        // const hours = date.getUTCHours().toString().padStart(2, '0');
        // const minutes = date.getUTCMinutes().toString().padStart(2, '0');

        const formattedDate = `${weekdays[date.getUTCDay()]}, ${dayWithSuffix} ${months[date.getUTCMonth()]} `;
        return formattedDate;
    }
});
</script>
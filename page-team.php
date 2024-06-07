<?php
/*
 * Template Name: Teams
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>

<?php echo $_GET['id'] ?>

<main class="bg-white">
    <section class="position-relative teamstab-cover">
       

        <ul class="nav nav-tabs teamstab" id="myTab" role="tablist">

            <?php $teamlogos = ["solapur",
"ratnagiri",
"puneri",
"eagle",
"chatrapati",
"kolhapur"
];
foreach ($teamlogos as $key => $value) {

    $key++

?>

            <li class="nav-item" role="presentation">
                <button class="nav-link teamstabstab <?php echo $key === 1 ? 'active' : ''; ?>"
                    id="taab<?php echo $key ?>-tab" data-bs-toggle="tab" data-bs-target="#taab<?php echo $key ?>-tab-pane"
                    type="button" role="tab" aria-controls="taab<?php echo $key ?>-tab-pane" aria-selected="true"> <img
                        src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/team<?php echo $key ?>.png"
                        alt=""></button>
            </li>
            <?php } ?>
        </ul>


    </section>
    <!-- Banner -->


    <div class="tab-content" id="myTabContent">

    
        <div class="tab-pane fade show active" id="taab1-tab-pane" role="tabpanel" aria-labelledby="taab1-tab"
            tabindex="0">
            <div class="teamtable">
                <div class="container">
                   
                    <div class="captain-header">
                        Captain - Vishant More
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/wkt.svg" alt="" style="filter: invert(1);">
                    </div>

                    <div class="row playerandrole">


                        <?php 
                        $SOLAPUR = [
                                    ['player' => "Vyankatesh Kane",'role'=>'batter'],
                                    ['player' =>"Omkar Rajput",'role' =>"allrounder"],
                                    ['player' =>"Sunil Yadav ",'role' =>"allrounder"],
                                    ['player' =>"Harshavardhan Tingre",'role' =>"allrounder"],
                                    ['player' =>"Naushad Shaikh",'role' =>"allrounder"],
                                    ['player' =>"Siddhesh Veer",'role' =>"allrounder"],
                                    ['player' =>"Tanay Sanghvi",'role' =>"allrounder"],
                                    ['player' =>"Sujit Ubale ",'role' =>"allrounder"],
                                    ['player' =>"Bhushan Gole ",'role' =>"allrounder"],
                                    ['player' =>"Rushabh Rathod",'role' =>"wkt"],
                                    ['player' =>"Mehul Patel ",'role' =>"batter"],
                                    ['player' =>"Devdutt Natu ",'role' =>"batter"],
                                    ['player' =>"Abhinav Bhatt",'role' =>"batter"],
                                    ['player' =>"Vaibhav Agam ",'role' =>"wkt"],
                                    ['player' =>"Vedant Patil ",'role' =>"batter"],
                                    ['player' =>"Rohan Marwah ",'role' =>"batter"],
                                    ['player' =>"Yash Nahar ",'role' =>"batter"],
                                    ['player' =>"Ajay Borude",'role' =>"batter"],
                                    ['player' =>"Vicky Ostwal ",'role' =>"bowler"],
                                    ['player' =>"Snehal Kamankar ",'role' =>"bowler"],
                                    ['player' =>"Ravi Jangid ",'role' =>"bowler"],
                                    ['player' =>"Savya Gajraj ",'role' =>"bowler"],
                                    ['player' =>"Nikhil Kadam ",'role' =>"bowler"],
                                    ['player' =>"Nadeem Shaikh ",'role' =>"bowler"],
                                    ['player' =>"Jitendra Jadhav ",'role' =>"bowler"],
                                    ['player' =>"Aman Doshi ",'role' =>"bowler"],
                                    ['player' =>"Prathamesh Gawade",'role' =>"bowler"],
                                    ['player' =>"Ayush Kabra ",'role' =>"bowler"],
                                    ['player' =>"Manoj Ingale ",'role' =>"bowler"],
                                    ['player' =>"Pratik Mhatre",'role' =>"bowler"],
                                    ['player' =>"Nimir Joshi",'role' =>"bowler"],
                                    ['player' =>"Shubham Kadam",'role' =>"bowler"]
                                ];
                            ?>

                        <?php for ($i = 0; $i < count($SOLAPUR); $i++) {

                            ?>
                        <div class="col-md-6">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/<?php echo $SOLAPUR[$i]['role'] ?>.svg"
                                alt="" class="">
                            <?php echo $SOLAPUR[$i]['player'] ?>

                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>



        <div class="tab-pane fade" id="taab2-tab-pane" role="tabpanel" aria-labelledby="taab2-tab" tabindex="0">
            <div class="teamtable">
                <div class="container">
                    <!-- <div class="team-superiors">
                 
                    </div> -->

                    <div class="captain-header">
                        Captain - Azim Kazi
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/allrounder.svg" alt="" style="filter: invert(1);" />
                    </div>

                    <div class="row playerandrole">
           

                        <?php  $RATNAGIRI = array(

                                ['player' => "Sangram Bhalekar",'role'=>'allrounder'],
                                ['player' => "Yash Borkar",'role'=>'allrounder'],
                                ['player' => "Satyajeet Bachhav",'role'=>'allrounder'],
                                ['player' => "Sahil Churi",'role'=>'allrounder'],
                                ['player' => "Dhiraj Phatangare",'role'=>'allrounder'],
                                ['player' => "Divyang Hinganekar",'role'=>'allrounder'],
                                ['player' => "Kiran Chormale",'role'=>'allrounder'],
                                ['player' => "Krish Shahapurkar",'role'=>'allrounder'],
                                ['player' => "Preetam Patil",'role'=>'allrounder'],
                                ['player' => "Rohit Patil",'role'=>'allrounder'],
                                ['player' => "Vaibhav Chowgule",'role'=>'allrounder'],
                                ['player' => "Vijay Pawale",'role'=>'allrounder'],
                                ['player' => "Nikhil Naik",'role'=>'wkt'],
                                ['player' => "Abhishek Pawar",'role'=>'wkt'],
                                ['player' => "Tushar Shrivastav",'role'=>'batter'],
                                ['player' => "Akhilesh Gawale",'role'=>'batter'],
                                ['player' => "Kunal Thorat",'role'=>'bowler'],
                                ['player' => "Nikit Dhumal",'role'=>'bowler'],
                                ['player' => "Pradeep Dadhe",'role'=>'bowler'],
                                ['player' => "Piyush Kamal",'role'=>'bowler'],
                                ['player' => "Yogesh Chavan",'role'=>'bowler']

                                                            );
                                                            ?>

                                                        
                                                        
                                                        
                                                        <?php for ($i = 0; $i < count($RATNAGIRI); $i++) {
                                                        
                                ?>
                        <div class="col-md-6">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/<?php echo $RATNAGIRI[$i]['role'] ?>.svg"
                                alt="" class="">
                            <?php echo $RATNAGIRI[$i]['player'] ?>

                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="taab3-tab-pane" role="tabpanel" aria-labelledby="taab3-tab" tabindex="0">
            <div class="teamtable">
                <div class="container">
                  

                    <div class="captain-header">
                        Captain - Ruturaj Gaikwad

                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batter.svg" alt="" style="filter: invert(1);">
                    </div>

                    <div class="row playerandrole">


                        <?php  $puneri = array(
                     
                     

                     ['player' => "Rahul Desai",'role' => 'allrounder'],
['player' => "Rohan Damle",'role' => 'allrounder'],
['player' => "Aayush Raktade",'role' => 'allrounder'],
['player' => "Neel Gandhi",'role' => 'allrounder'],
['player' => "Shubham Taiswal",'role' => 'allrounder'],
['player' => "Devansh Tandel",'role' => 'allrounder'],
['player' => "Abhimanyu Jadhav",'role' => 'batter'],
['player' => "Pavan Shah",'role' => 'batter'],
['player' => "Yash Kshirsagar",'role' => 'batter'],
['player' => "Shripad Nimbalkar",'role' => 'batter'],
['player' => "Suraj Shinde",'role' => 'wkt'],
['player' => "Sahil Autade",'role' =>'wkt'],
['player' => "Roshan Waghsare",'role' => 'bowler'],
['player' => "Ramakrishna Ghosh",'role' => 'bowler'],
['player' => "Rohan Kharat",'role' => 'bowler'],
['player' => "Vivek Shelar",'role' => 'bowler'],
['player' => "Sachin Bhosale",'role' => 'bowler'],
['player' => "Atif Sayyed",'role' => 'bowler'],
['player' => "Piyush Salvi",'role' => 'bowler'],
['player' => "Sohan Jamale",'role' => 'bowler'],




                            );
                            ?>

                        <?php for ($i = 0; $i < count($puneri); $i++) {

?>
                        <div class="col-md-6">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/<?php echo $puneri[$i]['role'] ?>.svg"
                                alt="" class="">
                            <?php echo $puneri[$i]['player'] ?>

                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="taab4-tab-pane" role="tabpanel" aria-labelledby="taab4-tab" tabindex="0">
            <div class="teamtable">
                <div class="container">
                    <!-- <div class="team-superiors">

                       
                    </div> -->

                    <div class="captain-header">
                        Captain - Prashant Solanki
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/bowler.svg" alt="" style="filter:invert(1)">
                    </div>

                    <div class="row playerandrole">
                 

                        <?php  $EAGLE = array(
         ['player' =>"Shubham Kadam",'role' =>"bowler"],
                      ['player' =>'Arshin Kulkarni','role'=>'allrounder'],
                      ['player' =>'Athava Kale','role'=>'allrounder'],
                      ['player' =>'Dhanraj Shinde','role'=>'allrounder'],
                      ['player' =>'Digvijay Deshmukh','role'=>'allrounder'],
                      ['player' =>'Hari Sawant','role'=>'allrounder'],
                      ['player' =>'Niraj Joshi','role'=>'allrounder'],
                      ['player' =>'Atharva Dharmadhikari ','role'=>'batter'],
                      ['player' =>'Kaushal Tambe ','role'=>'batter'],
                      ['player' =>'Ranjit Nikam','role'=>'batter'],
                      ['player' =>'Rohit Hadke ','role'=>'batter'],
                      ['player' =>'Sahil Parakh ','role'=>'batter'],
                      ['player' =>'Siddhant Doshi ','role'=>'batter'],
                      ['player' =>'Mandar Bhandari ','role'=>'wkt'],
                      ['player' =>'Sharwin Kisave ','role'=>'wkt'],
                      ['player' =>'Akshay Waikar ','role'=>'bowler'],
                      ['player' =>'Hardik Kurangale','role'=>'bowler'],
                      ['player' =>'Razeq Fallah','role'=>'bowler'],
                      ['player' =>'Samadhan Pangare','role'=>'bowler'],
                      ['player' =>'Mukesh Choudhary','role'=>'bowler'],
                      ['player' =>'Rehan Khan','role'=>'bowler']);
                            ?>

                        <?php for ($i = 0; $i < count($EAGLE); $i++) {

?>
                        <div class="col-md-6">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/<?php echo $EAGLE[$i]['role'] ?>.svg"
                                alt="" class="">
                            <?php echo $EAGLE[$i]['player'] ?>

                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="taab5-tab-pane" role="tabpanel" aria-labelledby="taab5-tab"
            tabindex="0">
            <div class="teamtable">
                <div class="container">
                    <div class="captain-header">
                        Captain - Murtaza Trunkwala
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batter.svg" alt="" style="filter:invert(1)">
                    </div>

                    <div class="row playerandrole">
                

                        <?php  $CHHATRAPTI = array(
                    
                    
                     ['player' =>'Rajwardhan Hangargekar','role'=>'allrounder'],
 ['player' =>'Nagesh Rege','role'=>'allrounder'],
 ['player' =>'Shamshuzama Kazi','role'=>'allrounder'],
 ['player' =>'Digvijay Jadhav','role'=>'batter'],
 ['player' =>'Saurabh Singh','role'=>'batter'],
 ['player' =>'Om Bhosale','role'=>'batter'],
 ['player' =>'Harshal Kate','role'=>'batter'],
 ['player' =>'Omkar Khatpe','role'=>'batter'],
 ['player' =>'Digvijay Patil','role'=>'batter'],
 ['player' =>'Anurag Kawade','role'=>'wkt'],
 ['player' =>'Saurabh Navale','role'=>'wkt'],
 ['player' =>'Rameshwar Daud','role'=>'bowler'],
 ['player' =>'Yogesh Chavan','role'=>'bowler'],
 ['player' =>'Yatin Mangwani','role'=>'bowler'],
 ['player' =>'Pranay Singh','role'=>'bowler'],
 ['player' =>'Hitesh Walunj','role'=>'bowler'],
 ['player' =>'Shubham Kothari','role'=>'bowler'],
 ['player' =>'Anand Thenge','role'=>'bowler'],
 ['player' =>'Deepak Dangi','role'=>'bowler'],
 ['player' =>'Swaraj Chavan','role'=>'bowler']



                            );
                            ?>

<?php for ($i = 0; $i < count($CHHATRAPTI); $i++) {

?>
                        <div class="col-md-6">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/<?php echo $CHHATRAPTI[$i]['role'] ?>.svg"
                                alt="" class="">
                            <?php echo $CHHATRAPTI[$i]['player'] ?>

                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="taab6-tab-pane" role="tabpanel" aria-labelledby="taab6-tab" tabindex="0">
            <div class="teamtable">
                <div class="container">


                    <div class="captain-header">
                        Captain - Rahul Tripathi
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/allrounder.svg" alt="" style="filter:invert(1)">
                    </div>

                    <div class="row playerandrole">
                  

                        <?php  $KOLHAPUR = array(
                   array('player' => 'Shrikant Mundhe', 'role' => 'allrounder'),
                   array('player' => 'Kedar Jadhav', 'role' => 'allrounder'),
                   array('player' => 'Aniket Porwal', 'role' => 'wkt'),
                   array('player' => 'Kirtiraj Wadekar', 'role' => 'batter'),
                   array('player' => 'Siddharth Mhatre', 'role' => 'batter'),
                   array('player' => 'Yogesh Dongare', 'role' => 'batter'),
                   array('player' => 'Sachin Dhas', 'role' => 'batter'),
                   array('player' => 'Ankeet Bawane', 'role' => 'batter'),
                   array('player' => 'Harsh Sanghavi', 'role' => 'batter'),
                   array('player' => 'Hrishikesh Daund', 'role' => 'batter'),
                   array('player' => 'Manoj Yadav', 'role' => 'bowler'),
                   array('player' => 'Harshal Mishra', 'role' => 'bowler'),
                   array('player' => 'Umar Shah', 'role' => 'bowler'),
                   array('player' => 'Bhushan Navande', 'role' => 'bowler'),
                   array('player' => 'Atharva Dakway', 'role' => 'bowler'),
                   array('player' => 'Yash Khaladkar', 'role' => 'bowler'),
                   array('player' => 'Shreyas Chavan', 'role' => 'bowler'),
                   array('player' => 'Taranjitsingh Dhillon', 'role' => 'bowler'),
                   array('player' => 'Sumit Markali', 'role' => 'bowler'),
                   array('player' => 'Nihal Tusamad', 'role' => 'bowler')
                            );
                            ?>

<?php for ($i = 0; $i < count($KOLHAPUR); $i++) {

?>
                        <div class="col-md-6">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/<?php echo $KOLHAPUR[$i]['role'] ?>.svg"
                                alt="" class="">
                            <?php echo $KOLHAPUR[$i]['player'] ?>

                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>

<?php  get_footer("footer2"); ?>
<?php
/*
 * Template Name: Teams
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>

<!--  echo $_GET['id'] -->

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
                    id="taab<?php echo $key ?>-tab" data-bs-toggle="tab"
                    data-bs-target="#taab<?php echo $key ?>-tab-pane" type="button" role="tab"
                    aria-controls="taab<?php echo $key ?>-tab-pane" aria-selected="true"> <img
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
                        Team owners

                    </div>
                    <div class="circles-container">
                        <div>
                            <div class="circle">
                                <img  src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/raigad/WhatsApp Image 2024-04-18 at 17.24.25_68bc5599.jpg"
                                    alt="">
                            </div>
                            <div class="circle-content">Kapil Baheti</div>
                        </div>
                        <div>
                            <div class="circle">
                                <img style="object-position: top;" src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/raigad/Alisha Baheti.jpg"
                                    alt="">
                            </div>
                            <div class="circle-content">ALISHA BAHETI</div>
                        </div>
                        

                    </div>
                    <div class="text-container">
                        <?php 
                        $raigadownere = [
                                    ['player'=>'Team Director','role'=>'Parag More'],
                                ['player'=>'Head Coach','role'=>'Chaminda Vaas'],
                                ['player'=>'Assistant Coach','role'=>'Shirish Kamthe'],
                                ['player'=>'Batting Coach','role'=>'Shailesh Bhonsle'],
                                ['player'=>'Bowling Coach','role'=>'Salil Agharkar'],
                                ['player'=>'Bowling Coach','role'=>'Anupam Sanklecha'],
                                ['player'=>'Fielding Coach','role'=>'Chetan Padiyar'],
                                                                    
                                                                ];
                                                            ?>
                        <?php for ($i = 0; $i < count($raigadownere); $i++) {
                                
                                ?>

                        <div class="text-block"><span class="role"><?php echo $raigadownere[$i]['player'] ?></span>
                            <div class="name"><?php echo $raigadownere[$i]['role'] ?></div>
                        </div>
                        <?php }  ?>
                    </div>

                    <div class="captain-header">
                        Captain - Vishant More
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/wkt.svg" alt=""
                            style="filter: invert(1);">
                    </div>

                    <div class="row playerandrole">


                        <?php 
                        $SOLAPUR = [
                                  
                                    ['player'=>'VISHANT MORE','role'=>'wkt'],
                                    ['player'=>'RUSHABH RATHOD','role'=>'wkt'],
                                    ['player'=>'VAIBHAV AGAM','role'=>'wkt'],
                                    ['player' => "Vyankatesh Kane",'role'=>'batter'],
                                    ['player'=>'YASH NAHAR','role'=>'batter'],
                                    ['player'=>'MEHUL PATEL','role'=>'batter'],
                                    ['player'=>'ROHAN MARWAH','role'=>'batter'],
                                    ['player'=>'AJAY BORUDE','role'=>'batter'],
                                    ['player'=>'VEDANT PATIL','role'=>'batter'],
                                    ['player'=>'ONKAR RAJPUT','role'=>'allrounder'],
                                    ['player'=>'SUNIL YADAV','role'=>'allrounder'],
                                    ['player'=>'SIDDHESH VEER','role'=>'allrounder'],
                                    ['player'=>'TANAY SANGHAVI','role'=>'allrounder'],
                                    ['player'=>'VICKY OSTWAL','role'=>'bowler'],
                                    ['player'=>'PRATHAMESH GAWADE','role'=>'bowler'],
                                    ['player'=>'MANOJ INGALE','role'=>'bowler'],
                                    ['player'=>'SNEHAL KHAMANKAR','role'=>'bowler'],
                                    ['player'=>'RAVI JANGID','role'=>'bowler'],
                                    ['player'=>'SAVYA GAJRAJ','role'=>'bowler'],
                                    ['player'=>'NIKHIL KADAM','role'=>'bowler'],
                                    ['player'=>'NADEEM SHAIKH','role'=>'bowler'],
                                    ['player'=>'SHUBHAM KADAM','role'=>'bowler'],
                                    ['player'=>'AYUSH KABRA','role'=>'bowler'],
                                    ['player'=>'NIMIR JOSHI','role'=>'bowler'],
                                    
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
                    <div class="captain-header">
                        Team owners

                    </div>
                    <div class="circles-container">
                        <div>
                            <div class="circle">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/ratnagiri/RAJAN.webp"
                                    alt="">
                            </div>
                            <div class="circle-content">RAJAN NAVANI</div>
                        </div>
                        <div>
                            <div class="circle">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/ratnagiri/RAKESH.webp"
                                    alt="">
                            </div>
                            <div class="circle-content">RAKESH NAVANI</div>
                        </div>
                    </div>
                    <div class="text-container">
                        <?php 
                        $ratnaower = [
                                    ['player'=>'CEO','role'=>'Praful Chandawarkar'],
                                    ['player'=>'COO','role'=>'Sharan Singh'],
                                    ['player'=>'Head Coach','role'=>'Ranjit Pande'],
                                    ['player'=>'Team Manager ','role'=>'Farhad Patel'],
                                                                    
                                                                ];
                                                            ?>
                        <?php for ($i = 0; $i < count($ratnaower); $i++) {
                                
                                ?>

                        <div class="text-block"><span class="role"><?php echo $ratnaower[$i]['player'] ?></span>
                            <div class="name"><?php echo $ratnaower[$i]['role'] ?></div>
                        </div>
                        <?php }  ?>
                    </div>

                    <div class="captain-header">
                        Captain - Azim Kazi
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/allrounder.svg"
                            alt="" style="filter: invert(1);" />
                    </div>

                    <div class="row playerandrole">


                        <?php  $RATNAGIRI = array(

                                ['player' => "NIKHIL NAIK",'role'=>'wkt'],
                                ['player' => "ABHISHEK PAWAR",'role'=>'wkt'],
                                ['player' => "AKHILESH GAWALE",'role'=>'batter'],
                                ['player' => "TUSHAR SRIVASTAV",'role'=>'batter'],
                                ['player' => "VIJAY PAVLE",'role'=>'allrounder'],
                                ['player' => "DIVYANG HINGANEKAR",'role'=>'allrounder'],
                                ['player' => "ROHIT PATIL",'role'=>'allrounder'],
                                ['player' => "KIRAN CHORMALE",'role'=>'allrounder'],
                                ['player' => "DHIRAJ PHATANGARE",'role'=>'allrounder'],
                                ['player' => "PREETAM PATIL",'role'=>'allrounder'],
                                ['player' => "KRISH SHAHAPURKAR",'role'=>'allrounder'],
                                ['player' => "SAHIL CHURI",'role'=>'allrounder'],
                                ['player' => "SATYAJEET BACHHAV",'role'=>'allrounder'],
                                ['player' => "VAIBBHAV CHOUGALLE",'role'=>'allrounder'],
                                ['player' => "SANGRAM BHALEKAR",'role'=>'allrounder'],
                                ['player' => "YASH BORKAR",'role'=>'allrounder'],
                                ['player' => "NIKIT DHUMAL",'role'=>'bowler'],
                                ['player' => "PRADEEP DADHE",'role'=>'bowler'],
                                ['player' => "KUNAL THORAT",'role'=>'bowler'],
                                ['player' => "YOGESH CHAVAN",'role'=>'bowler'],
                                ['player' => "PIYUSH KAMAL",'role'=>'bowler'],
                                

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
                        Team owners

                    </div>
                    <div class="circles-container">
                        <div>
                            <div class="circle">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/puneri/Vishal Chordia.jpg"
                                    alt="">
                            </div>
                            <div class="circle-content">VISHAL CHORDIA</div>
                        </div>
                        <div>
                            <div class="circle">
                                <img style="    object-fit: contain;
    object-position: top right;" src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/puneri/Ashish Desai .png"
                                    alt="">
                            </div>
                            <div class="circle-content">ASHISH DESAI</div>
                        </div><div>
                            <div class="circle">
                                <img style="    object-fit: contain;
    object-position: center;" src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/puneri/Satyen Patel.png"
                                    alt="">
                            </div>
                            <div class="circle-content">SATYEN PATEL</div>
                        </div><div>
                            <div class="circle">
                                <img style="    object-position: top;" src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/puneri/Sunil Mittal.jpeg"
                                    alt="">
                            </div>
                            <div class="circle-content">SUNIL MITTAL</div>
                        </div>

                        



                    </div>
                    <div class="text-container">
                        <?php 
                        $puneriowner = [
                                   ['player'=>'Team Manager','role'=>'VIKRAM DESHMUKH'],
                                   ['player'=>'Head Coach','role'=>'ATUL GAIKWAD'],
                                   ['player'=>'Team Mentor','role'=>'PRAVIN TAMBE'],
                                   ['player'=>'S&C Coach','role'=>'AJIT CHAVAN'],
                                   ['player'=>'Team Physio','role'=>'RUGVED BAPAT                        '],
                                                                ];
                                                            ?>
                        <?php for ($i = 0; $i < count($puneriowner); $i++) {
                                
                                ?>

                        <div class="text-block"><span class="role"><?php echo $puneriowner[$i]['player'] ?></span>
                            <div class="name"><?php echo $puneriowner[$i]['role'] ?></div>
                        </div>
                        <?php }  ?>
                    </div>

                    <div class="captain-header">
                        Captain - Ruturaj Gaikwad

                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batter.svg" alt=""
                            style="filter: invert(1);">
                    </div>

                    <div class="row playerandrole">


                        <?php  $puneri = array(
                    ['player' => "SURAJ SHINDE",'role'=>'wkt'],
                    ['player' => "SAHIL AUTADE",'role'=>'wkt'],
                    ['player' => "SACHIN BHOSALE",'role'=>'batter'],
                    ['player' => "ABHIMANYU JADHAV",'role'=>'batter'],
                    ['player' => "YASH KSHIRSAGAR",'role'=>'batter'],
                    ['player' => "PAVAN SHAH",'role'=>'batter'],
                    ['player' => "SHRIPAD NIMBALKAR",'role'=>'batter'],
                    ['player' => "ROHAN DAMLE",'role'=>'allrounder'],
                    ['player' => "SAURABH SANKLECHA",'role'=>'allrounder'],
                    ['player' => "RAMAKRISHNA GHOSH",'role'=>'allrounder'],
                    ['player' => "RAHUL DESAI",'role'=>'allrounder'],
                    ['player' => "AAYUSH RAKTADE",'role'=>'allrounder'],
                    ['player' => "NEEL GANDHI",'role'=>'allrounder'],
                    ['player' => "SHUBHAM TAISWAL",'role'=>'allrounder'],
                    ['player' => "DEVANSH TANDEL",'role'=>'allrounder'],
                    ['player' => "ROSHAN WAGHSARE",'role'=>'bowler'],
                    ['player' => "PIYUSH SALVI",'role'=>'bowler'],
                    ['player' => "SOHAN JAMALE",'role'=>'bowler'],
                    ['player' => "ROHAN KHARAT",'role'=>'bowler'],
                    ['player' => "VIVEK SHELAR",'role'=>'bowler'],
                    ['player' => "ATIF SAYYED",'role'=>'bowler'],
                     
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
                    <div class="captain-header">
                        Team owners

                    </div>
                    <div class="circles-container">
                        <div>
                            <div class="circle">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/EAGLE/Vicky Rupchandani.png"
                                    alt="">
                            </div>
                            <div class="circle-content">VICKY RUPCHANDANI</div>
                        </div>

                        <div>
                            <div class="circle">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/EAGLE/Vicky Rupchandani.png"
                                    alt="">
                            </div>
                            <div class="circle-content">MANISH RUPCHANDANI</div>
                        </div>

                        <div>
                            <div class="circle">
                                <img style="    object-position: top;" src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/EAGLE/Hitesh Solanki.jpg"
                                    alt="">
                            </div>
                            <div class="circle-content">HITESH SOLANKI</div>
                        </div>
                        <div>
                            <div class="circle">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/EAGLE/Kishore Khubchandani.png"
                                    alt="">
                            </div>
                            <div class="circle-content">KISHORE KHUBCHANDANI</div>
                        </div>

                        <div>
                            <div class="circle">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/EAGLE/Ram Khubchandani.png"
                                    alt="">
                            </div>
                            <div class="circle-content">RAM KHUBCHANDANI</div>
                        </div>
                        




                    </div>
                    <div class="text-container">
                        <?php 
                        $eagleowner = [

                                  ['player'=>'CEO & Team Manager','role'=>'Raj Kamal'],
                                  ['player'=>'Head Coach ','role'=>'Samad Fallah'],
                                  ['player'=>'Batting Coach ','role'=>'Amit Patil '],
                                  ['player'=>'Mentor','role'=>'Kiran Adav'],
                                  ['player'=>'Bowling Coach ','role'=>'Suyas Burkul '],

                                                                ];
                                                            ?>
                        <?php for ($i = 0; $i < count($eagleowner); $i++) {
                                
                                ?>

                        <div class="text-block"><span class="role"><?php echo $eagleowner[$i]['player'] ?></span>
                            <div class="name"><?php echo $eagleowner[$i]['role'] ?></div>
                        </div>
                        <?php }  ?>
                    </div>

                    <div class="captain-header">
                        Captain - Prashant Solanki
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/bowler.svg" alt=""
                            style="filter:invert(1)">
                    </div>

                    <div class="row playerandrole">


                        <?php  $EAGLE = array(

['player' =>'SHARVIN KISAVE','role'=>'wkt'],
['player' =>'MANDAR BHANDARI','role'=>'wkt'],
['player' =>'SIDDHANT DOSHI','role'=>'batter'],
['player' =>'SAHIL PARAKH','role'=>'batter'],
['player' =>'RANJIT NIKAM ','role'=>'batter'],
['player' =>'KAUSHAL TAMBE','role'=>'batter'],
['player' =>'ROHIT HADKE','role'=>'batter'],
['player' =>'ATHARVA DHARAMDHIKARI','role'=>'batter'],
['player' =>'ARSHIN KULKARNI','role'=>'allrounder'],
['player' =>'DHANRAJ SHINDE','role'=>'allrounder'],
['player' =>'DIGVIJAY DESKHMUKH','role'=>'allrounder'],
['player' =>'NIRAJ JOSHI ','role'=>'allrounder'],
['player' =>'HARI SAWANT ','role'=>'allrounder'],
['player' =>'ATHARVA KALE','role'=>'allrounder'],
['player' =>'ASHAY PALKAR','role'=>'allrounder'],
['player' =>'MUKESH CHOUDHARY','role'=>'bowler'],
['player' =>'REHAN KHAN','role'=>'bowler'],
['player' =>'HARDIK KURANGALE ','role'=>'bowler'],
['player' =>'SAMADHAN PANGARE','role'=>'bowler'],
['player' =>'RAZEQ FALLAH','role'=>'bowler'],
['player' =>'AKSHAY WAIKAR','role'=>'bowler'],

                    );















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
        <div class="tab-pane fade" id="taab5-tab-pane" role="tabpanel" aria-labelledby="taab5-tab" tabindex="0">
            <div class="teamtable">
                <div class="container">
                <div class="captain-header">
                        Team owners

                    </div>
                    <div class="circles-container">
                        <div>
                            <div class="circle">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/CSK/Raaj Ghanwat.png"
                                    alt="">
                            </div>
                            <div class="circle-content">RAAJ GHANWAT</div>
                        </div>

                        <div>
                            <div class="circle">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/CSK/Vijay Munde.jpg"
                                    alt="">
                            </div>
                            <div class="circle-content">VIJAY MUNDE</div>
                        </div>

                        <div>
                            <div class="circle">
                                <img style="object-position: top;" src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/CSK/Nitin Deshmukh 1.jpeg"
                                    alt="">
                            </div>
                            <div class="circle-content">NITIN DESHMUKH</div>
                        </div>
                        



                    </div>
                    <div class="captain-header">
                        Captain - Murtaza Trunkwala
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batter.svg" alt=""
                            style="filter:invert(1)">
                    </div>
                    
           
                    <div class="row playerandrole">


                        <?php  $CHHATRAPTI = array(
                    
             


 ['player' =>'SAURABH NAWALE','role'=>'wkt'],
 ['player' =>'SAURABH SINGH','role'=>'wkt'],
 ['player' =>'ANURAG KAWADE','role'=>'wkt'],
 ['player' =>'NAGESH REGE','role'=>'wkt'],
 ['player' =>'OM BHOSALE','role'=>'batter'],
 ['player' =>'HARSHAL KATE','role'=>'batter'],
 ['player' =>'ONKAR KHATPE','role'=>'batter'],
 ['player' =>'DIGVIJAY JADHAV','role'=>'batter'],
 ['player' =>'DIGVIJAY PATIL','role'=>'batter'],
 ['player' =>'RAJVARDHAN HANGERGEKAR','role'=>'allrounder'],
 ['player' =>'SHAMSHUZAMA KAZI','role'=>'allrounder'],
 ['player' =>'RAMESHWAR DAUD','role'=>'bowler'],
 ['player' =>'HITESH WALUNJ','role'=>'bowler'],
 ['player' =>'SWARAJ CHAVAN','role'=>'bowler'],
 ['player' =>'ANAND THENGE','role'=>'bowler'],
 ['player' =>'YOGESH CHAVAN','role'=>'bowler'],
 ['player' =>'YATIN MANGAWANI','role'=>'bowler'],
 ['player' =>'PRANAY SINGH','role'=>'bowler'],
 ['player' =>'SHUBHAM KOTHARI','role'=>'bowler'],
 ['player' =>'DEEPAK DANGI','role'=>'bowler'],

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
                        Team owners

                    </div>
                    <div class="circles-container">
                        <div>
                            <div class="circle">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/PBG/Punit Balan.jpg"
                                    alt="">
                            </div>
                            <div class="circle-content">PUNIT BALAN</div>
                        </div>
                        <div>
                            <div class="circle">
                                <img style="object-position:top;" src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/PBG/Janhvi Dhariwal Balan.jpg"
                                    alt="">
                            </div>
                            <div class="circle-content">JANHVI DHARIWAL BALAN</div>
                        </div>
                    </div>
                    <div class="text-container">
                        <?php 
                        $kolhaowner = [

                            

                                  ['player'=>'Team Manager','role'=>'Anand Oza'],
['player'=>'CEO Sports Division','role'=>'Anjum Tanwar'],
['player'=>'Chief Sports Officer','role'=>'Aminder Cogi'],
['player'=>'Head Coach','role'=>'Akshay Darekar'],
['player'=>'Assistant Coach','role'=>'Amit Kushte'],
                                                                ];
                                                            ?>
                        <?php for ($i = 0; $i < count($kolhaowner); $i++) {
                                
                                ?>

                        <div class="text-block"><span class="role"><?php echo $kolhaowner[$i]['player'] ?></span>
                            <div class="name"><?php echo $kolhaowner[$i]['role'] ?></div>
                        </div>
                        <?php }  ?>
                    </div>
                    <div class="captain-header">
                        Captain - Rahul Tripathi
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batter.svg" alt=""
                            style="filter:invert(1)">
                    </div>

                    <div class="row playerandrole">


                        <?php  $KOLHAPUR = array(
          
                    array('player' => 'ANIKET PORWAL','role'=>'wkt'),
                    array('player' => 'KIRTIRAJ WADEKAR','role'=>'batter'),
                    array('player' => 'SIDDHARTH MHATRE','role'=>'batter'),
                    array('player' => 'YOGESH DONGRE','role'=>'batter'),
                    array('player' => 'SACHIN DHAS','role'=>'batter'),
                    array('player' => 'ANKEET BAWNE','role'=>'batter'),
                    array('player' => 'HARSH SANGHAVI','role'=>'batter'),
                    array('player' => 'RUSHIKESH DAUND','role'=>'batter'),
                    array('player' => 'SHRIKANT MUNDHE','role'=>'allrounder'),
                    array('player' => 'BHUSHAAN NAVANDE','role'=>'bowler'),
                    array('player' => 'MANOJ YADAV','role'=>'bowler'),
                    array('player' => 'HARSHAL MISHRA','role'=>'bowler'),
                    array('player' => 'UMAR SHAH','role'=>'bowler'),
                    array('player' => 'YASH KHALADKAR','role'=>'bowler'),
                    array('player' => 'SHREYAS CHAVAN','role'=>'bowler'),
                    array('player' => 'TARANJIT DHILLON','role'=>'bowler'),
                    array('player' => 'SUMIT MARKALI','role'=>'bowler'),
                    array('player' => 'NIHAL TUSAMAD','role'=>'bowler'),
                    array('player' => 'ATHARV DAKWAY','role'=>'bowler'),
                   
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
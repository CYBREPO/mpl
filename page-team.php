<?php
/*
 * Template Name: Teams
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>

<main class="bg-white">
    <section class="position-relative teamstab-cover">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/fixturesbanner.svg"
            class="d-block w-100" alt="">

        <ul class="nav nav-tabs teamstab" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link teamstabstab active" id="home-tab" data-bs-toggle="tab"
                    data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                    aria-selected="true"> <img
                        src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Puneri-Bappa-Logo-01-1.png"
                        alt=""></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link teamstabstab" id="profile-tab" data-bs-toggle="tab"
                    data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                    aria-selected="false"> <img
                        src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Puneri-Bappa-Logo-01-1.png"
                        alt=""></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link teamstabstab" id="contact-tab" data-bs-toggle="tab"
                    data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
                    aria-selected="false"> <img
                        src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Puneri-Bappa-Logo-01-1.png"
                        alt=""></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link teamstabstab" id="EAGLE-tab" data-bs-toggle="tab"
                    data-bs-target="#EAGLE-tab-pane" type="button" role="tab" aria-controls="EAGLE-tab-pane"
                    aria-selected="false"> <img
                        src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Puneri-Bappa-Logo-01-1.png"
                        alt=""></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link teamstabstab" id="CHHATRAPTI-tab" data-bs-toggle="tab"
                    data-bs-target="#CHHATRAPTI-tab-pane" type="button" role="tab" aria-controls="CHHATRAPTI-tab-pane"
                    aria-selected="false"> <img
                        src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Puneri-Bappa-Logo-01-1.png"
                        alt=""></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link teamstabstab" id="KOLHAPUR-tab" data-bs-toggle="tab"
                    data-bs-target="#KOLHAPUR-tab-pane" type="button" role="tab" aria-controls="KOLHAPUR-tab-pane"
                    aria-selected="false"> <img
                        src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/Puneri-Bappa-Logo-01-1.png"
                        alt=""></button>
            </li>
        </ul>


    </section>
    <!-- Banner -->


    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <div class="teamtable">
                <div class="container">
                    <div class="team-superiors">

                        <div class="team-superior">
                            <div class="fs-18">
                                founder
                            </div>
                            <div class="fs-22 mt-1">
                                KAPIL BAHETI 
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                CO-FOUNDER-

                            </div>
                            <div class="fs-22 mt-1">
                                ALISHA BAHETI 
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                TEAM DIRECTOR -
                            </div>
                            <div class="fs-22 mt-1">
                            PARAG MORE 
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                COACH-
                            </div>
                            <div class="fs-22 mt-1">
                                CHAMINDA VAAS
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                ASSISTANT COACH-
                            </div>
                            <div class="fs-22 mt-1">
                                SOMI BHINDER
                            </div>
                        </div>
                    </div>

                    <div class="captain-header">
                        Captain - SANKET PHARATE
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/bat.svg" alt="">
                    </div>

                    <div class="row playerandrole">
                        <!-- <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batter.svg" alt="">
                    VICKY OSTWAL
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/keeper.svg" alt="">
                    PRAVIN DESHETY
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batball.svg" alt="">
                    VICKY OSTWAL
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/cricket-ball.svg"
                        alt="">
                    PRAVIN DESHETY
                </div> -->

                        <?php  $SOLAPUR = array(

                            "VICKY OSTWAL",
                            "PRAVIN DESHETY",
                            "SATYAJEET BACHHAV",
                            "ATHARVA KALE",
                            "OMKAR RAJPUT",
                            "YASH NAHAR",
                            "HARSHVARDHAN TINGRE",
                            "MEHUL PATEL",
                            "SUNIL YADAV",
                            "YAASAR SHAIKH",
                            "YASH BORKAR",
                            "DEV D NATU",
                            "PRATHAMESH GAWDE",
                            "ABHINAV BHATT",
                            "PRANAY SINGH",
                            "SWAPNIL FULPAGAR",
                            "ANSH DHOOT",
                            "VISHANT MORE",
                            "PRATIK MHATRE",
                            "RUSHABH RATHOD",
                            "SANKET PHARATE");
                            ?>

                        <?php foreach ($SOLAPUR as $key => $value) {?>
                        <div class="col-md-6">
                            <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/cricket-ball.svg"
                        alt=""> -->
                            <?php echo $value ?>

                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <div class="teamtable">
                <div class="container">
                    <div class="team-superiors">

                        <div class="team-superior">
                            <div class="fs-18">
                                founder
                            </div>
                            <div class="fs-22 mt-1">
                                KAPIL BAHETI 
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                CO-FOUNDER-

                            </div>
                            <div class="fs-22 mt-1">
                                ALISHA BAHETI 
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                TEAM DIRECTOR -
                            </div>
                            <div class="fs-22 mt-1">
                                KAPIL BAHETI 
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                COACH-
                            </div>
                            <div class="fs-22 mt-1">
                                CHAMINDA VAAS
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                ASSISTANT COACH-
                            </div>
                            <div class="fs-22 mt-1">
                                SOMI BHINDER
                            </div>
                        </div>
                    </div>

                    <div class="captain-header">
                        Captain - SANKET PHARATE
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/bat.svg" alt="">
                    </div>

                    <div class="row playerandrole">
                        <!-- <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batter.svg" alt="">
                    VICKY OSTWAL
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/keeper.svg" alt="">
                    PRAVIN DESHETY
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batball.svg" alt="">
                    VICKY OSTWAL
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/cricket-ball.svg"
                        alt="">
                    PRAVIN DESHETY
                </div> -->

                        <?php  $RATNAGIRI = array(

                            "AZIM KAZI",
                            "PRADEEP DADHE",
                            "VIJAY PAWALE",
                            "KUNAL THORAT",
                            "DIVYANG HINGANEKAR",
                            "SWARAJ WABALE",
                            "ASHKAN KAZI",
                            "S. SHAHRUKH KADIR",
                            "ROHIT PATIL",
                            "YOGESH CHAVAN",
                            "PRITHVIRAJ SHILAMKAR",
                            "TUSHAR SHRIVASTAV",
                            "KIRAN CHORMALE",
                            "SAHIL CHURI",
                            "DHIRAJ PATHANGARE",
                            "AKILESH GAWALE",
                            "PREETAM PATIL",
                            "SAURABH SHEVALKAR",
                            "KRISH SHAHAPURKAR",
                            "SAMARTH KADAM",
                            "NIKIT DHUMAL",
                            "NIKHIL NAIK",
                            "RUSHIKESH SONAVNE"
                            );
                            ?>

                        <?php foreach ($RATNAGIRI as $key => $value) {?>
                        <div class="col-md-6">
                            <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/cricket-ball.svg"
                        alt=""> -->
                            <?php echo $value ?>

                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <div class="teamtable">
                <div class="container">
                    <div class="team-superiors">

                        <div class="team-superior">
                            <div class="fs-18">
                                COACH-
                            </div>
                            <div class="fs-22 mt-1">
                                ATUL GAIKWAD
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                COACH-

                            </div>
                            <div class="fs-22 mt-1">
                                AVINASH AWARE
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                COACH-
                            </div>
                            <div class="fs-22 mt-1">
                                SHRIKANT MUNDHE
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                COACH-
                            </div>
                            <div class="fs-22 mt-1">
                                SANTOSH JEDHE
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">FITNESS COACH</div>
                            <div class="fs-22 mt-1"> MAHINDRA GHOKHALE</div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">TEAM MANAGER</div>
                            <div class="fs-22 mt-1"> VIKRAM DESHMUKH</div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">ASSISTANT</div>
                            <div class="fs-22 mt-1"> ASHWIN PARATE</div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">ASSISTANT</div>
                            <div class="fs-22 mt-1"> AJIT CHAVAN</div>
                        </div>

                    </div>

                    <div class="captain-header">
                        Captain - SANKET PHARATE
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/bat.svg" alt="">
                    </div>

                    <div class="row playerandrole">
                        <!-- <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batter.svg" alt="">
                    VICKY OSTWAL
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/keeper.svg" alt="">
                    PRAVIN DESHETY
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batball.svg" alt="">
                    VICKY OSTWAL
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/cricket-ball.svg"
                        alt="">
                    PRAVIN DESHETY
                </div> -->

                        <?php  $RATNAGIRI = array(
                        "RUTURAJ GAIKWAD",
                        "SAISH DIGE",
                        "RUSHIKESH SUMBE",
                        "SACHIN BHOSALE",
                        "ROHAN DAMLE",
                        "ABHIMANYU JADHAV",
                        "PRASHANT KORE",
                        "YASH KSHIRSAGAR",
                        "ADVAY SHIDAYE",
                        "PAWAN SHAH",
                        "AZHAR ANSARI",
                        "SHRIPAD NIMBALKAR",
                        "SHUBHANKAR HARDIKAR",
                        "HARSH SANGHVI",
                        "VAIBHAV CHOWGHULE",
                        "DIGVIJAY PATIL",
                        "ROSHAN WAGHSARE",
                        "AJAY BORUDE",
                        "PIYUSH SALVI",
                        "AADARSH BOTHARA",
                        "ADITYA DAWARE",
                        "BHUSHAN NAVANDE",
                        "SAURABH DIGHE",
                        "KUNSH DIXIT",
                        "SHUBHAM KOTHARI",
                        "HARSH OSWAL",
                        "SOHAN JAMALE",
                        "SURAJ SHINDE"
                            );
                            ?>

                        <?php foreach ($RATNAGIRI as $key => $value) {?>
                        <div class="col-md-6">
                            <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/cricket-ball.svg"
                        alt=""> -->
                            <?php echo $value ?>

                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="EAGLE-tab-pane" role="tabpanel" aria-labelledby="EAGLE-tab" tabindex="0">
            <div class="teamtable">
                <div class="container">
                    <div class="team-superiors">

                        <div class="team-superior">
                            <div class="fs-18">
                                founder
                            </div>
                            <div class="fs-22 mt-1">
                                KAPIL BAHETI 
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                CO-FOUNDER-

                            </div>
                            <div class="fs-22 mt-1">
                                ALISHA BAHETI 
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                TEAM DIRECTOR -
                            </div>
                            <div class="fs-22 mt-1">
                                KAPIL BAHETI 
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                COACH-
                            </div>
                            <div class="fs-22 mt-1">
                                CHAMINDA VAAS
                            </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                ASSISTANT COACH-
                            </div>
                            <div class="fs-22 mt-1">
                                SOMI BHINDER
                            </div>
                        </div>
                    </div>

                    <div class="captain-header">
                        Captain - SANKET PHARATE
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/bat.svg" alt="">
                    </div>

                    <div class="row playerandrole">
                        <!-- <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batter.svg" alt="">
                    VICKY OSTWAL
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/keeper.svg" alt="">
                    PRAVIN DESHETY
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batball.svg" alt="">
                    VICKY OSTWAL
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/cricket-ball.svg"
                        alt="">
                    PRAVIN DESHETY
                </div> -->

                        <?php  $EAGLE = array(
                       "RAHUL TRIPATHI",
                       "AKSHAY WAIKAR",
                       "SIDDHESH VEER",
                       "PRASHANT SOLANKI",
                       "ASHAY PALKAR",
                       "SIDDHANT DOSHI",
                       "DHANRAJ SHINDE",
                       "SAHIL PARIKH",
                       "ADITYA RAJHANS",
                       "VAIBHAV VIBHUTE",
                       "ARSHIN KULKARNI",
                       "KAUSHAL TAMBE",
                       "IZHAAN SAYED",
                       "HARSHAD KHADIWALE",
                       "REHAN KHAN",
                       "ROHIT HADKE",
                       "RISHAB KARWA",
                       "MANDAR BHANDARI",
                       "RAZEK FALLAH",
                       "SHUBHAM NAGAWADE",
                       "OMKAR AKHADE",
                       "SHARVIN KISWE",
                       "VARUN DESHPANDE"
                            );
                            ?>

                        <?php foreach ($EAGLE as $key => $value) {?>
                        <div class="col-md-6">
                            <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/cricket-ball.svg"
                        alt=""> -->
                            <?php echo $value ?>

                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="CHHATRAPTI-tab-pane" role="tabpanel" aria-labelledby="CHHATRAPTI-tab"
            tabindex="0">
            <div class="teamtable">
                <div class="container">
                    <div class="team-superiors">
                        <div class="team-superior">
                            <div class="fs-18">
                                HEAD COACH
                            </div>
                            <div class="fs-22 mt-1"> PRADEEP INGLE </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                CO-OWNER
                            </div>
                            <div class="fs-22 mt-1"> DHARIWAL BALAN </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                CO-OWNER
                            </div>
                            <div class="fs-22 mt-1"> NITIN DESHMUKH </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                CO-OWNER
                            </div>
                            <div class="fs-22 mt-1"> RAJ GHANVAT </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                CO-OWNER
                            </div>
                            <div class="fs-22 mt-1"> VIJAY MUNDHE </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                CO-OWNER
                            </div>
                            <div class="fs-22 mt-1"> DHANNJAY MUNDER </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                TEAM COO
                            </div>
                            <div class="fs-22 mt-1"> ABHISHEKH SAVRIKAR </div>
                        </div>

                    </div>

                    <div class="captain-header">
                        Captain - SANKET PHARATE
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/bat.svg" alt="">
                    </div>

                    <div class="row playerandrole">
                        <!-- <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batter.svg" alt="">
                    VICKY OSTWAL
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/keeper.svg" alt="">
                    PRAVIN DESHETY
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batball.svg" alt="">
                    VICKY OSTWAL
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/cricket-ball.svg"
                        alt="">
                    PRAVIN DESHETY
                </div> -->

                        <?php  $CHHATRAPTI = array(
                      "R. HANGARGEKAR",
                      "MURTUZA TRUNKWALA",
                      "RAMESHWAR DAUD",
                      "RANJIT NIKAM",
                      "AKASH JADHAV",
                      "ANIKET NALAWADE",
                      "MOHSIN SAYYAD",
                      "SWAPNIL CHAVAN",
                      "JAGDISH ZOPE",
                      "HARSHAL KATE",
                      "HITESH VALUNJ",
                      "ONKAR KHATPE",
                      "RUSHIKESH NAIR",
                      "HRISHIKESH DAUND",
                      "SWARAJ CHAVAN",
                      "ASHWIN BHAPKAR",
                      "OM BHOSALE",
                      "TANESH JAIN",
                      "SHAMSUJAMA KAZI",
                      "VARUN GUJAR",
                      "ANAND THENGE",
                      "SAURABH NAVALE",
                      "ABHISHEK PAWAR"
                            );
                            ?>

                        <?php foreach ($CHHATRAPTI as $key => $value) {?>
                        <div class="col-md-6">
                            <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/cricket-ball.svg"
                        alt=""> -->
                            <?php echo $value ?>

                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="KOLHAPUR-tab-pane" role="tabpanel" aria-labelledby="KOLHAPUR-tab" tabindex="0">
            <div class="teamtable">
                <div class="container">
                    <div class="team-superiors">

                    <div class="team-superior">
                            <div class="fs-18">
                                HEAD COACH
                            </div>
                            <div class="fs-22 mt-1"> PRADEEP INGLE </div>
                        </div>
                        <div class="team-superior">
                            <div class="fs-18">
                                CO-OWNER
                            </div>
                            <div class="fs-22 mt-1"> DHARIWAL BALAN </div>
                        </div>
                    </div>

                    <div class="captain-header">
                        Captain - SANKET PHARATE
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/bat.svg" alt="">
                    </div>

                    <div class="row playerandrole">
                        <!-- <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batter.svg" alt="">
                    VICKY OSTWAL
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/keeper.svg" alt="">
                    PRAVIN DESHETY
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/batball.svg" alt="">
                    VICKY OSTWAL
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/cricket-ball.svg"
                        alt="">
                    PRAVIN DESHETY
                </div> -->

                        <?php  $KOLHAPUR = array(
                     "KEDAR JADHAV",
                     "SIDDHARTH MHATRE",
                     "NAUSHAD SHAIKH",
                     "TARANJIT DHILLON",
                     "KIRTIRAJ WADEKAR",
                     "NIHAL TUSAMAD",
                     "MANOJ YADAV",
                     "RAVI CHAUDHARI",
                     "VIDYA TIWARI",
                     "ANKIT BAWANE",
                     "ATMAN PORE",
                     "SACHIN DHAS",
                     "AKSHAY DAREKAR",
                     "NIKHIL MADAS",
                     "SHREYASH CHAVAN",
                     "SAHIL AUTADE"
                            );
                            ?>

                        <?php foreach ($KOLHAPUR as $key => $value) {?>
                        <div class="col-md-6">
                            <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/newassets/images/cricket-ball.svg"
                        alt=""> -->
                            <?php echo $value ?>

                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>

<?php  get_footer("footer2"); ?>
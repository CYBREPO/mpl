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
                <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane"
                    type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false"
                    disabled>Disabled</button>
            </li>
        </ul>


    </section>
    <!-- Banner -->


    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">    <div class="teamtable">
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
            ...</div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            ...</div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
            ...</div>
    </div>


</main>

<?php  get_footer("footer2"); ?>
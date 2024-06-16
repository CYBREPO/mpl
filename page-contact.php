<?php
/*
 * Template Name: contact us
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>



<main>
    <?php include 'components/page-title-header.php';?>

    <div class="row w-100 mx-auto p-0 ">
        <div class="col-md-6 contbgleft p-0">
            <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
	echo '<img src="' . esc_url( $logo[0] ) . '" class="d-block mx-auto my-5 mpl-logo" alt="' . get_bloginfo( 'name' ) . '">';
}  ?>
        </div>
        <!-- <div class="col-md-6 p-0 formside">
            <div class="p-3 p-md-5">

                <div class="section-title">GET IN TOUCH</div>
                <?php 
                // echo do_shortcode( '[contact-form-7  id="220" title="Contact form 1"]' ); 
                ?>k


            </div>


        </div> -->
        <div class="col-md-6 p-0 formside">
            <div class="p-3 p-md-5">

                <div class="section-title">GET IN TOUCH</div>

                <!-- <div class="wpcf7 no-js" id="wpcf7-f683-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <form action="/index.php/contact-us/#wpcf7-f683-o1" method="post" class="wpcf7-form init"
                        aria-label="Contact form" novalidate="novalidate" data-status="init">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="683">
                            <input type="hidden" name="_wpcf7_version" value="5.9.3">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f683-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                        </div>
                        <p><label> Your name<br>
                                <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                        autocomplete="name" aria-required="true" aria-invalid="false" value=""
                                        type="text" name="your-name"></span> </label>
                        </p>
                        <p><label> Your email<br>
                                <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40"
                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                        autocomplete="email" aria-required="true" aria-invalid="false" value=""
                                        type="email" name="your-email"></span> </label>
                        </p>
                        <p><label> Subject<br>
                                <span class="wpcf7-form-control-wrap" data-name="your-subject"><input size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                        aria-required="true" aria-invalid="false" value="" type="text"
                                        name="your-subject"></span> </label>
                        </p>
                        <p><label> Your message (optional)<br>
                                <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40"
                                        rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                        name="your-message"></textarea></span> </label>
                        </p>
                        <p><input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Submit">
                        </p>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div> -->

                <?php 
              echo do_shortcode( '[contact-form-7  id="220" title="Contact form 1"]' ); 
                ?>k
            </div>


        </div>
    </div>
</main>

<?php get_footer("footer2"); ?>
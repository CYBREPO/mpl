<?php
/*
 * Template Name: About us
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>


<main>
    <?php include 'components/page-title-header.php';?>
    <section class="section-1 banner aboutbanner1 position-relative">
        <div class="aboutus-banner-content w-100">
            <div class="container">
                <div class="w-md-75 mx-auto">
                    <p>Our sincere appreciation to BCCI for their invaluable support.</p>
                    <p>The BCCI’s Indian Premier League (IPL) has been responsible for launching many international
                        cricketers from India. Maharashtra Cricket Association (MCA) has taken inspiration from the IPL
                        and
                        launched the Maharashtra Premier League (MPL) to give a platform to young cricketers from the
                        state.
                        The MPL will adhere to the same guidelines as the IPL, set by the BCCI.</p>
                </div>
         
                    <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
	echo '<img src="' . esc_url( $logo[0] ) . '" class="d-block mx-auto my-5 mpl-logo" alt="' . get_bloginfo( 'name' ) . '">';
}  ?>
                <p><strong>CRICKETCHI SHAAN, MAHARASHTRACHA MAAN.</strong></p>
                <p>Welcome to the world of Maharashtra Premier League (MPL), where cricket is not just a game, but it’s
                    a
                    way of celebrating the spirit of Maharashtra. With 6 teams battling it out this season, namely
                    Puneri
                    Bappa, Kolhapur Tuskers, Eagle Nashik Titans, Chatrapati Sambhaji Kings, Ratnagiri Jets and Solapur
                    Royals, MPL aims at giving a fair chance to the budding cricketers of Maharashtra to showcase their
                    talent.</p>
                <p>MPL is an initiative by Maharashtra Cricket Association (MCA), which strives to take cricket in
                    Maharashtra to new heights, and bring forth the latent talent in the state. MPL offers the perfect
                    platform for cricket enthusiasts to witness the talented cricketers of Maharashtra coming together
                    and
                    competing against each other.</p>
                <p>With the best of players, fair play, and exceptional cricketing spirit on display, MPL promises to be
                    a
                    spectacular event. With social media platforms to keep up with all the action, it’s an exciting
                    opportunity for cricket enthusiasts to keep track of their favorite players and teams. Don’t miss
                    out on
                    the action, and join us in supporting this remarkable initiative!</p>
            </div>
        </div>
    </section>
    <section class="section-1 banner aboutbanner2 position-relative">
        <div class="aboutus-banner-content  w-100">
            <div class="container">
                <img src="https://mpl.thebrandodyssey.com/wp-content/uploads/2024/03/Logo-Icon-Only.png" alt=""
                    class="d-block mx-auto mb-md-5 mpl-logo">
                <h4 class="text-center mb-4 text-white" style="font-family: 'Times New Roman';">
                    MAHARASHTRA CRICKET ASSOCIATION </h4>
                <p>Maharashtra Cricket Association (MCA) is a state member association of Board of Cricket Control in
                    India
                    (BCCI). MCA comprises of all districts of Maharashtra state except Mumbai and Vidarbha region. In
                    all,
                    21 district associations and several affiliated clubs operate under the supervisory control of MCA.
                    MCA
                    is the main governing body for cricket in Maharashtra, and is always striving to take cricket to new
                    heights in the state.</p>
                <p>MCA’s esteemed leadership is currently under Hon. President Shri. Rohit Rajendra Pawar, member of the
                    Maharashtra Legislative Assembly hailing from the Karjat-Jamkhed constituency.</p>
            </div>
        </div>
    </section>
</main>
<?php get_footer("footer2"); ?>
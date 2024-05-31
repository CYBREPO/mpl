<?php
/*
 * Template Name: Gallery
 * Description: Page template with sidebar included.
 */ get_header("header2"); ?>


<main>
    <?php include 'components/page-title-header.php';?>

<style>
    .content{
        display: none;
    }
</style>

    <div class="stats-gallery bg-white">
        <div class="container">
            <div class="gallerystats row">
                <?php if (have_rows("gallery")):while (have_rows("gallery")):the_row(); ?>
                <div class="col-md-4 mt-4 content"><a href=" <?php the_sub_field("gallery_image"); ?>" class="glightbox w-100"
                        data-glightbox="type: image">
                        <img src=" <?php the_sub_field("gallery_image"); ?>" alt="image" /></a></div>
                <?php endwhile; endif; ?>
            </div>
       
            <div class="loadmorebutton mt-5">Show more</div>
            

            <section class="highlights py-md-5">
                <div class="container">
                    <div class="section-title mb-md-4" data-aos="fade-up" data-aos-duration="1500">
                        Videos
                    </div>
                    <div class="owl-carousel higlights2 mt-4 mt-md-5" data-aos="fade-up" data-aos-duration="1500">
                        <?php if (have_rows("higlights")):while (have_rows("higlights")):the_row(); ?>
                        <div class="video-background">
                            <?php the_sub_field("higlights_video_url"); ?>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer("footer2"); ?>
<?php
get_header();
?>
just testing
<article class="content px-3 py-5 p-md-5">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'archive');
        }
    }
    ?>

    <?php
    the_posts_pagination();
    ?>
</article>

<?php
get_footer();
?>
<?php get_header('journal'); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="single-journal-wrap">
            <?php the_content(); ?>

        </div>

    <?php endwhile; ?>









<?php endif;
wp_reset_postdata()
?>


<?php get_footer(); ?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="single-journal-wrap">
            <?php the_content(); ?>

        </div>

    <?php endwhile; ?>








    <div class="navigation">
        <?php if (function_exists('wp_pagenavi')) : ?>
            <?php wp_pagenavi(array('query' => $the_query)); ?>
        <?php else : ?>
        <?php endif; ?>
    </div>

<?php endif;
wp_reset_postdata()
?>


<?php get_footer(); ?>
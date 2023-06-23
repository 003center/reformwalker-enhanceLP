<?php get_header(); ?>
<div class="archive-company-hero">

</div>
<?php
$args = array(
    'post_type' => 'company',
    'posts_per_page' => 30,
    'order' => 'ASC',
);
$the_query = new WP_Query($args);
?>
<div class="archive-company-wrap">

    <div class="archive-company-grid">
        <?php if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="archive-company-content">
                    <figure>
                        <img src="<?php echo CFS()->get("top-img"); ?>" alt="">
                    </figure>
                    <div class="archive-company-txt">
                        <?php echo CFS()->get("company"); ?>


                    </div>
                    <div class="archive-company-region">
                        <?php echo CFS()->get("region"); ?>
                    </div>
                </a>


            <?php endwhile;; ?>
    </div>
</div>


<?php endif;
        wp_reset_postdata()
?>




<?php get_footer(); ?>
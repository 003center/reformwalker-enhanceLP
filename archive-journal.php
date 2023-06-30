<?php get_header('journal'); ?>
<div class="archive-journal-wrap">
    <div class="archive-journal-top">
        <?php
        $args = array(
            'post_type' => 'journal',
            'posts_per_page' => 1,
            'order' => 'ASC',
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="archive-journal-content ">

                    <a href="<?php the_permalink() ?>" class="">
                        <figure>
                            <img decoding=“async” src="<?php echo CFS()->get("thum"); ?>" alt="">
                            <figcaption><?php echo CFS()->get("title"); ?></figcaption>
                        </figure>
                    </a>


                </div>

            <?php endwhile;; ?>
        <?php endif;
        wp_reset_postdata()
        ?>

    </div>


    <div class="archive-journal-grid">
        <?php
        $args = array(
            'post_type' => 'journal',
            'posts_per_page' => 30,
            'order' => 'ASC',
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="archive-journal-content ">

                    <a href="<?php the_permalink() ?>" class="">
                        <figure>
                            <img decoding=“async” src="<?php echo CFS()->get("thum"); ?>" alt="">
                            <figcaption><?php echo CFS()->get("title"); ?></figcaption>
                        </figure>
                    </a>


                </div>

            <?php endwhile;; ?>
    </div>

</div>
<div class="navigation">
    <?php if (function_exists('wp_pagenavi')) : ?>
        <?php wp_pagenavi(array('query' => $the_query)); ?>
    <?php else : ?>
    <?php endif; ?>
</div>

<?php endif;
        wp_reset_postdata()
?>

</div>




<?php get_footer(); ?>
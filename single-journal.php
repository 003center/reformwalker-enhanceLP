<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="single-journal-wrap">
            <?php the_content(); ?>

        </div>

        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php
$args = array(
    'post_type' => 'journal',
    'posts_per_page' => 3,
    'order' => 'ASC',
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
?>
    <div class="">

        <div class="">

            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <div class="">
                    <div class="">
                        <img src="<?php echo CFS()->get("thum"); ?>" alt="">
                        <figcaption>
                            <p> <?php echo CFS()->get("title"); ?>
                            </p>

                        </figcaption>
                    </div>
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


<?php get_footer(); ?>
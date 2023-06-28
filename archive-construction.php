<?php get_header('construction'); ?>
<?php
$args = array(
    'post_type' => 'construction',
    'posts_per_page' => 30,
    'order' => 'ASC',
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
?>
    <div class="archive-construction-wrap">

        <div class="archive-construction-grid">

            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <div class="archive-construction-content">
                    <div class="figure">
                        <img src="<?php echo CFS()->get("img1"); ?>" alt="リフォーム事例１">
                        <figcaption>
                            <p> <?php echo CFS()->get("sekou"); ?>
                            </p>

                            <p> 工賃 <span></span> <?php echo CFS()->get("hiyou"); ?>
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
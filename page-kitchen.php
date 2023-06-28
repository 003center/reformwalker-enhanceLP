<?php get_header('construction'); ?><?php
                                    $args = array(
                                        'post_type' => 'construction',
                                        'posts_per_page' => 30,
                                        'order' => 'ASC',
                                    );
                                    $the_query = new WP_Query($args);
                                    if ($the_query->have_posts()) :
                                    ?>
<section class="archive-construction-top">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <?php if (CFS()->get("basyo") == "キッチン") : ?>
            <figure>
                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-kitchen.jpg.webp " alt="">
                <figcaption>キッチンリフォーム</figcaption>
            </figure>
</section>

<div class="archive-construction-wrap">
    <div class="archive-construction-grid">
        <a href="<?php the_permalink() ?>" class="archive-construction-content">
            <div class="figure">
                <img src="<?php echo CFS()->get("img1"); ?>" alt="リフォーム事例１">
                <figcaption>
                    <p> <?php echo CFS()->get("sekou"); ?>
                    </p>
                    <p> 工賃 <span></span> <?php echo CFS()->get("hiyou"); ?>
                    </p>
                </figcaption>
            </div>
        </a>
    <?php else : ?>
    <?php endif; ?>
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
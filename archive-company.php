<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'company',
    'posts_per_page' => 30,
    'order' => 'ASC',
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
?>
    <div class="staffs">


        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="staff">
                <div class="staff_name">
                    <h2><?php echo CFS()->get("company"); ?></h2>
                </div>
                <div class="staff_info">
                    <div class="staff_info_left">
                        <?php if (post_custom('s_img')) : ?>

                            <div class="staff_img">
                                <img src="<?php echo CFS()->get("s_img"); ?>" alt="" loading="lazy">
                            </div>
                        <?php endif ?>

                    </div>

                    <div class="staff_info_right">

                        <?php if (post_custom('s_like')) : ?>
                            <div class="staff_info_like">
                                <div class="sil">[趣味]</div>
                                <div class="sir"><?php echo CFS()->get("s_like"); ?></div>
                            </div>
                        <?php endif ?>



                        <?php if (post_custom('s_pr')) : ?>
                            <div class="staff_info_pr">
                                <div class="sil">[コメント]</div>
                                <div class="sir"><?php echo CFS()->get("s_pr"); ?></div>
                            </div>
                        <?php endif ?>






                    </div>
                </div>
            </div>
        <?php endwhile;; ?>
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


<?php  ?>


<?php get_footer(); ?>
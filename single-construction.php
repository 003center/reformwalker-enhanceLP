<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="constructino-wrap">
            <article id="<?php the_ID(); ?> " <?php post_class('taitoru'); ?>>

                <?php echo CFS()->get("taitoru"); ?>
                <img src="                <?php echo CFS()->get("img1"); ?>
" alt="">
                <img src="                <?php echo CFS()->get("img2"); ?>
" alt="">
                <img src="                <?php echo CFS()->get("img3"); ?>
" alt="">
                <?php echo CFS()->get("sekou"); ?>
                <?php echo CFS()->get("kouki"); ?>
                <?php echo CFS()->get("hiyou"); ?>
                <?php echo CFS()->get("messe"); ?>
                <img src="                <?php echo CFS()->get("before1"); ?>
" alt="">
                <img src="                <?php echo CFS()->get("after1"); ?>
" alt="">
                <img src="                <?php echo CFS()->get("before2"); ?>
" alt="">
                <img src="                <?php echo CFS()->get("after2"); ?>
" alt="">


            </article>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
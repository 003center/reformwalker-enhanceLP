<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="company-wrap">
            <article id="<?php the_ID(); ?> " <?php post_class('company'); ?>>

                <?php echo CFS()->get("company"); ?>
                <img src="<?php echo CFS()->get("top-img"); ?>" alt="">
                <img src="<?php echo CFS()->get("president"); ?>" alt="">
                <?php echo CFS()->get("message"); ?>
                <img class="c" src="<?php echo CFS()->get("Construction-img"); ?>" alt="">
                <img class="c2" src="<?php echo CFS()->get(" Construction-img-2nd"); ?>" alt="">


                <?php echo CFS()->get("president-name"); ?>
                <?php echo CFS()->get("tel"); ?>
                <?php echo CFS()->get("sihonkin"); ?>
                <?php echo CFS()->get("seturitu"); ?>
                <?php echo CFS()->get("zigyou"); ?>
                <?php echo CFS()->get("syainn"); ?>
                <?php echo CFS()->get("map"); ?>






            </article>
        </div>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>


<?php get_footer(); ?>
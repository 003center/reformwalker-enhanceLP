<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <section class="single-construction-top">
            <?php if (CFS()->get("basyo") == "キッチン") : ?>
                <figure>
                    <img decoding="async" src="" alt="">
                    <figcaption>キッチンリフォーム事例</figcaption>
                </figure>
                <?php elseif (CFS()->get("basyo") == "お風呂") : ?>:

                2 <?php elseif (CFS()->get("basyo") == "玄関") : ?>:
                2
                <?php elseif (CFS()->get("basyo") == "屋根") : ?>:
                2
                <?php elseif (CFS()->get("basyo") == "リビング") : ?>:
                2
                <?php elseif (CFS()->get("basyo") == "和室") : ?>:
                2
                <?php elseif (CFS()->get("basyo") == "洋室") : ?>:
                2
                <?php elseif (CFS()->get("basyo") == "洗面台") : ?>:
                2
                <?php elseif (CFS()->get("basyo") == "トイレ") : ?>:
                2

            <?php endif; ?>

        </section>



        <div class="single-constructino-wrap">

            <article id="<?php the_ID(); ?> " <?php post_class('taitoru'); ?>>

                <h2> <?php echo CFS()->get("taitoru"); ?>
                </h2>

                <img src="                <?php echo CFS()->get("img1"); ?>
" alt="">
                <img src="                <?php echo CFS()->get("img2"); ?>
" alt="">
                <img src="                <?php echo CFS()->get("img3"); ?>
" alt="">

                <section>
                    <div class="construction-about-table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>施工内容</td>
                                    <td><?php echo CFS()->get("sekou"); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>工期</td>
                                    <td> <?php echo CFS()->get("kouki"); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>費用</td>
                                    <td> <?php echo CFS()->get("hiyou"); ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </section>

                <section class="construction-about-message">
                    <div class="construction-about-message-grid">
                        <figure class="construction-about-message-img">
                            <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/sagyouinn.png" alt="">
                        </figure>
                        <div class="construction-about-message-txt">
                            <?php echo CFS()->get("messe"); ?>

                        </div>
                    </div>
                </section>

                <section class="construction-ba">
                    <div class="construction-ba-grid">
                        <figure>
                            <img decoding="async" src="<?php echo CFS()->get("before1"); ?>" alt="">
                            <figcaption>Before</figcaption>
                        </figure>
                        <figure>
                            <img decoding="async" src="<?php echo CFS()->get("after1"); ?>" alt="">
                            <figcaption>After</figcaption>
                        </figure>

                    </div>
                    <section class="construction-ba">
                        <div class="construction-ba-grid">
                            <figure>
                                <img decoding="async" src="<?php echo CFS()->get("before2"); ?>" alt="">
                                <figcaption>Before</figcaption>
                            </figure>
                            <figure>
                                <img decoding="async" src="<?php echo CFS()->get("after2"); ?>" alt="">
                                <figcaption>After</figcaption>
                            </figure>

                        </div>



                    </section>


            </article>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
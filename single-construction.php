<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <section class="single-construction-top">
            <?php if (CFS()->get("basyo") == "キッチン") : ?>
                <figure>
                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-kitchen.jpg.webp " alt="">
                    <figcaption>キッチンリフォーム事例</figcaption>
                </figure>

                <?php elseif (CFS()->get("basyo") == "お風呂") : ?>:
                <figure>
                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-bath.jpg.webp " alt="">
                    <figcaption>お風呂リフォーム事例</figcaption>
                </figure>

                <?php elseif (CFS()->get("basyo") == "玄関") : ?>:
                <figure>
                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-genkan.jpg.webp " alt="">
                    <figcaption>玄関フォーム事例</figcaption>
                </figure>

                <?php elseif (CFS()->get("basyo") == "屋根") : ?>:
                <figure>
                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-yane.jpg.webp " alt="">
                    <figcaption>屋根リフォーム事例</figcaption>
                </figure>

                <?php elseif (CFS()->get("basyo") == "リビング") : ?>:
                <figure>
                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-living.jpg.webp " alt="">
                    <figcaption>リビングリフォーム事例</figcaption>
                </figure>

                <?php elseif (CFS()->get("basyo") == "和室") : ?>:
                <figure>
                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-wasitsu.jpg.webp " alt="">
                    <figcaption>和室リフォーム事例</figcaption>
                </figure>

                <?php elseif (CFS()->get("basyo") == "洋室") : ?>:
                <figure>
                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-yousitu.jpg.webp " alt="">
                    <figcaption>洋室リフォーム事例</figcaption>
                </figure>

                <?php elseif (CFS()->get("basyo") == "洗面台") : ?>:
                <figure>
                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-sink.jpg.webp " alt="">
                    <figcaption>洗面台リフォーム事例</figcaption>
                </figure>

                <?php elseif (CFS()->get("basyo") == "トイレ") : ?>:
                <figure>
                    <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-toilet.jpg.webp " alt="">
                    <figcaption>トイレリフォーム事例</figcaption>
                </figure>


            <?php endif; ?>

        </section>



        <div class="single-constructino-wrap">

            <article id="<?php the_ID(); ?> " <?php post_class('taitoru'); ?>>

                <h2> <?php echo CFS()->get("taitoru"); ?>
                </h2>


                <div class="gallery">
                    <div class="main-image">
                        <img id="main-img" src="<?php echo CFS()->get("img1"); ?>" alt="Main Image">
                    </div>
                    <div class="thumbnails">
                        <img src="<?php echo CFS()->get("img1"); ?>" alt="Thumbnail 1" onclick="changeImage('<?php echo CFS()->get("img1"); ?>')">
                        <img src="<?php echo CFS()->get("img2"); ?>" alt="Thumbnail 2" onclick="changeImage('<?php echo CFS()->get("img2"); ?>')">
                        <img src="<?php echo CFS()->get("img3"); ?>" alt="Thumbnail 3" onclick="changeImage('<?php echo CFS()->get("img3"); ?>')">
                        <img src="<?php echo CFS()->get("img4"); ?>" alt="Thumbnail 4" onclick="changeImage('<?php echo CFS()->get("img4"); ?>')">
                    </div>
                </div>



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
                            <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/sagyouinn.png.webp" alt="">
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
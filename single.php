<?php get_header() ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <div class="archive-company-wrap ">
            <p class="pan-list">
                <a href="<?php echo home_url(); ?>">ホーム</a>
                > <a href="/reform-area">施工事例一覧</a>
                > <?php
                    $category = get_the_category();
                    if ($category[0]) {
                        echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . "の施工事例一覧" . '</a>';
                    }
                    ?>
                > <span><?php echo CFS()->get("taitoru"); ?></span>

            </p>
        </div>

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
                        <?php
                        $img2 = CFS()->get("img2");
                        if ($img2) {
                            echo '<img src="' . $img2 . '" alt="Thumbnail 1" onclick="changeImage(\'' . $img2 . '\')">';
                        }
                        ?>
                        <?php
                        $img3 = CFS()->get("img3");
                        if ($img3) {
                            echo '<img src="' . $img3 . '" alt="Thumbnail 1" onclick="changeImage(\'' . $img3 . '\')">';
                        }
                        ?>
                        <?php
                        $img4 = CFS()->get("img4");
                        if ($img4) {
                            echo '<img src="' . $img4 . '" alt="Thumbnail 1" onclick="changeImage(\'' . $img4 . '\')">';
                        }
                        ?>
                        <?php
                        $img5 = CFS()->get("img5");
                        if ($img5) {
                            echo '<img src="' . $img5 . '" alt="Thumbnail 1" onclick="changeImage(\'' . $img5 . '\')">';
                        }
                        ?>

                        <?php
                        $img6 = CFS()->get("img6");
                        if ($img6) {
                            echo '<img src="' . $img6 . '" alt="Thumbnail 1" onclick="changeImage(\'' . $img6 . '\')">';
                        }
                        ?>


                    </div>
                </div>



                <section>
                    <div class="construction-about-table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>施工会社</td>
                                    <td>
                                        <?php echo CFS()->get("sekou-company"); ?>


                                    </td>
                                </tr>
                                <tr>
                                    <td>施工内容</td>
                                    <td><?php echo CFS()->get("sekou"); ?>
                                    </td>
                                </tr>

                                <?php
                                $kouki = CFS()->get("kouki");
                                if ($kouki) {
                                ?>
                                    <tr>
                                        <td>工期</td>
                                        <td><?php echo $kouki; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>

                                <tr>
                                    <td>費用</td>
                                    <td> <?php echo CFS()->get("hiyou"); ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </section>

                <?php
                $messe = CFS()->get("messe");
                if ($messe) :
                ?>
                    <section class="construction-about-message">
                        <div class="construction-about-message-grid">
                            <figure class="construction-about-message-img">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/sagyouinn.png.webp" alt="">
                            </figure>
                            <div class="construction-about-message-txt">
                                <?php echo $messe; ?>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
                <?php
                $before1 = CFS()->get("before1");
                if ($before1) :
                ?>

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

                    <?php endif; ?>
                    <?php
                    $before2 = CFS()->get("before2");
                    if ($before2) :
                    ?>
                        <section class="construction-ba">
                            <div class="construction-ba-grid">
                                <figure>
                                    <img decoding="async" src="<?php echo $before2; ?>" alt="">
                                    <figcaption>Before</figcaption>
                                </figure>
                                <figure>
                                    <img decoding="async" src="<?php echo CFS()->get("after2"); ?>" alt="">
                                    <figcaption>After</figcaption>
                                </figure>
                            </div>
                        </section>
                    <?php endif; ?>


            </article>
            <div class="single-to-archive">
                <?php
                $category = get_the_category();
                if ($category[0]) {
                    echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . "一覧はこちら" . '</a>';
                }
                ?>


            </div>

        </div>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
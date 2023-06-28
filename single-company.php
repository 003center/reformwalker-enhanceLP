<?php get_header('single-company'); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="company-wrap">
            <article id="<?php the_ID(); ?> " <?php post_class(); ?>>
                <section class="company-top">
                    <h2><?php echo CFS()->get("company"); ?></h2>
                    <figure>
                        <img src="<?php echo CFS()->get("top-img"); ?>" alt="">
                    </figure>
                </section>


                <section class="company-message">
                    <h2>トップメッセージ</h2>
                    <div class="company-message-grid">
                        <figure class="company-message-president">
                            <img src="<?php echo CFS()->get("president"); ?>" alt="">
                        </figure>

                        <div class="company-message-txt">
                            <?php echo CFS()->get("message"); ?>
                            <span><?php echo CFS()->get("president-name"); ?></span>
                        </div>

                    </div>
                </section>

                <section class="company-construction">
                    <h2>施工事例</h2>
                    <figure>
                        <img decoding="async" src="<?php echo CFS()->get("Construction-img"); ?>" alt="">
                    </figure>
                    <figure>
                        <img decoding="async" src="<?php echo CFS()->get("Construction-img-2nd"); ?>" alt="">
                    </figure>
                </section>


                <section class="company-about">
                    <h2>会社概要</h2>
                    <div class="company-about-table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>名称</td>
                                    <td><?php echo CFS()->get("company"); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>代表取締役</td>
                                    <td> <?php echo CFS()->get("president-name"); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>連絡先</td>
                                    <td> <?php echo CFS()->get("tel"); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>資本金</td>
                                    <td> <?php echo CFS()->get("sihonkin"); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>設立</td>
                                    <td> <?php echo CFS()->get("seturitu"); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>事業内容</td>
                                    <td> <?php echo CFS()->get("zigyou"); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>従業員数</td>
                                    <td> <?php echo CFS()->get("syainn"); ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </section>

                <section>
                    <div class="google-map">
                        <?php echo CFS()->get("map"); ?>
                    </div>
                </section>





            </article>
        </div>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
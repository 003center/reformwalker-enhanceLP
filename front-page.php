<?php get_header(); ?>
<section class="hero-image">
    <div class="hero-image-txt">
        <span>Always stand by you</span>
        <h1> <strong> 地域密着型<br>リフォーム検索サイト</strong></h1>
        <button>
            <a href="<?php echo home_url(); ?>/company">
                会社一覧
            </a>
        </button>
    </div>

</section>

<section class="journal">
    <div class="journal-top">
        <h2>OUR JOURNAL</h2><a href="/journal">すべて見る></a>

    </div>
    <div class="journal-images">
        <?php
        $args = array(
            'post_type' => 'journal',
            'posts_per_page' => 3,
            'order' => 'ASC',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>

            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>




                <a href="<?php the_permalink() ?>" class="journal-image">
                    <figure>
                        <img decoding=“async” src="<?php echo CFS()->get("thum"); ?>" alt="">
                        <figcaption><?php echo CFS()->get("title"); ?></figcaption>
                    </figure>
                </a>















            <?php endwhile;; ?>
    </div>
</section>

<?php endif;
        wp_reset_postdata()
?>




<section class="top-questions-wrap">
    <h2>みんなのお悩み</h2>
    <div class="top-questions">
        <div class="top-question">
            <button>
                <a href="#top-answer1">リフォームとリノベーションの違いってなに？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer1">リフォームとリノベーションの違いってなに？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer1">リフォームとリノベーションの違いってなに？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer1">リフォームとリノベーションの違いってなに？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer1">リフォームとリノベーションの違いってなに？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer1">リフォームとリノベーションの違いってなに？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer1">リフォームとリノベーションの違いってなに？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer1">リフォームとリノベーションの違いってなに？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer1">リフォームとリノベーションの違いってなに？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer1">リフォームとリノベーションの違いってなに？</a>
            </button>
        </div>

    </div>


</section>




<section id="reform-area" class="reform-areas-wrap">
    <h2>施工事例</h2>
    <div class="reform-areas">
        <a href="/kitchen" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-kitchen.jpg" alt="キッチン">
                <figcaption>キッチン</figcaption>
            </figure>
        </a>
        <a href="/toilet" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-toilet.jpg" alt="トイレ">
                <figcaption>トイレ</figcaption>
            </figure>
        </a>
        <a href="/genkan" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-genkan.jpg" alt="玄関">
                <figcaption>玄関</figcaption>
            </figure>
        </a>
        <a href="/yane" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-yane.jpg" alt="屋根">
                <figcaption>屋根</figcaption>
            </figure>
        </a>
        <a href="/bath" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-bath.jpg" alt="お風呂">
                <figcaption>お風呂</figcaption>
            </figure>
        </a>
        <a href="/wasitu" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-wasitsu.jpg" alt="和室">
                <figcaption>和室</figcaption>
            </figure>
        </a>
        <a href="/yousitu" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-yousitu.jpg" alt="洋室">
                <figcaption>洋室</figcaption>
            </figure>
        </a>
        <a href="/sink" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-sink.jpg" alt="洗面台">
                <figcaption>洗面台</figcaption>
            </figure>
        </a>
        <a href="/living" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-living.jpg" alt="リビング">
                <figcaption>リビング</figcaption>
            </figure>
        </a>
    </div>
    <div class="reform-area-p">
        <p>こちらに掲載されていない箇所でもリフォーム可能な場合もございます。<br>
            お気軽にお問い合わせください。</p>
    </div>


</section>



<section class="reform-step-wrap">
    <h2>リフォームまでの流れ</h2>
    <div class="reform-steps">
        <div class="reform-step">
            <h3>お問い合わせ</h3>
            <p>お電話もしくはお問い合わせフォームよりお問い合わせください。</p>
        </div>
        <div class="reform-step">
            <h3>業者を紹介</h3>
            <p>弊社よりお電話もしくはメールにて業者をご紹介させていただきます。
                複数社紹介することも可能です。
                遠慮なく比較、検討し最適な業者をお選びただくことができます。</p>
        </div>

        <div class="reform-step">
            <h3>施工</h3>
            <p>納得のいく業者が決まればあとはその業者と打ち合わせののちに施工となります。</p>
        </div>

    </div>
</section>


<section class="reformwalker-ad">
    <figure>
        <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/リフォームするならリフォームウォーカーで！.png" alt="リフォームするならリフォームウォーカーで！">
    </figure>
</section>



<section class="top-answers-wrap">
    <div class="top-answers">


        <details id="top-answer1">
            <summary>
                リフォームとリノベーションの違いってなに？

            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォームは既存の建物を修繕・改修することであり、主に機能や設備のアップデートを目的とします。<br>
                    一方、リノベーションは建物の内部構造や配置を大幅に変更し、新たな用途やスタイルを実現することを目指します。<br>
                    リフォームは部分的な改修が一般的で、予算や期間も比較的短くなりますが、リノベーションは全体的な変更が行われるため、より大規模かつ時間・費用がかかる場合があります。

                </p>
                <a href="<?php echo home_url() ?>/#reform-area">リフォーム実績はこちら　　＞</a>

            </div>
        </details>


        <details>
            <summary>
                リフォームとリノベーションの違いってなに？

            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォームは既存の建物を修繕・改修することであり、主に機能や設備のアップデートを目的とします。<br>
                    一方、リノベーションは建物の内部構造や配置を大幅に変更し、新たな用途やスタイルを実現することを目指します。<br>
                    リフォームは部分的な改修が一般的で、予算や期間も比較的短くなりますが、リノベーションは全体的な変更が行われるため、より大規模かつ時間・費用がかかる場合があります。

                </p>
                <a href="<?php echo home_url() ?>/#reform-area">リフォーム実績はこちら　　＞</a>

            </div>
        </details>


        <details>
            <summary>
                リフォームとリノベーションの違いってなに？

            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォームは既存の建物を修繕・改修することであり、主に機能や設備のアップデートを目的とします。<br>
                    一方、リノベーションは建物の内部構造や配置を大幅に変更し、新たな用途やスタイルを実現することを目指します。<br>
                    リフォームは部分的な改修が一般的で、予算や期間も比較的短くなりますが、リノベーションは全体的な変更が行われるため、より大規模かつ時間・費用がかかる場合があります。

                </p>
                <a href="<?php echo home_url() ?>/#reform-area">リフォーム実績はこちら　　＞</a>

            </div>
        </details>


        <details>
            <summary>
                リフォームとリノベーションの違いってなに？

            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォームは既存の建物を修繕・改修することであり、主に機能や設備のアップデートを目的とします。<br>
                    一方、リノベーションは建物の内部構造や配置を大幅に変更し、新たな用途やスタイルを実現することを目指します。<br>
                    リフォームは部分的な改修が一般的で、予算や期間も比較的短くなりますが、リノベーションは全体的な変更が行われるため、より大規模かつ時間・費用がかかる場合があります。

                </p>
                <a href="<?php echo home_url() ?>/#reform-area">リフォーム実績はこちら　　＞</a>

            </div>
        </details>


        <details>
            <summary>
                リフォームとリノベーションの違いってなに？

            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォームは既存の建物を修繕・改修することであり、主に機能や設備のアップデートを目的とします。<br>
                    一方、リノベーションは建物の内部構造や配置を大幅に変更し、新たな用途やスタイルを実現することを目指します。<br>
                    リフォームは部分的な改修が一般的で、予算や期間も比較的短くなりますが、リノベーションは全体的な変更が行われるため、より大規模かつ時間・費用がかかる場合があります。

                </p>
                <a href="<?php echo home_url() ?>/#reform-area">リフォーム実績はこちら　　＞</a>

            </div>
        </details>


        <details>
            <summary>
                リフォームとリノベーションの違いってなに？

            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォームは既存の建物を修繕・改修することであり、主に機能や設備のアップデートを目的とします。<br>
                    一方、リノベーションは建物の内部構造や配置を大幅に変更し、新たな用途やスタイルを実現することを目指します。<br>
                    リフォームは部分的な改修が一般的で、予算や期間も比較的短くなりますが、リノベーションは全体的な変更が行われるため、より大規模かつ時間・費用がかかる場合があります。

                </p>
                <a href="<?php echo home_url() ?>/#reform-area">リフォーム実績はこちら　　＞</a>

            </div>
        </details>


        <details>
            <summary>
                リフォームとリノベーションの違いってなに？

            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォームは既存の建物を修繕・改修することであり、主に機能や設備のアップデートを目的とします。<br>
                    一方、リノベーションは建物の内部構造や配置を大幅に変更し、新たな用途やスタイルを実現することを目指します。<br>
                    リフォームは部分的な改修が一般的で、予算や期間も比較的短くなりますが、リノベーションは全体的な変更が行われるため、より大規模かつ時間・費用がかかる場合があります。

                </p>
                <a href="<?php echo home_url() ?>/#reform-area">リフォーム実績はこちら　　＞</a>

            </div>
        </details>


        <details>
            <summary>
                リフォームとリノベーションの違いってなに？

            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォームは既存の建物を修繕・改修することであり、主に機能や設備のアップデートを目的とします。<br>
                    一方、リノベーションは建物の内部構造や配置を大幅に変更し、新たな用途やスタイルを実現することを目指します。<br>
                    リフォームは部分的な改修が一般的で、予算や期間も比較的短くなりますが、リノベーションは全体的な変更が行われるため、より大規模かつ時間・費用がかかる場合があります。

                </p>
                <a href="<?php echo home_url() ?>/#reform-area">リフォーム実績はこちら　　＞</a>

            </div>
        </details>


        <details>
            <summary>
                リフォームとリノベーションの違いってなに？

            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォームは既存の建物を修繕・改修することであり、主に機能や設備のアップデートを目的とします。<br>
                    一方、リノベーションは建物の内部構造や配置を大幅に変更し、新たな用途やスタイルを実現することを目指します。<br>
                    リフォームは部分的な改修が一般的で、予算や期間も比較的短くなりますが、リノベーションは全体的な変更が行われるため、より大規模かつ時間・費用がかかる場合があります。

                </p>
                <a href="<?php echo home_url() ?>/#reform-area">リフォーム実績はこちら　　＞</a>

            </div>
        </details>


        <details>
            <summary>
                リフォームとリノベーションの違いってなに？

            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォームは既存の建物を修繕・改修することであり、主に機能や設備のアップデートを目的とします。<br>
                    一方、リノベーションは建物の内部構造や配置を大幅に変更し、新たな用途やスタイルを実現することを目指します。<br>
                    リフォームは部分的な改修が一般的で、予算や期間も比較的短くなりますが、リノベーションは全体的な変更が行われるため、より大規模かつ時間・費用がかかる場合があります。

                </p>
                <a href="<?php echo home_url() ?>/#reform-area">リフォーム実績はこちら　　＞</a>

            </div>
        </details>




    </div>

</section>


<section class="strong-point-wrap">
    <h2>私たちの強み</h2>
    <div class="strong-points">
        <div class="strong-point">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/tiiki.png" alt="地域密着">
            </figure>
        </div>
        <div class="strong-point">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/hairyo.png" alt="細やかな配慮">
            </figure>
        </div>

    </div>
</section>


<section class="loopslide-wrap">
    <div class="loopSlide">
        <img src="https://design-levelup.com/wp-content/uploads/2020/08/slide.jpg">
        <img src="https://design-levelup.com/wp-content/uploads/2020/08/slide.jpg">
    </div>


</section>

<?php get_footer(); ?>
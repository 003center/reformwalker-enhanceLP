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
    <div class="journal-images journal-images-pc">
        <?php
        $args = array(
            'post_type' => 'journal',
            'posts_per_page' => 3,
            'order' => 'DSC',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>

            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>




                <a href="<?php the_permalink() ?>" class="journal-image">
                    <figure>
                        <img decoding=“async” src="<?php echo CFS()->get("thum"); ?>" alt="">
                        <figcaption> <time class="topic_time" datetime="<?php the_time('Y-m-d'); ?>">
                                <?php the_time('Y.m.d'); ?>
                            </time><br><?php echo CFS()->get("title"); ?></figcaption>
                    </figure>
                </a>















            <?php endwhile;; ?>
    </div>
<?php endif;
        wp_reset_postdata()
?>

<div class="journal-images journal-images-sp">
    <?php
    $args = array(
        'post_type' => 'journal',
        'posts_per_page' => 4,
        'order' => 'DSC',
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
    ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>




            <a href="<?php the_permalink() ?>" class="journal-image">
                <figure>
                    <img decoding=“async” src="<?php echo CFS()->get("thum"); ?>" alt="">
                    <figcaption> <time class="topic_time" datetime="<?php the_time('Y-m-d'); ?>">
                            <?php the_time('Y.m.d'); ?>
                        </time><br><?php echo CFS()->get("title"); ?></figcaption>
                </figure>
            </a>















        <?php endwhile;; ?>
</div>

</section>

<?php endif;
    wp_reset_postdata()
?>




<section class="top-questions-wrap">
    <h2>リフォームの疑問</h2>
    <div class="top-questions">
        <div class="top-question">
            <button>
                <a href="#top-answer1">リフォームとリノベーションの違いってなに？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer2">リフォーム費用の平均は？値段交渉はできる？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer3">リフォームしたときの減価償却はどうなる？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer4">見積もりについて知りたい</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer5">リフォームはどのくらいの時間かかる？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer6">料金はいつ払えばいい？ローンはできる？</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer7">リフォームする際に気を付けること</a>
            </button>
        </div>
        <div class="top-question">
            <button>
                <a href="#top-answer8">リフォームするのに向いている時期はある？</a>
            </button>
        </div>

    </div>


</section>

<section class="reformwalker-ad">
    <figure>
        <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/リフォームするならリフォームウォーカーで！.png.webp" alt="リフォームするならリフォームウォーカーで！">
    </figure>
</section>




<section id="reform-area" class="reform-areas-wrap">
    <h2>施工事例</h2>
    <div class="reform-areas">
        <a href="/kitchen" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-kitchen.jpg.webp" alt="キッチン">
                <figcaption>キッチン</figcaption>
            </figure>
        </a>
        <a href="/toilet" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-toilet.jpg.webp" alt="トイレ">
                <figcaption>トイレ</figcaption>
            </figure>
        </a>
        <a href="/genkan" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-genkan.jpg.webp" alt="玄関">
                <figcaption>玄関</figcaption>
            </figure>
        </a>
        <a href="/yane" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-yane.jpg.webp" alt="屋根">
                <figcaption>屋根</figcaption>
            </figure>
        </a>
        <a href="/bath" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-bath.jpg.webp" alt="お風呂">
                <figcaption>お風呂</figcaption>
            </figure>
        </a>
        <a href="/wasitu" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-wasitsu.jpg.webp" alt="和室">
                <figcaption>和室</figcaption>
            </figure>
        </a>
        <a href="/yousitu" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-yousitu.jpg.webp" alt="洋室">
                <figcaption>洋室</figcaption>
            </figure>
        </a>
        <a href="/sink" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-sink.jpg.webp" alt="洗面台">
                <figcaption>洗面台</figcaption>
            </figure>
        </a>
        <a href="/living" class="reform-area">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/reform-living.jpg.webp" alt="リビング">
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


        <details id="top-answer2">
            <summary>
                リフォーム費用の平均は？値段交渉はできる？

            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォーム費用は、地域や業者によって異なる価格設定が行われ、またリフォームの内容やスケールによっても大きく変動するので一概には言えませんが、一般的なリフォーム費用の範囲としては、数百万円から数千万円までとされています。
                    具体的な費用は、リフォームの種類（キッチン、バスルーム、内装など）、広さや設備の仕様、使用する材料の品質などによって異なります。


                </p>
                <a href="<?php echo home_url() ?>/#reform-area">当サービス利用時の具体的な金額についてはこちらから　　＞</a>

            </div>
        </details>


        <details id="top-answer3">
            <summary>
                リフォームしたときの減価償却はどうなる？

            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォームによる減価償却は、建物の改良や修繕として扱われ、減価償却の対象となります。具体的な減価償却の方法や期間は地域や法律により異なります。一般的にはリフォーム費用は建物の耐用年数に基づいて減価償却されますが、一部の費用は短い耐用年数の装置として扱われる場合もあります。減価償却に関する具体的な計算や方法は個別のケースによって異なるため、税務専門家や会計士に相談することをおすすめします。
                </p>

            </div>
        </details>


        <details id="top-answer4">
            <summary>
                見積もりについて知りたい
            </summary>
            <div class="top-answer-detail">
                <p>
                    見積もりについては、各リフォーム会社によって対応が異なるため、具体的な見積もりを知るためには気になる会社名をお問い合わせフォームからご連絡いただくことをおすすめします。お問い合わせフォームには、お名前、連絡先、希望するリフォーム内容などの必要事項を入力して送信していただくことで、業者から連絡を受けることができます。
                </p>
                <a href="<?php echo home_url() ?>/contact">お問い合わせはこちらから　　＞</a>

            </div>
        </details>


        <details id="top-answer5">
            <summary>
                リフォームはどのくらいの時間かかる？
            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォームにかかる時間は、具体的なプロジェクトの内容や規模によって異なります。以下は一般的な目安です。

                    小規模なリフォーム（例：一室の内装変更、フローリングの張り替えなど）では、数日から数週間程度の工期が一般的です。

                    中程度のリフォーム（例：キッチンやバスルームの改装、間取りの変更など）では、数週間から数ヶ月程度の工期が必要です。具体的な作業内容や施工条件によって工期は変動します。

                    大規模なリフォーム（例：全体的な建物の改修、増築など）では、数ヶ月から半年以上の工期が必要になることがあります。大規模なリフォームプロジェクトでは、建築許可や構造計算などの手続きも必要になるため、それらの時間も考慮する必要があります。
                </p>
                <a href="<?php echo home_url() ?>/#reform-area">具体的な事例はこちらから　　＞</a>

            </div>
        </details>


        <details id="top-answer6">
            <summary>
                料金はいつ払えばいい？ローンはできる？
            </summary>
            <div class="top-answer-detail">
                <p>
                    リフォームの料金については、一般的には以下のような支払い方法がありますが、具体的な条件はリフォーム業者との契約によって異なる場合がありますので、契約書や業者との打ち合わせで確認することが重要です。

                    分割払い: リフォーム工事が進行するにつれて、工事の進捗や工程に応じて分割して支払う方法です。一般的には、工事開始前の前払い金、中間の工程完了時の中間払い、工事完了時の残金の3回程度に分けて支払われることが多いです。

                    一括払い: リフォーム工事の全額を工事完了時に一括で支払う方法です。一括払いを選択する場合は、事前に予算を準備し、契約時に支払いが完了することになります。

                    また、一部の業者ではローンやクレジットカードでの支払いに対応している場合もあります。これにより、一度に全額を支払わずに分割で支払うことができる場合があります。ただし、手数料や金利などが発生する場合もありますので、詳細な条件を確認することが重要です。
                </p>

            </div>
        </details>


        <details id="top-answer7">
            <summary>
                リフォームする際に気を付けること
            </summary>
            <div class="top-answer-detail">
                <p>

                    リフォームする際の注意点は以下です。

                    予算を設定する。
                    信頼できる業者を選ぶ。
                    契約書を確認する。
                    許可や申請を行う。
                    進捗を確認し、コミュニケーションを取る。
                    追加工事や変更に対応する。
                    完了後の確認と保証を受ける。
                </p>

            </div>
        </details>


        <details id="top-answer8">
            <summary>
                リフォームするのに向いている時期はある？
            </summary>
            <div class="top-answer-detail">
                <p>
                    冬季オフシーズン: 冬は一般的にリフォーム業者の忙しさが少なくなる時期です。需要が低下するため、業者からの見積もりや工事料金の交渉余地がある場合があります。

                    年度末や年度初め: 会社の予算繰り越しや新たな予算の開始に伴い、年度末や年度初めにはリフォームの需要が増える傾向があります。この時期は需要が高まるため、予約や工事のスケジュール調整が必要になる場合があります。

                    キャンペーン期間: リフォーム業者や建材メーカーなどが特別なキャンペーンやセールを行う期間があります。これらの期間を狙ってリフォームすると、割引や特典を受けることができる場合があります。

                    悪天候時: 天候が悪い時期にはリフォームの需要が減少するため、業者からの見積もりや工事料金の交渉余地がある場合があります。ただし、天候によっては工事の進行に影響が出る可能性もあるため、注意が必要です。
                </p>

            </div>
        </details>








    </div>

</section>


<section class="strong-point-wrap">
    <h2>私たちの強み</h2>
    <div class="strong-points">
        <div class="strong-point">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/tiiki.png.webp" alt="地域密着">
            </figure>
        </div>
        <div class="strong-point">
            <figure>
                <img decoding=“async” loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/hairyo.png.webp" alt="細やかな配慮">
            </figure>
        </div>

    </div>
</section>



<?php get_footer(); ?>
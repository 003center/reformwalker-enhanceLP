<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        リフォームウォーカー |愛知、岐阜を中心に展開。検索では見つけづらい優良リフォーム会社が見つかるかもしれません！
    </title>
    <?php
    // メタディスクリプションを設定するカスタム関数
    function custom_meta_description()
    {
        // ページごとのメタディスクリプションを設定
        if (is_home()) {
            $meta_description = "リフォームウォーカーはあなたのリフォームに最適な業者を紹介します！愛知、岐阜を中心に展開しております！登録業者は随時更新していく予定です。話を聞くだけでも大歓迎です！お気軽にご相談ください。";
        } elseif (is_single()) {
            $meta_description = "リフォームウォーカーの施工事例の詳細ページです。";
        } elseif (is_page('registration')) {
            $meta_description = "リフォームウォーカーに登録をお考えのリフォーム施工会社の方。是非、こちらを読んでお気軽にお問い合わせください。";
        } elseif (is_page('contact')) {
            $meta_description = "リフォームウォーカーのお問い合わせフォームです。どんな些細なことでもかまいません。リフォームしたい人、お客さんを見つけたいリフォーム会社の方、是非お問い合わせください。";
        } elseif (is_page('company')) {
            $meta_description = "リフォームウォーカーの会社一覧ページ。愛知、岐阜を中心に展開中！リフォーム施工会社を掲載しております。施工会社は随時更新予定です！";
        } elseif (is_page('reform-area')) {
            $meta_description = "リフォームウォーカーの施工事例一覧ページ。トイレ、お風呂、洗面台、リビング、フルリフォームなど様々なリフォームが可能です！";
        } elseif (is_page('faq')) {
            $meta_description = "リフォームウォーカーに対するよくある質問のページ。料金や、見積もりについてをはじめとして様々な疑問にお答えします。不明な点がございましたらお問い合わせフォームもしくはお電話にてお問い合わせください！";
        } elseif (is_page('policy')) {
            $meta_description = "リフォームウォーカーのプライバシーポリシーのページ。";
        } else {
            $meta_description = "リフォームウォーカー";
        }

        // メタディスクリプションの出力
        echo '<meta name="description" content="' . $meta_description . '">';
    }






    // カスタム関数を呼び出し
    custom_meta_description();
    ?>
    <meta name="format-detection" content="telephone=no">

    <!--OGP-->

    <meta property="og:description" content="リフォームウォーカー |愛知、岐阜を中心に展開。検索では見つけづらい優良リフォーム会社が見つかるかもしれません！">
    <meta property="og:title" content="リフォームウォーカー｜愛知・岐阜">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/reformwalker_logoA.png">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://reformwalker.com/">
    <!-- フォント
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
    <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&family=Klee+One:wght@400;600&family=Rampart+One&family=Zen+Maru+Gothic:wght@500&family=Mochiy+Pop+One&display=swap" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11319914515"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-11319914515');
    </script>
    <!-- Event snippet for Website lead conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-11319914515/sGIbCKPkitsYEJPg4JUq'
        });
    </script>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <?php wp_body_open(); ?>


    <!--ヘッダー-->
    <header id="header-top">
        <section class="hero-wrap">
            <div class="menu-content">
                <div class="menu-content-items">
                    <div class="menu-item-logo">
                        <figure>
                            <a href="<?php echo home_url(); ?>">
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/reformwalker_logoA.svg" alt="">

                            </a>
                        </figure>
                    </div>
                    <address class="header-address">


                        <div class="header-address-button">
                            <a href="/contact">
                                <div>お問い合わせ</div>
                            </a>


                        </div>



                        <div class="header-tel-button">
                            <a href="tel:0120-523-233"> <span>受付時間 平日9:00～18:00</span>
                                <div class="header-nav-tel">0120-523-233</div>
                            </a>
                        </div>
                    </address>

                    <div class="clear"></div>

                    <h1 class="hero-txt">
                        <p>地元のリフォーム会社を<span>最短２分</span>
                            でご紹介！
                            <br>リフォーム業者紹介サービス　リフォームウォーカー
                        </p>

                    </h1>
                    <div class="hero-contact">


                        <a href="/contact">
                            <figure>
                                <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/Group 1.png" alt="">
                            </figure>
                        </a>


                    </div>



                    <nav class="menu-item-all">
                        <ul>
                            <li>
                                <a href="<?php echo home_url(); ?>">ホーム</a>
                            </li>
                            <li class="hero-itiran">
                                <a href="/company">会社一覧</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url() ?>/reform-area">施工事例</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url(); ?>/#reform-question" onclick="checkMenuCheckbox()">リフォームの疑問</a>
                            </li>
                            <li>
                                <a href="/faq">当サイトへの質問</a>
                            </li>
                            <li>
                                <a href="/policy">プライバシーポリシー<br>免責事項</a>
                            </li>


                        </ul>

                    </nav>
                </div>

            </div>









            </div>
        </section>



        <div class="sticky-arrow">
            <a href="#header-top"></a>
        </div>

    </header>
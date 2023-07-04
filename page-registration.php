<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        リフォームウォーカー
    </title>
    <meta name="description" content="リフォームウォーカーに掲載を検討している方へのページです。">
    <meta name="format-detection" content="telephone=no">


    <!-- フォント
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&family=Klee+One:wght@400;600&family=Zen+Maru+Gothic:wght@500&display=swap" rel="stylesheet">




    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <?php wp_body_open(); ?>


    <!--ヘッダー-->
    <header>

        <div class="header-top" id="header-top">
            <div class="header-name">

                <a href="<?php echo home_url() ?>"> <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/reformwalker_logoC.svg" alt="リフォームウォーカーのロゴ">

                </a>
            </div>
            <div class="header-name-address">
                <div class="header-registration">
                    <a href="<?php echo home_url() ?>/registration"><img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/top-registration.png" alt="登録をお考えの施工会社様はこちら"></a>

                </div>

                <address class="header-address">
                    <button>
                        <span>営業時間 平日9:00～18:00</span>
                        <div class="header-nav-tel">0120-523-233</div>

                    </button>


                    <button>
                        <a href="/contact">
                            <div>お問い合わせ</div>
                        </a>
                    </button>

                </address>

            </div>
            <!-- ハンバーガーメニュー-->
            <div class="hamburger-menu">
                <input type="checkbox" id="menu-btn-check">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <!--ここからメニュー-->
                <div class="menu-content">
                    <ul>
                        <li>
                            <a href="<?php echo home_url(); ?>">ホーム</a>
                        </li>
                        <li>
                            <a href="/company">会社一覧</a>
                        </li>
                        <li>
                            <a href="<?php echo home_url() ?>/#reform-area" onclick="checkMenuCheckbox()">施工事例</a>
                        </li>
                        <!--<li>
                           <a href=" /journal">ジャーナル</a> 
                        </li>-->
                        <li>
                            <a href="<?php echo home_url(); ?>/#top-question" onclick="checkMenuCheckbox()">リフォームの疑問</a>
                        </li>
                        <li>
                            <a href="/faq">当サイトへの質問</a>
                        </li>


                    </ul>


                    <address class="header-address">
                        <button>
                            <a href="tel:0120-523-233"> <span>営業時間 平日9:00～18:00</span>
                                <div class="header-nav-tel">0120-523-233</div>
                            </a>

                        </button>
                        <button>
                            <a href="/contact">
                                <div>お問い合わせ</div>
                            </a>
                        </button>

                    </address>
                    <ul>
                        <li>
                            <a href="/policy">プライバシーポリシー</a>
                        </li>

                    </ul>
                    <div class="header-registration">
                        <a href="<?php echo home_url() ?>/registration"><img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/top-registration.png" alt="登録をお考えの施工会社様はこちら"></a>

                    </div>

                </div>
                <!--ここまでメニュー-->
            </div>
        </div>
        <nav class="header-nav">
            <button><a href="<?php echo home_url(); ?>">ホーム</a></button>
            <button><a href="/company">会社一覧</a></button>
            <button><a href="<?php echo home_url() ?>/#reform-area">施工事例</a></button>
            <!--<button><a href="/journal">ジャーナル</a></button> -->

            <div class="header-top-menu-button">
                <button><a href="/faq">よくある質問</a></button>
                <div class="header-top-menu-item">
                    <a href="<?php echo home_url(); ?>/#top-question">リフォームの疑問</a>
                    <a href="/faq">当サイトへの質問</a>
                </div>
            </div>

        </nav>
        <div class="sticky-arrow">
            <button>
                <a href="#header-top"></a>
            </button>
        </div>

    </header>




    <div class="registration-wrap">
        <h2>登録をお考えの施工会社様</h2>
        <p> 当サイトに業者情報を掲載するには、以下の手順をご案内いたします。
        </p><br>
        <p> 当サイトのお問い合わせページにアクセスし、お問い合わせフォームをご利用いただくか、指定された連絡先に直接お問い合わせください。
        </p>
        <p> お問い合わせ時に、以下の情報を提供してください：
        </p>


        <br>
        <p> ・会社名および所在地
        </p>
        <p> ・業種および専門分野
        </p>


        <p> ・提供するリフォームサービスや特徴
        </p>


        <p> ・連絡先情報（電話番号、メールアドレスなど）
        </p><br>


        <p> 提供いただいた情報をもとに、当サイトの運営チームが審査を行います。審査では、業者の信頼性や実績、適切なライセンス・保険の有無などを確認いたします。
        </p>


        <p> 審査が合格した場合、業者情報をサイト上に掲載いたします。掲載には一定の時間がかかる場合がありますので、ご了承ください。
        </p>
        <p> なお、掲載の可否や審査結果については、個別にご連絡させていただきます。
        </p>


        <p> ご提供いただいた業者情報は、利用者の皆様に信頼できる情報を提供するために利用させていただきます。より多くの利用者に届けるために、ぜひお問い合わせください。
        </p>


        <a href="/contact">お問い合わせはこちらから</a>

    </div>










    <?php get_footer(); ?>
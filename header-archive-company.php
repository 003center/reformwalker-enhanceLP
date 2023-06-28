<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="リフォームウォーカーに登録しているリフォーム業者の一覧です。愛知、岐阜を中心に展開中！今後は全国展開も予定しております。">
    <meta name="format-detection" content="telephone=no">


    <!-- フォント-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&family=Klee+One:wght@400;600&family=Zen+Maru+Gothic:wght@500&display=swap" rel="stylesheet">




    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <?php wp_body_open(); ?>


    <!--ヘッダー-->
    <header>
        <div class="header-top" id="header-top">
            <div class="header-name">
                <a href="<?php echo home_url() ?>"> リフォームウォーカー
                </a>
            </div>
            <div class="header-name-address">

                <nav class="header-nav">
                    <button><a href="<?php echo home_url(); ?>">ホーム</a></button>
                    <button><a href="/company">会社一覧</a></button>
                    <button><a href="<?php echo home_url() ?>/#reform-area">施工事例</a></button>
                    <button><a href="/journal">ジャーナル</a></button>
                    <button><a href="/faq">よくある質問</a></button>


                </nav>
                <address class="header-address">
                    <button>
                        <span>営業時間 9:00～18:00</span>
                        <div class="header-nav-tel">0120-523-233</div>

                    </button>
                    <button>
                        <a href="/contact">
                            <div>お問い合わせ</div>
                        </a>
                    </button>


                </address>

            </div>

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
                            <a href="<?php echo home_url() ?>/#reform-area">施工事例</a>
                        </li>
                        <li>
                            <a href="/journal">ジャーナル</a>
                        </li>
                        <li>
                            <a href="/faq">よくある質問</a>
                        </li>


                    </ul>
                    <address class="header-address">
                        <button>
                            <a href=""> <span>営業時間 9:00～18:00</span>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ASBY不動産.svg" alt="">

                </div>
                <!--ここまでメニュー-->
            </div>
        </div>

        <div class="sticky-arrow">
            <button>
                <a href="#header-top"></a>
            </button>
        </div>

    </header>
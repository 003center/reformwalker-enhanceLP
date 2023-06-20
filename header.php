<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <meta name="description" content="ページの説明">
    <meta name="format-detection" content="telephone=no">

    <!-- ファビコン-->
    <link rel="icon" href="favicon.ico" />
    <link rel="icon" href="favicon.svg" type="image/svg+xml">

    <!--OGP -->
    <!-- SNSなどでシェアされたときの表示-->
    <meta property="og:site_name" content="サイト名" />
    <!--ページURLを絶対パスで設定-->
    <meta property="og:url" content="URL" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <?php wp_body_open(); ?>


    <!--ヘッダー-->
    <header>

        <div>
            リフォームウォーカー
        </div>
        <nav>
            <button><a href="">ホーム</a></button>
            <button><a href="">会社検索</a></button>
            <button><a href="">施工事例</a></button>
            <button><a href="">ジャーナル</a></button>
            <button><a href="">よくある質問</a></button>


        </nav>
        <address>
            <button>
                <a href=""><span>営業時間 9:00～18:00</span>
                    <div>0120-523-233</div>
                </a>
            </button>
            <button>
                <a href="">
                    <div>お問い合わせフォーム</div>
                </a>
            </button>


        </address>


    </header>
<?php get_header() ?>
<div class="archive-company-wrap ">
    <p class="pan-list">
        <a href="<?php echo home_url(); ?>">ホーム</a>
        > <span>会社一覧</span>

    </p>
</div>
<div class="archive-company-hero">
    <h2>施工会社一覧</h2>
</div>
<div class="archive-company-wrap">


    <div class="search-container">
        <input type="text" id="search-input" class="search-input" placeholder="都道府県名を漢字で入力してください">
        <i class="fa fa-search search-icon"></i>
    </div>

    <div class="tabs">
        <button class="tab-button" data-region="all">すべて</button>
        <button class="tab-button" data-region="愛知県">愛知県</button>
        <button class="tab-button" data-region="岐阜県">岐阜県</button>
    </div>

    <div class="archive-company-grid">

        <a href="/tanikawagumi" class="archive-company-content">
            <figure>
                <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/tanikawa/tanikawagumi.jpg" alt="谷川組">
            </figure>
            <div class=" archive-company-txt">
                株式会社　谷川組

            </div>
            <div class="archive-company-region">
                愛知県
            </div>
        </a>

        <a href="/maruchouhome" class="archive-company-content">
            <figure>
                <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/maruchouhome/main-img.jpg" alt="丸長ホーム">
            </figure>
            <div class=" archive-company-txt">
                株式会社　丸長ホーム

            </div>
            <div class="archive-company-region">
                岐阜県
            </div>
        </a>

        <a href="/marumikensetu" class="archive-company-content">
            <figure>
                <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/marumi.jpg" alt="丸美建設工業">
            </figure>
            <div class=" archive-company-txt">
                丸美建設工業株式会社

            </div>
            <div class="archive-company-region">
                岐阜県
            </div>
        </a>

        <a href="/kondoukentiku" class="archive-company-content">
            <figure>
                <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/kondoukentiku/kondou-top.png" alt="近藤建設">
            </figure>
            <div class=" archive-company-txt">
                有限会社　近藤建築

            </div>
            <div class="archive-company-region">
                岐阜県
            </div>
        </a>

        <a href="/sunfriend" class="archive-company-content">
            <figure>
                <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/sunfriend/gasuou.png" alt="ガス王">
            </figure>
            <div class=" archive-company-txt">
                株式会社　SunFriend

            </div>
            <div class="archive-company-region">
                愛知県
            </div>
        </a>
        <!--
        <a href="/chukyourifain" class="archive-company-content">
            <figure>
                <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/tyuukyourifainn.webp" alt="中京リファイン">
            </figure>
            <div class=" archive-company-txt">
                株式会社　中京リファイン

            </div>
            <div class="archive-company-region">
                愛知県
            </div>
        </a>

-->













    </div>

    <div class="kousinyotei">随時更新予定！</div>

    <div class="archive-company-pre">
        <div class="archive-company-hero">
            <h2?>掲載準備企業</h2>
        </div>

        <div class="archive-company-flex">

            <a href="" class="archive-company-content no-click">
                <figure>
                    <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/tyuukyourifainn.webp" alt="中京リファイン">
                </figure>
                <div class=" archive-company-txt">
                    株式会社　中京リファイン

                </div>
                <div class="archive-company-region">
                    愛知県
                </div>
            </a>
        </div>

    </div>






</div>
<span class="comingsoon">Coming Soon...</span>







<?php get_footer(); ?>
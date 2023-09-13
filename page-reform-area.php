<?php get_header() ?>
<div class="archive-company-wrap ">
    <p class="pan-list">
        <a href="<?php echo home_url(); ?>">ホーム</a>
        > <span>施工事例一覧</span>

    </p>
</div>

<h2 class="category-h2">施工事例一覧</h2>
<div class="search-container">
    <input type="text" id="search-input2" class="search-input" placeholder="都道府県名を漢字で入力してください">
    <i class="fa fa-search search-icon"></i>
</div>
<!--
<div class="tabs2">
    <button class="tab-button2" data-region="all">すべて</button>
    <button class="tab-button2" data-region="中京リファイン">中京リファイン</button>
    <button class="tab-button2" data-region="谷川組">谷川組</button>
</div>
-->

<div class="tab_content-grid">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $arg = array(
        'paged' => $paged,
        'posts_per_page' => 30,
        'orderby' => 'date', // 日付でソート
        'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
    );
    $query = new WP_Query($arg);

    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
    ?>
            <div class="tab_content-item">
                <!-- ここに投稿の内容を表示するコードを追加 -->
                <article id="<?php the_ID(); ?>" <?php post_class('topic'); ?>>
                    <div class="topic_meta">
                        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('medium'); ?></a>
                        <h2 class="topic_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink(); ?>" class="tab-item-fee">
                            <?php echo CFS()->get("hiyou"); ?>
                        </a>
                    </div>
                </article>
            </div>
        <?php endwhile; ?>
</div>
<div class="navigation">
    <?php wp_pagenavi(array('query' => $query)); ?>
</div>
<?php
        wp_reset_postdata();
    endif;
?>


<?php get_footer(); ?>
<?php get_header() ?>

<?php
// ループを開始する前に、現在のタグの情報を取得
$tag = get_queried_object();
?>
<div class="archive-company-wrap ">
    <p class="pan-list">
        <a href="<?php echo home_url(); ?>">ホーム</a>
        > <a href="/<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a>

        > <span><?php echo $tag->name; ?>の施工事例一覧</span>
    </p>
</div>

<!-- タグ名を表示 -->
<h2 class="company-construction-h2"><?php echo $tag->name; ?>の施工事例一覧</h2>
<div class="tab_content-grid">


    <!-- タグ別の投稿一覧を表示 -->
    <?php
    $query_args = array(
        'post_type' => 'post', // 投稿タイプを指定
        'tag_id'    => $tag->term_id, // 現在のタグのIDを指定
        'posts_per_page' => -1, // すべての投稿を表示（-1はすべての投稿を意味します）
    );

    $tag_query = new WP_Query($query_args);
    ?>

    <?php if ($tag_query->have_posts()) : ?>
        <?php
        while ($tag_query->have_posts()) :
            $tag_query->the_post();
            // 投稿の表示コードをここに追加
        ?>



            <div class="tab_content-item">
                <!--
            <div class="sekou-company">
                施工: <?php echo CFS()->get("sekou-company"); ?>

            </div>
    -->

                <article id="<?php the_ID(); ?>" <?php post_class('topic'); ?>>
                    <div class="topic_meta">

                        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('medium'); ?>
                        </a>

                        <h2 class="topic_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink(); ?>" class="tab-item-fee">
                            <?php echo CFS()->get("hiyou"); ?>

                        </a>
                    </div>

                </article>

            </div>





        <?php endwhile; ?>
</div>
<?php endif; ?>

<?php
wp_reset_postdata(); // リセットを忘れないように
?>

<?php get_footer(); ?>
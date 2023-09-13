<?php get_header() ?>

<div class="archive-company-wrap ">
    <p class="pan-list">
        <a href="<?php echo home_url(); ?>">ホーム</a>
        > <span>お問い合わせ</span>

    </p>
</div>

<div class="contact-wrap">
    <h2>お問い合わせ</h2>
    <?php echo do_shortcode('
[contact-form-7 id="40" title="コンタクトフォーム 1"]'); ?>

</div>
<?php get_footer() ?>
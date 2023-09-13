<?php get_header() ?>


<?php
// 現在のページのスラッグを取得
$current_slug = get_post_field('post_name', get_post());

/*谷川組 */
if ($current_slug === 'tanikawagumi') : ?>
    <div class="archive-company-wrap ">
        <p class="pan-list">
            <a href="<?php echo home_url(); ?>">ホーム</a>
            > <a href="/company">会社一覧</a>
            > <span>株式会社　谷川組</span>

        </p>
    </div>

    <div class="company-wrap">
        <article>
            <section class="company-top">
                <h2>株式会社　谷川組</h2>
                <figure>
                    <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/tanikawa/tanikawagumi.jpg" alt="谷川組">
                </figure>
            </section>


            <section class="company-message">
                <h2>トップメッセージ</h2>
                <div class="company-message-grid">
                    <figure class="company-message-president">
                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/tanikawa/tanikawagumi-president.jpg" alt="谷川組社長">
                    </figure>

                    <div class="company-message-txt">
                        <span></span>
                    </div>

                </div>
            </section>

            <section class="company-construction">
                <h2>施工事例</h2>
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/tanikawa/tanikawa-ex1.jpg" alt="">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/tanikawa/tanikawa-ex2.jpg" alt="">
                    </figcaption>
                </figure>
                <a href="/tag/tanikawagumi">谷川組の施工事例一覧</a>

            </section>


            <section class="company-about">
                <h2>会社概要</h2>
                <div class="company-about-table">
                    <table>
                        <tbody>
                            <tr>
                                <td>名称</td>
                                <td> 株式会社　谷川組</td>
                            </tr>

                            <tr>
                                <td>代表取締役</td>
                                <td> 谷川　佳隆</td>
                            </tr>
                            <tr>
                                <td>連絡先</td>
                                <td> 0569-35-2350</td>
                            </tr>
                            <tr>
                                <td>資本金</td>
                                <td>2,000万円 </td>
                            </tr>
                            <tr>
                                <td>設立</td>
                                <td> 昭和８年</td>
                            </tr>
                            <tr>
                                <td>事業内容</td>
                                <td> １.新築、増改築<br> ２.外構工事<br> ３.下水工事</td>
                            </tr>
                            <tr>
                                <td>従業員数</td>
                                <td>3名 </td>
                            </tr>

                        </tbody>
                    </table>


                </div>
            </section>

            <section>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3273.278495558337!2d136.84151671182812!3d34.87435237376164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004876ad7ed0d45%3A0x8ac5e71d9dda0266!2z6LC35bed57WE!5e0!3m2!1sja!2sjp!4v1689917361209!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>





        </article>
    </div>


    <!--丸長ホーム -->
    <?php elseif ($current_slug === 'maruchouhome') : ?>:
    <div class="archive-company-wrap ">
        <p class="pan-list">
            <a href="<?php echo home_url(); ?>">ホーム</a>
            > <a href="/company">会社一覧</a>
            > <span>株式会社　丸長ホーム</span>

        </p>
    </div>

    <div class="company-wrap">
        <article>
            <section class="company-top">
                <h2>株式会社　丸長ホーム</h2>
                <figure>
                    <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/maruchouhome/main-img.jpg" alt="丸長ホーム">
                </figure>
            </section>


            <section class="company-message">
                <h2>トップメッセージ</h2>
                <div class="company-message-grid">
                    <figure class="company-message-president">
                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/maruchouhome/" alt="丸長ホーム社長">
                    </figure>

                    <div class="company-message-txt">
                        <p>設立以来、早50年の実績を持ち、従業員・協力会社と一丸になり、顧客の皆様方の要求を夢実現に向かって、新しい設計と技術の向上に懸命に努力し、社員がそれぞれに共に学びあい、それを顧客の皆様方より非常な好評を頂き、日を追って販路拡張の栄を得ております。</p>
                        <br>
                        <p>何が会社の資産なのか、それは会社の持つエネルギーだと考え「できる」と確信して、動き始める社風を大切にし、やって成功する行動力、社員の発するエネルギーの高さこそが会社の最大の資産だと思っています。</p>
                        </p>

                        <span>長原健二</span>
                    </div>

                </div>
            </section>

            <section class="company-construction">
                <h2>施工事例</h2>
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/maruchouhome/" alt="">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/maruchouhome/" alt="">

                </figure>
                <!--<a href="/tag/maruchouhome">丸長ホームの施工事例一覧</a>-->

            </section>


            <section class="company-about">
                <h2>会社概要</h2>
                <div class="company-about-table">
                    <table>
                        <tbody>
                            <tr>
                                <td>名称</td>
                                <td> 株式会社　丸長ホーム</td>
                            </tr>

                            <tr>
                                <td>代表取締役</td>
                                <td> 長原 健二</td>
                            </tr>
                            <tr>
                                <td>連絡先</td>
                                <td> 0574-72-1344</td>
                            </tr>
                            <tr>
                                <td>資本金</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>設立</td>
                                <td> 昭和29年</td>
                            </tr>
                            <tr>
                                <td>事業内容</td>
                                <td> １.新築、増改築<br> ２.外構工事<br> ３.下水工事</td>
                            </tr>
                            <tr>
                                <td>従業員数</td>
                                <td>15名 </td>
                            </tr>

                        </tbody>
                    </table>


                </div>
            </section>

            <section>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12981.751626312549!2d137.2168045!3d35.5675819!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600324a901c9cae7%3A0x6ae687473694ee0c!2z77yI5qCq77yJ5Li46ZW344Ob44O844Og!5e0!3m2!1sja!2sjp!4v1687761557627!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>





        </article>
    </div>






    <!--丸美建設 -->

    <?php elseif ($current_slug === 'marumikensetu') : ?>:
    <div class="archive-company-wrap ">
        <p class="pan-list">
            <a href="<?php echo home_url(); ?>">ホーム</a>
            > <a href="/company">会社一覧</a>
            > <span>丸美建設工業株式会社</span>

        </p>
    </div>

    <div class="company-wrap">
        <article>
            <section class="company-top">
                <h2>丸美建設工業株式会社</h2>
                <figure>
                    <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/marumikensetu/marumi.jpg" alt="丸美建設工業株式会社">
                </figure>
            </section>


            <section class="company-message">
                <h2>トップメッセージ</h2>
                <div class="company-message-grid">
                    <figure class="company-message-president">
                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/marumikensetu/marumi-pre.jpg" alt="丸長ホーム社長">
                    </figure>

                    <div class="company-message-txt">
                        <p> 数ある木材の中で、明日は桧になろうと日々努力している木材があります。立派な木に成長しても、最後まで桧になることはできず、伐採されてしまいますが材質は桧に劣らず、むしろ桧より良質材と認められ日本最古の建物である『日本の宝物』が入庫されている正倉院の建物に使用されています。明日は桧になろう、明日は桧になろうと思い育ったところから「あす桧(ひ）※」とい樹種の名前が付いています。
                        </p>
                        <br>
                        <p> 私の持論ですが、家づくりに携わっている職人さんの中で、大工さんでも立派な志をもち、最初は大一から始まり、棟梁格の大工さんから、家づくりの技術を教わり日々努力を重ね、最後は大工となっていく。しかし、十までには満たされなく、九で終わってしまい、大九として称され、日々努力を重ねています。
                        </p><br>

                        <p> なぜ、大九どまりで、大十と称されないのか？

                            その残りの１ポイントは、立派な大工になろうという気持ちを持ち続けるという目標であり、謙虚さであると思います。それであるがゆえに、神様が数字の九ではだめだから、施工の一字を与え、大工と称されたものだと思います。
                        </p><br>

                        <p> 大事な家づくりに関しても、決して満足感やおごりを感じず、日々最大限の努力をお客様に対してスタッフ一同良い家づくりの御提供を続けていきたいと思っています。
                        </p>
                        <span>小栗 良夫</span>
                    </div>

                </div>
            </section>

            <section class="company-construction">
                <h2>施工事例</h2>
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/marumikensetu/matumikensetu-ex1.jpg" alt="">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/marumikensetu/marumikensetu-ex2.jpg" alt="">

                </figure>
                <a href="/tag/marumikensetu">丸美建設工業の施工事例一覧</a>

            </section>


            <section class="company-about">
                <h2>会社概要</h2>
                <div class="company-about-table">
                    <table>
                        <tbody>
                            <tr>
                                <td>名称</td>
                                <td> 丸美建設工業株式会社</td>
                            </tr>

                            <tr>
                                <td>代表取締役</td>
                                <td> 小栗 良夫</td>
                            </tr>
                            <tr>
                                <td>連絡先</td>
                                <td>TEL: 0574-73-1930<br>
                                    mail:marumi@tkcnet.ne.jp</td>
                            </tr>
                            <tr>
                                <td>資本金</td>
                                <td>1,000万円</td>
                            </tr>
                            <tr>
                                <td>設立</td>
                                <td> 昭和29年</td>
                            </tr>
                            <tr>
                                <td>事業内容</td>
                                <td>木造建築業<br>リフォーム工事</td>
                            </tr>
                            <tr>
                                <td>従業員数</td>
                                <td>6名(社長を含みます) </td>
                            </tr>
                            <tr>
                                <td>SNS</td>
                                <td>
                                    <div class="sns-cions">
                                        <a class="sns-icon" href="https://www.instagram.com/maruminoie_since1954/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="instagram"></a>

                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>


                </div>
            </section>

            <section>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12985.26814167231!2d137.3070559!3d35.5458716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600330bde01bf529%3A0x66f89bfc329995fc!2z5Li4576O5bu66Kit5bel5qWt77yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1687851735693!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>





        </article>
    </div>




    <!--近藤建築 -->

    <?php elseif ($current_slug === 'kondoukentiku') : ?>:
    <div class="archive-company-wrap ">
        <p class="pan-list">
            <a href="<?php echo home_url(); ?>">ホーム</a>
            > <a href="/company">会社一覧</a>
            > <span>有限会社　近藤建築</span>

        </p>
    </div>

    <div class="company-wrap">
        <article>
            <section class="company-top">
                <h2>有限会社　近藤建築</h2>
                <figure>
                    <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/kondoukentiku/kodnou-top2.jpg" alt="有限会社　近藤建築">
                </figure>
            </section>


            <section class="company-message">
                <h2>トップメッセージ</h2>
                <div class="company-message-grid">
                    <figure class="company-message-president">
                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/kondoukentiku/kondou-pre.jpg" alt="有限会社　近藤建築社長">
                    </figure>
                    <div class="company-message-txt">

                        <p> 関わるすべての人の笑顔と安心を創る会社
                        </p>
                        <p> 先代の社長が昭和31年より走り続け築きあげてきた有限会社 近藤建築を、平成30年に受け継がせていただくことになりました。
                        </p><br>
                        <p> お客様、協力業者様、社員、弊社に関わるすべての人とその家族が笑顔になり、安心して過ごせる建築をご提供できるよう信念をもち励んでおります。お客様から私共の会社に依頼してよかったと言っていただけるよう、また、未来を〝住まいる（スマイル）〟にできるよう、歩んでいきたいと思っております。
                        </p>
                        <br>
                        <p> 「建築のことなら近藤建築に」と声がかかるよう、志は高く地域No.1を目標に、また私の夢でもある、地元岐南町に「サッカースタジアム」を建設し、子供たちに建築の魅力・夢の力を伝えたいと思います。
                            <span>近藤　祐貴</span>
                        </p>

                    </div>

                </div>
            </section>

            <section class="company-construction">
                <h2>施工事例</h2>
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/kondoukentiku/kondou-ex1.jpg" alt="">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/kondoukentiku/kondou-ex2.jpg" alt="">

                </figure>
                <!--<a href="/tag/kondoukentiku">近藤建築の施工事例一覧</a>-->

            </section>


            <section class="company-about">
                <h2>会社概要</h2>
                <div class="company-about-table">
                    <table>
                        <tbody>
                            <tr>
                                <td>名称</td>
                                <td> 有限会社　近藤建築</td>
                            </tr>

                            <tr>
                                <td>代表取締役</td>
                                <td> 近藤　祐貴</td>
                            </tr>
                            <tr>
                                <td>連絡先</td>
                                <td> 058-271-8148</td>
                            </tr>
                            <tr>
                                <td>資本金</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>設立</td>
                                <td> 昭和31年</td>
                            </tr>
                            <tr>
                                <td>事業内容</td>
                                <td>新築木造注文住宅の設計・施工及び管理 RC及び鉄骨建築の設計・施工及び管理 建物の改修・リフォームの施工及び管理 外構の設計・施工及び管理 土木工事・宅地造成・不動産の売買及び仲介 介護保険住宅改修 設計・施工及び管理</td>
                            </tr>
                            <tr>
                                <td>従業員数</td>
                                <td> 35名 </td>
                            </tr>
                            <tr>
                                <td>SNS</td>
                                <td>
                                    <div class="sns-cions">
                                        <a class="sns-icon" href="https://www.instagram.com/kondoukenchiku/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="instagram"></a>
                                        <a class="sns-icon" href="https://line.me/R/ti/p/%40057xhwwp/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/line.png" alt="line"></a>
                                        <a class="sns-icon" href="https://www.facebook.com/kondoukenchiku"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="facebook"></a>

                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>


                </div>
            </section>

            <section>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3252.4693459728373!2d136.7743751!3d35.3936152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003a8e5826f704d%3A0x2885caa20afe8fa!2z5pyJ6ZmQ5Lya56S-IOi_keiXpOW7uueviQ!5e0!3m2!1sja!2sjp!4v1688007759234!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>





        </article>
    </div>



    <!--SunFriend -->

    <?php elseif ($current_slug === 'sunfriend') : ?>:
    <div class="archive-company-wrap ">
        <p class="pan-list">
            <a href="<?php echo home_url(); ?>">ホーム</a>
            > <a href="/company">会社一覧</a>
            > <span>株式会社　SunFriend</span>

        </p>
    </div>

    <div class="company-wrap">
        <article>
            <section class="company-top">
                <h2>株式会社SunFriend</h2>
                <figure>
                    <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/sunfriend/gasuou.png" alt="sunfriend">
                </figure>
            </section>


            <section class="company-message">
                <h2>トップメッセージ</h2>
                <div class="company-message-grid">
                    <figure class="company-message-president">
                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/sunfriend/gasuou-pre.png" alt="sunfriend社長">
                    </figure>
                    <div class="company-message-txt">

                        <p>作成中
                        </p>
                        <span>赤堀 正典</span>
                        </p>

                    </div>

                </div>
            </section>

            <section class="company-construction">
                <h2>施工事例</h2>
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/sunfriend/" alt="">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/sunfriend/" alt="">

                </figure>
                <!--<a href="/tag/sunfriend">SunFriendの施工事例一覧</a>-->

            </section>


            <section class="company-about">
                <h2>会社概要</h2>
                <div class="company-about-table">
                    <table>
                        <tbody>
                            <tr>
                                <td>名称</td>
                                <td> 株式会社SunFriend</td>
                            </tr>

                            <tr>
                                <td>代表取締役</td>
                                <td> 赤堀正典</td>
                            </tr>
                            <tr>
                                <td>連絡先</td>
                                <td> 052-753-9555</td>
                            </tr>
                            <tr>
                                <td>資本金</td>
                                <td> 1,000万円</td>
                            </tr>
                            <tr>
                                <td>設立</td>
                                <td> 平成２２年</td>
                            </tr>
                            <tr>
                                <td>事業内容</td>
                                <td> ガス給湯器および家庭用ガス住宅機器の回収、施工及び管理/住宅のリフォーム</td>
                            </tr>
                            <tr>
                                <td>従業員数</td>
                                <td> 5名 </td>
                            </tr>

                        </tbody>
                    </table>


                </div>
            </section>

            <section>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.677706028223!2d136.9399558!3d35.1646578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037089bc70bb1b%3A0x4181f12e11cff5f3!2z44CSNDY0LTA4NTEg5oSb55-l55yM5ZCN5Y-k5bGL5biC5Y2D56iu5Yy65LuK5rGg5Y2X77yX4oiS77yS77yR!5e0!3m2!1sja!2sjp!4v1688019260975!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>





        </article>
    </div>



    <!--中京リファイン -->
    <!--
    <?php /* elseif ($current_slug === 'chukyourifain') : */ ?>:
            <div class="archive-company-wrap ">
        <p class="pan-list">
            <a href="<?php echo home_url(); ?>">ホーム</a>
            > <a href="/company">会社一覧</a>
            > <span>株式会社　中京リファイン</span>

        </p>
    </div>

    <div class="company-wrap">
        <article>
            <section class="company-top">
                <h2>株式会社　中京リファイン</h2>
                <figure>
                    <img decoding=“async” src="<?php echo get_template_directory_uri(); ?>/assets/img/rifain/rifain.webp" alt="中京リファイン">
                </figure>
            </section>


            <section class="company-message">
                <h2>トップメッセージ</h2>
                <div class="company-message-grid">
                    <figure class="company-message-president">
                        <img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/rifain/rifain-pre.webp" alt="中京リファイン社長">
                    </figure>
                    <div class="company-message-txt">

                        <p>中京リファインでは、お客様の
                            「幸せづくりは住まいから」を
                            モットーにお客様の住まいに関する
                            想いや願いを第一に考えます。

                        </p>
                        <p>尾張地区を中心とする地域の皆さまに支えられ創業32年。
                            地域の皆さまに54,000件以上のリフォーム、リノベーション、増改築などお住まいの施工をさせて頂きました。 今後もお客様のご要望に応じたより良い商品、施工を適正価格にてご提供させて頂き、 尾張地区を中心に住まいのお困りごとやご要望を末永くサポートできる会社であり続けていきます。</p>
                        <p>中京リファインのリフォームアドバイザーは口が達者なタイプというより寡黙に真摯にお客様と向き合うタイプが多いのが特徴です。 私自信も職人出身ですので、愚直にお客様と向き合い、より良い施工を適正価格でお客様にご提供できる事を第一に考えています。</p>

                        <p>中京リファインは無理な規模拡大や店舗展開は考えていません。
                            地域密着をモットーに地域の皆さま、過去にお取引いただいたお客様のお困りごとに一件一件丁寧に対応し、より深い信頼関係を築き上げたいと考えています。これからも地域の皆さまにとって住まいの頼れるパートナーになるべく社員一同満進していきます。</p>
                        <span>満仲　一</span>


                    </div>

                </div>
            </section>

            <section class="company-construction">
                <h2>施工事例</h2>
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/rifain/rifain-ex1.jpg" alt="">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/rifain/rifain-ex2.jpg" alt="">

                </figure>
                <a href="/tag/chukyourifain">中京リファインの施工事例一覧</a>

            </section>


            <section class="company-about">
                <h2>会社概要</h2>
                <div class="company-about-table">
                    <table>
                        <tbody>
                            <tr>
                                <td>名称</td>
                                <td> 株式会社中京リファイン</td>
                            </tr>

                            <tr>
                                <td>代表取締役</td>
                                <td> 満仲　一</td>
                            </tr>
                            <tr>
                                <td>連絡先</td>
                                <td> 0568-86-2377</td>
                            </tr>
                            <tr>
                                <td>資本金</td>
                                <td> 1,500万円</td>
                            </tr>
                            <tr>
                                <td>設立</td>
                                <td> 1988年</td>
                            </tr>
                            <tr>
                                <td>事業内容</td>
                                <td> 住宅・マンション・店舗等のリフォームに関わる企画・設計・施工、中古建物の購入・リノベーション・販売</td>
                            </tr>
                            <tr>
                                <td>従業員数</td>
                                <td> 14名 </td>
                            </tr>

                        </tbody>
                    </table>


                </div>
            </section>

            <section>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3258.606222715969!2d136.96303799999998!3d35.241171300000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037218f9aa7343%3A0xb3c67b2d23d51d2f!2z44CSNDg2LTA5MTQg5oSb55-l55yM5pil5pel5LqV5biC6Iul6I2J6YCa77yV5LiB55uu77yR77yW77yUIOS4reS6rOODquODleOCoeOCpOODsw!5e0!3m2!1sja!2sjp!4v1688019822222!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>





        </article>
    </div>

                    -->





















    <!--チラシページ-->

    <?php elseif ($current_slug === 'flykitchen') : ?>:
    <div class="archive-company-wrap ">
        <p class="pan-list">
            <a href="<?php echo home_url(); ?>">ホーム</a>
            > <span>キッチン目玉商品</span>

        </p>
    </div>

    <section class="fly-wrap">
        <h2>キッチン<br>目玉商品 </h2>

        <div class="fly-contents">
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/kitchen/flykitchen3.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/kitchen/flykitchen1.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/kitchen/flykitchen2.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/kitchen/flykitchen4.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/kitchen/flykitchen6.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/kitchen/flykitchen5.jpg" alt="">

                </figure>
            </div>

        </div>

        <span class="fly-last">※別途施工費が発生します</span>
    </section>


    <?php elseif ($current_slug === 'flybath') : ?>:
    <div class="archive-company-wrap ">
        <p class="pan-list">
            <a href="<?php echo home_url(); ?>">ホーム</a>
            > <span>お風呂目玉商品</span>

        </p>
    </div>

    <section class="fly-wrap">
        <h2>お風呂<br>目玉商品 </h2>

        <div class="fly-contents">
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/bath/flybath3.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/bath/flybath1.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/bath/flybath2.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/bath/flybath4.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/bath/flybath6.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/bath/flybath5.jpg" alt="">

                </figure>
            </div>

        </div>

        <span class="fly-last">※別途施工費が発生します</span>
    </section>

    <?php elseif ($current_slug === 'flysink') : ?>:
    <div class="archive-company-wrap ">
        <p class="pan-list">
            <a href="<?php echo home_url(); ?>">ホーム</a>
            > <span>洗面台目玉商品</span>

        </p>
    </div>

    <section class="fly-wrap">
        <h2>洗面台<br>目玉商品 </h2>

        <div class="fly-contents">
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/sink/flysink3.jpg" alt="">
                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/sink/flysink1.jpg" alt="">
                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/sink/flysink2.jpg" alt="">
                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/sink/flysink4.jpg" alt="">
                </figure>
            </div>
        </div>

        <span class="fly-last">※別途施工費が発生します</span>
    </section>




    <?php elseif ($current_slug === 'flytoilet') : ?>:
    <div class="archive-company-wrap ">
        <p class="pan-list">
            <a href="<?php echo home_url(); ?>">ホーム</a>
            > <span>トイレ目玉商品</span>

        </p>
    </div>

    <section class="fly-wrap">
        <h2>トイレ<br>目玉商品 </h2>

        <div class="fly-contents">
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/toilet/flytoilet3.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/toilet/flytoilet1.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/toilet/flytoilet2.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/toilet/flytoilet4.jpg" alt="">

                </figure>
            </div>


            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/toilet/flytoilet5.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/toilet/flytoilet6.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/toilet/flytoilet7.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/toilet/flytoilet8.jpg" alt="">

                </figure>
            </div>

        </div>

        <span class="fly-last">※別途施工費が発生します</span>
    </section>




    <?php elseif ($current_slug === 'flyother') : ?>:
    <div class="archive-company-wrap ">
        <p class="pan-list">
            <a href="<?php echo home_url(); ?>">ホーム</a>
            > <span>その他目玉商品</span>

        </p>
    </div>

    <section class="fly-wrap">
        <h2>その他<br>目玉商品 </h2>

        <div class="fly-contents">
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/other/flyother3.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/other/flyother1.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/other/flyother2.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/other/flyother4.jpg" alt="">

                </figure>
            </div>


            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/other/flyother5.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/other/flyother6.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/other/flyother7.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/other/flyother8.jpg" alt="">

                </figure>
            </div>
            <div class="fly-content">
                <figure>
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/fly/other/flyother11.jpg" alt="">

                </figure>
            </div>

        </div>

        <span class="fly-last">※別途施工費が発生します</span>
    </section>


    <?php endif; ?>:






    <?php get_footer() ?>
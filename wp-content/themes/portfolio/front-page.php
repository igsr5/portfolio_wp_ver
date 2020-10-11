<?php get_header(); ?>


    <!--自己紹介-->
    <?php
    $page_data=get_page_by_path('about-me');
    $post=$page_data;
    setup_postdata($post);
    ?>
    <div class="about">
        <div class="container">
            <i class="fas fa-user-alt title_icon"></i>
            <h2><?php the_title(); ?></h2>
            <div class="row">
                <div class="col-sm-4 d-flex align-item-center about_image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/my_photo.jpg" width="100%" alt=""></div>
                <div class="col-sm-7 offset-sm-1 about_status">
                    <div class="name_title">
                        <p>市古空/ICHIGO SORA</p>
                        <a href="https://twitter.com/nira_22222"><i class="fab fa-twitter-square"></i></a>
                    </div>
                    <div class="status_item first_item">
                        <p>出身：愛知県(現在も在住)</p>
                    </div>
                    <div class="status_item">
                        <p>所属：豊田工業高等専門学校　情報工学科</p>
                    </div>
                    <div class="status_item">
                        <p>活動：学校にて情報工学を専攻する傍ら、独学でWebについて勉強、制作している。</p>
                    </div>
                    <div class="status_item">
                        <p>その他：フロントエンド周りの実装を主にしている。プログラミング自体が好きなので趣味としてPHP,Java,Cなども触ったりする。</p>
                    </div>
                </div>
            </div>

            <p class="btn-box skip_skill">What's skill?</p>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
    <!--スキル-->
    <div class="skill">
        <div class="container">
            <i class="fas fa-code title_icon"></i>
            <h2>skill</h2>
            <p class="skill_text">下記の言語・ライブラリ・フレームワーク・ツールを用いた開発が可能です。</p>
            <div class="row skill_items">
                <div class="skill_item col-sm-3 col-6 wow animated fadeInUp-box" data-wow-delay=".1s">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/html-5.svg" alt="HTML5">
                    </div>
                    <p>HTML5</p>
                </div>
                <div class="skill_item col-sm-3 col-6 wow animated fadeInUp-box" data-wow-delay=".2s">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/css-3.svg" alt="CSS3">
                    </div>
                    <p>CSS3</p>
                </div>
                <div class="skill_item col-sm-3 col-6 wow animated fadeInUp-box" data-wow-delay=".3s">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/javascript.svg" alt="JavaScript">
                    </div>
                    <p>JavaScript</p>
                </div>
                <div class="skill_item col-sm-3 col-6 wow animated fadeInUp-box" data-wow-delay=".4s">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/bootstrap.svg" alt="Bootstrap4">
                    </div>
                    <p>Bootstrap4</p>
                </div>
                <div class="skill_item col-sm-3 col-6 wow animated fadeInUp-box" data-wow-delay=".5s">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/sass.svg" alt="SCSS">
                    </div>
                    <p>SCSS</p>
                </div>
                <div class="skill_item col-sm-3 col-6 wow animated fadeInUp-box" data-wow-delay=".6s">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/jquery.svg" alt="jQuery">
                    </div>
                    <p>jQuery</p>
                </div>
                <div class="skill_item col-sm-3 col-6 wow animated fadeInUp-box" data-wow-delay=".7s">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/wordpress.svg" alt="Vue.js">
                    </div>
                    <p>WordPress</p>
                </div>
            </div>
            <p class="btn-box skip_works">What's works?</p>
        </div>
    </div>


    <!--制作実績-->
    <div class="works">
        <div class="container">
            <i class="fas fa-laptop-code title_icon title_icon"></i>
            <h2>works</h2>
            <!-- 実績 -->
            <div class="web_works animated fadeInUp-box">
                <h3>実績</h3>
                <div class="d-md-flex justify-content-md-between site_items">
                    <div class=" img_wrap">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/site/portfolio.png" alt=""></a>
                    </div>
                    <div class=" img_wrap">
                        <a href="https://ichigo-dev.github.io/dual_life_lp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/site/dual_life_lp.png" alt=""></a>
                    </div>
                    <div class=" img_wrap coming-soon">
                        <p>coming soon</p>
                    </div>
                </div>
            </div>

            <!--オリジナルウェブサービス-->
            <div class="web_service animated fadeInUp-box">
                <h3>オリジナルサービス</h3>
                <div class="gurusupo row">
                    <div class="service_top col-sm-6">
                        <div class="img_wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site/gurusupo_hero.png" alt="" data-toggle="modal" data-target="#gurusupo_modal">
                        </div>
                        <p>現在の位置情報から周辺の飲食店を検索し、表示するグルメサイトです。サービス仕様、デザイン等全て自分で考えました。</p>
                    </div>
                    <div class="service_about col-sm-6 ">
                        <h4 class="d-none d-sm-block">GURUSUPO</h4>
                        <h5>使用開発環境</h5>
                        <p>言語：HTML5,CSS,JavaScript</p>
                        <p>フレームワーク：Vue.js</p>
                        <p>ライブラリ：vue-paginate,vue-js-modal</p>
                        <p>API：Google Map API,ぐるなびAPI</p>
                        <p><a href="https://bisquelizard14.sakura.ne.jp/" target="_blank" rel="noopener noreferrer">サイトURL</a></p>
                    </div>
                </div>
            </div>
            <p class="btn-box skip_contact">To contact</p>
        </div>



        <!--モーダル-->
        <div class="modal fade" id="gurusupo_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog video-dialog" role="document">
                <div class="modal-content">
                    <video src="<?php echo get_template_directory_uri(); ?>/assets/video/gurusupo.mp4" controls playsinline preload="none" width="100%"></video>
                </div>
                <p>※再生ボタンを押すと再生されます</p>
                <p>※コンテンツの読み込みに時間がかかる可能性があります</p>
            </div>
        </div>

        <div class="modal fade" id="flower_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/site/flower_full.png" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="matukaze_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/site/matukaze_full.png" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="yoga_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/site/zen_place_yoga_full.png" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!--お問い合わせ-->
    <div class="contact">
        <div class="container">
            <i class="far fa-envelope title_icon"></i>
            <h2>contact</h2>
            <div>
                <p>基本的にご記入いただいた連絡先に24時間以内にこちらからご連絡いたします。</p>
                <p>また、お問い合わせは下記SNSアカウントからもお待ちしております。</p>
                <p>些細なことでも構いませんのでまずはお問い合わせください！！</p>
                <p><a href="https://twitter.com/nira_22222"><i class="fab fa-twitter"></i></a></p>
            </div>
            <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="onLoad()"></iframe>
            <form class="form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSc6o8KSIama2g-D50FR8CcndL1lYjhWhWuRZfVo5_RF1Jc_UA/formResponse" method="post" target="hidden_iframe" onsubmit="submitted=true">
                <p><input class="form-control" type="text" name="entry.2005620554" placeholder="お名前" v-model="name"></p>
                <p><input class="form-control" type="email" name="entry.1045781291" placeholder="メールアドレス" v-model="e_mail"></p>
                <p><textarea class="form-control" name="entry.839337160" rows="5" cols="30" placeholder="お問い合わせ内容" v-model="content"></textarea></p>
                <p><button :disabled="isSubmit()" type="submit" name="submit" class="btn btn-info">送信</button></p>
            </form>
            <p id="success" style="display: none">送信が完了しました。お問い合わせ、ありがとうございました。</p>
        </div>
    </div>

    <?php get_footer(); ?>
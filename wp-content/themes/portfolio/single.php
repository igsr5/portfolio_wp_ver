<?php get_header(); ?>

<!--オリジナルウェブサービス-->
<div class="web_service">
    <!-- <h3>オリジナルサービス</h3> -->
    <div class="work_content" row">
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
<?php get_footer(); ?>
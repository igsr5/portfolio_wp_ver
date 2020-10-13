<?php get_header(); ?>


    <!--自己紹介-->
    <?php
    $page_data=get_page_by_path('about-me');
    $page_content=$page_data;
    ?>
    <div class="about">
        <div class="container">
            <i class="fas fa-user-alt title_icon"></i>
            <h2><?php echo get_the_title($page_content->ID); ?></h2>
            <div class="row">
                <div class="col-sm-4 d-flex align-item-center about_image"><?php echo get_the_post_thumbnail($page_content->ID); ?></div>
                <div class="col-sm-7 offset-sm-1 about_status">
                    <div class="name_title">
                        <p>市古空/ICHIGO SORA</p>
                        <a href="https://twitter.com/nira_22222"><i class="fab fa-twitter-square"></i></a>
                    </div>
                    <?php
                    wp_reset_postdata();
                    $children_array = get_child_pages($page_content);
                        while($children_array->have_posts()):
                            $children_array->the_post();
                            $content=remove_ptag(get_the_content());
                    ?>
                    <div class="status_item">
                        <p><?php the_title(); ?>：<?php echo $content; ?></p>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>

            <p class="btn-box skip_skill">What's skill?</p>
        </div>
    </div>

    <!--スキル-->
    <?php
    $page_data=get_page_by_path('skill');
    $page_content=$page_data;
    setup_postdata($page_content);
    $content=remove_ptag(get_the_content());
    ?>
    <div class="skill">
        <div class="container">
            <i class="fas fa-code title_icon"></i>
            <h2><?php echo get_the_title($page_content->ID); ?></h2>
            <p class="skill_text"><?php echo $content; ?></p>
            <div class="row skill_items">
                <?php
                wp_reset_postdata();
                $children_array = get_child_pages($page_content);
                    while($children_array->have_posts()):
                        $children_array->the_post();
                        $content=remove_ptag(get_the_content());
                        $i++;
                ?>
                <div class="skill_item col-sm-3 col-6 wow animated fadeInUp-box" data-wow-delay=".<?php echo $i; ?>s">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/<?php echo $content; ?>" alt="<?php the_title(); ?>">
                    </div>
                    <p><?php the_title(); ?></p>
                </div>
                <?php endwhile; ?>
            </div>
            <p class="btn-box skip_works">What's works?</p>
        </div>
    </div>


    <!--制作実績-->
    <div class="works">
        <div class="container">
        <?php
        $term_obj=get_term_by('slug','works','category');
        ?>
        <i class="fas fa-laptop-code title_icon title_icon"></i>
        <h2><?php echo $term_obj->name; ?></h2>
        <p class='work_text'><?php echo $term_obj->description; ?></p>
        <!-- 実績 -->
        <div class="web_works animated fadeInUp-box">
            <div class="d-md-flex justify-content-md-between site_items">
                <?php
                $works_posts=get_category_posts(3);
                if($works_posts->have_posts()):
                for($i=0;$i<3;$i++):
                    $works_posts->the_post();
                ?>
                <div class="img_wrap">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>
                <?php
                endfor;
                endif;
                ?>
            </div>
            <div class='more_works' >
                <a href="<?php echo esc_url(get_term_link($term_obj)); ?>">もっと見る</a>
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

    </div>



    <!--お問い合わせ-->
    <?php
    $page_data=get_page_by_path('contact');
    $post=$page_data;
    setup_postdata($post);
    $content=remove_ptag(get_the_content());
    ?>
    <div class="contact">
        <div class="container">
            <i class="far fa-envelope title_icon"></i>
            <h2><?php the_title(); ?></h2>
            <div>
                <p>基本的にご記入いただいた連絡先に24時間以内にこちらからご連絡いたします。</p>
                <p>また、お問い合わせは下記SNSアカウントからもお待ちしております。</p>
                <p>些細なことでも構いませんのでまずはお問い合わせください！！</p>
                <p><a href="https://twitter.com/nira_22222"><i class="fab fa-twitter"></i></a></p>
            </div>

            <a href='<?php the_permalink(); ?>'><p class="btn-box contact-us">Contact us</p></a>
        </div>
    </div>

    <?php
    wp_reset_postdata();
    get_footer();
    ?>
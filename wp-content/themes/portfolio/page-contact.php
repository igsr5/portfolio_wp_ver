<?php get_header(); ?>
<div class="contact">
    <div class="container">
        <div>
            <p>基本的にご記入いただいた連絡先に24時間以内にこちらからご連絡いたします。</p>
            <p>また、お問い合わせは下記SNSアカウントからもお待ちしております。</p>
            <p>些細なことでも構いませんのでまずはお問い合わせください！！</p>
            <p><a href="https://twitter.com/nira_22222"><i class="fab fa-twitter"></i></a></p>
        </div>
<?php
if(have_posts()):
    while(have_posts()):
        the_post();
        the_content();
    endwhile;
endif;
?>
    </div>
</div>
<?php get_footer(); ?>
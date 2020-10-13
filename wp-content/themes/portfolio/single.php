<?php
get_header();
$term_obj=get_term_by('slug','works','category');
if(have_posts()):
while(have_posts()):the_post();
?>
<!--実績詳細部分-->
<div class="web_service">
    <div class="work_content d-md-flex d-block" row">
        <div class="service_top col-sm-6">
            <div>
            <?php the_post_thumbnail(); ?>
            </div>
            <p><?php the_excerpt(); ?></p>
        </div>
        <div class="service_about col-sm-6 ">
            <?php the_content(); ?>
        </div>
    </div>

</div>

<?php
endwhile;
endif;
get_footer();
?>
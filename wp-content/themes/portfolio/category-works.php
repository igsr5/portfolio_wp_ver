<?php get_header(); ?>
<?php
$term_obj=get_term_by('slug','works','category');
?>

<div class="web_works">
    <h2 class="work_title">実績</h2>
    <p class='work_text'>私が過去に制作した作品になります。</p>
    <div class="d-md-flex justify-content-md-between site_items">
        <?php
        $works_posts=get_category_posts(-1);
        while($works_posts->have_posts()):
            $works_posts->the_post();
        ?>
        <div class="img_wrap">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        </div>
        <?php endwhile; ?>

    </div>
</div>
<?php get_footer(); ?>
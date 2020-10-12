<?php get_header(); ?>
<?php
$term_obj=get_term_by('slug','works','category');
?>
<h2><?php echo $term_obj->name; ?></h2>
<?php get_footer(); ?>
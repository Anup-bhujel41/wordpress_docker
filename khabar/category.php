<?php get_header();?>


<div class="row category pt-5 ">
    <div class=" ">
        <?php dynamic_sidebar(' upsin');?>
    </div>
    <div class="col-12 ">
        <h1 class="archive-title p-2"><?php single_cat_title();?></h1>
    </div>
    <?php get_template_part('loop');?>
</div>
<!-- .row -->
</div>
<?php get_footer();?>
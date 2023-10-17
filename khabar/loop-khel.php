<?php while ( have_posts() ) : the_post();?>
<div class="col-md-12">
    <a href="<?php the_permalink();?>" class="post-list d-flex">
        <div class="media">
            <div class="mr-3"><?php the_post_thumbnail('medium');?></div>
            <div class="media-body">
                <h4 class="mt-0"><?php the_title();?></h4>
                <p class="d-none d-sm-block"><?php echo wp_trim_words(get_the_excerpt(),55,'');?></p>
            </div>
        </div>
    </a>
    <hr>
</div>


<?php endwhile;wp_reset_postdata();?>
<div class="col-md-12 text-center">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><?php appharu_paging();?></div>
        <div class="col-md-4"></div>
    </div>
</div>
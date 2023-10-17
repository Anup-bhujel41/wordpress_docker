<?php get_header();?>
<div class="row category">
    <div class="col-md-12 text-justify">
        <h1 class="archive-title p-2"><?php the_archive_title();?></h1>
    </div>
    <?php while ( have_posts() ) : the_post();?>
    <div class="col-md-6">
        <a href="<?php the_permalink();?>" class="post-list d-flex">
            <div class="media">
                <div class="mr-3"><?php the_post_thumbnail('thumbnail');?></div>
                <div class="media-body">
                    <h5 class="mt-0"><?php the_title();?></h5>
                    <p class="d-none d-sm-block"><?php echo wp_trim_words(get_the_excerpt(),30,'');?></p>
                </div>
            </div>
        </a>
    </div>
    <?php endwhile;wp_reset_postdata();?>
    <div class="col-md-12 text-center">
        <hr><?php appharu_paging();?>
    </div>
</div>
</div>
<!-- .row -->
<?php get_footer();?>
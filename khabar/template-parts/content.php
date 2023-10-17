<div class="col-md-12">
    <?php get_template_part('template-parts/single-heading');?>
</div>
<div class="col-md-8 text-justify">
    <article class="post-entry">
        <figure class="text-center">
            <?php the_post_thumbnail('large');?>
        </figure>
        <?php the_content();?>
    </article>
    <?php comments_template();?>
    <div class="row single-footer">
        <?php get_template_part('template-parts/sports');?>
    </div>
</div>

<!-- .col-md-8 -->
<div class="col-md-4">
    <?php get_sidebar();?>
</div>
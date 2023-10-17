<a href="/?cat=-62">
    <div class="cat-title">
        <span class="inner-cat">राजनीति</span>
        <span class="inner-more">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        </span>
    </div>
</a>

<?php $args = array('showposts' => 4, 'cat' => '-20'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
<div class="col-md-3">
    <a href="<?php the_permalink();?>">
        <figure class="m-0" style="position:relative">
            <?php the_post_thumbnail('square-thumb');?>
            <div class="page-redo">
                <h5 class=""><?php the_title();?></h5>
                <!-- <span class="politics-read">Read More <i class="fa fa-angle-double-right"
                        aria-hidden="true"></i></span>> -->
            </div>
            <!-- <i class="fa fa-external-link" aria-hidden="true"></i> -->
        </figure>
    </a>
</div>
<?php endwhile; wp_reset_postdata();?>
<div class="col-md-12 text-center">
    <div class="cat-title mt-4">
        <span class="inner-cat" style=""><a href="/?cat=21" class="">अन्तर्वार्ता</a></span>
    </div>
</div>

<!-- <div class="cat-title">
    <span class="inner-cat">मनोरञ्जन</span>
    <span class="inner-more">
        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
    </span>
</div> -->


<?php $i=0; $args = array('showposts' => 4, 'cat' => '--21'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
<div class="col-md-3 pb-5 pt-3" style="border-top:1px solid #4b3c3c !important;">
    <div class="popular-list text-center">
        <li class="list-inline">
            <a href="<?php the_permalink();?>">
                <div class="popular-item">
                    <?php the_post_thumbnail('thumbnail',array('class'=>'rounded-circle'));?>
                </div>
                <h4 class="">
                    <?php the_title();?>
                </h4>
            </a>
        </li>
    </div>
</div>
<?php endwhile; wp_reset_postdata();?>
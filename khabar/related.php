<!-- <aside class="related text-left"> -->
<a href="/?cat=-58">
    <div class="cat-title">
        <span class="inner-cat">संबन्धित</span>
        <span class="inner-more">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        </span>
    </div>
</a>

<div class="row">
    <?php $i=0; $args = array('showposts' =>6, 'cat' => '--9'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();if($i++<6){?>
    <div class="col-md-4 pt-4">
        <div class="position-relative h-100">
            <a href="<?php the_permalink()?>">
                <figure class="m-0" style="position:relative">
                    <?php the_post_thumbnail('square-thumb');?>
                    <div class="page-redo d-flex">

                        <h5 class=""><?php the_title();?></h5>
                    </div>
                    <!-- <i class="fa fa-external-link" aria-hidden="true"></i> -->
                </figure>
            </a>
        </div>
    </div>

    <?php } endwhile; wp_reset_postdata();?>
</div>
<!-- </aside> -->
</div>
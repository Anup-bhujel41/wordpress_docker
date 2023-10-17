<a href="/?cat=58">
    <div class="cat-title">
        <span class="inner-cat">खेलकुद</span>
        <span class="inner-more">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        </span>
    </div>
</a>


<div class="col-md-12 pb-3 world sports">
    <div class="world-wrap d-flex card">
        <div class="row">
            <?php $i=0; $args = array('showposts' => 3, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();?>
            <div class="col-md-4">
                <div class="main-list clearfix p-2 " style="background-color:#fff; ">

                    <a href="<?php the_permalink();?>">
                        <?php the_post_thumbnail('square-thumb');?>
                    </a>
                    <div class="main">
                        <h5 class="mt-2 ">
                            <a href="<?php the_permalink();?>">
                                <?php the_title();?>
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>
</div>
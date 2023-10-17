<a href="/?cat=61">
    <div class="cat-title">
        <span class="inner-cat">समाचार</span>
        <span class="inner-more">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        </span>
    </div>
</a>

<div class="row samachar">
    <div class="col-md-7">
        <?php $i=0; $args = array('showposts' => 6, 'cat'=>"-24"); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
        <div class="main-list clearfix">
            <div class="blog-img" style="position:relative">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('medium');?>
                </a>
            </div>
            <div class="pt-2 text-center">
                <a href="<?php the_permalink();?>">
                    <h3><?php the_title();?></h3>
                </a>
            </div>
            <p class="lead">
            <p class=""> <?php echo wp_trim_words(get_the_excerpt(),20,'') ?></p>
            </p>
            <hr class="m-0">
        </div>

        <?php }elseif($i++<4){?>
        <div class="mt-2">
            <a href="<?php the_permalink();?>">
                <div class="media small-list-ah">
                    <?php the_post_thumbnail('thumbnail');?>
                    <div class="media-body">
                        <h4 class="mt-0 ml-3">
                            <?php the_title();?>
                        </h4>
                    </div>
                </div>
            </a>
        </div>
        <?php if($i==3){echo '</div><div class="col-md-5  custom-list" style="display: flex;flex-flow: column;justify-content: space-between;">';}?>
        <?php } else{?>
        <a href="<?php the_permalink();?>" class="custom-list-item pt-0 pl-0">
            <div class="media small-list-ah">
                <?php the_post_thumbnail('thumbnail');?>
                <div class="media-body">
                    <h5 class="mt-0 ml-3 ah-main-title">
                        <?php the_title();?>
                        </h6>
                </div>
            </div>
        </a>
        <?php } endwhile; wp_reset_postdata();?>
    </div>
    <!-- .col-md-5 -->
</div>
<!-- .row -->
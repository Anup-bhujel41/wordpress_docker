<a href="/?cat=58">
    <div class="cat-title">
        <span class="inner-cat">मनोरञ्जन</span>
        <span class="inner-more">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        </span>
    </div>
</a>


<div class="row pt-3  ">
    <?php $i=0; $args = array('showposts' =>5, 'cat' => '-4'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();if($i++<1){?>
    <div class="col-md-6 divider responsive-bottom">
        <div class="">

            <div class="">
                <a href="<?php the_permalink() ?>"> <?php the_post_thumbnail()?></a>
            </div>
            <div class="">
                <div class=" pt-3">
                    <a href="<?php the_permalink() ?>">
                        <h4 class="fw-bold" style="line-height:1.3"><?php echo wp_trim_words( get_the_title(), 10 )?>
                        </h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="test">
            <p class="for-line-p"> <?php echo wp_trim_words(get_the_excerpt(),50,'') ?></p>
        </div>
    </div>


    <div class="col-md-6 d-flex flex-column justify-content-between news-child px-3">
        <?php } else{?>

        <a href="<?php the_permalink();?>" class="custom-list-item pt-0 pl-0">
            <div class="media small-list-ah">
                <?php the_post_thumbnail('thumbnail');?>
                <div class="media-body">
                    <h5 class="mt-0 ml-3 ah-main-title">
                        <?php the_title();?>
                        </h6>
                        <div class="test mt-0 ml-3">
                            <p class="for-line-p"> <?php echo wp_trim_words(get_the_excerpt(),20,'') ?></p>
                        </div>
                </div>
            </div>
        </a>

        <?php } endwhile; wp_reset_postdata();?>
    </div>
</div>
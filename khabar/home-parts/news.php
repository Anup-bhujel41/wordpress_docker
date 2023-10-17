<aside class="related text-left ">
    <a href="/?cat=58">
        <div class="cat-title">
            <span class="inner-cat">समाचार</span>
            <span class="inner-more">
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </span>
        </div>
    </a>


    <div class="row">
        <div class="col-md-5 divider enter-child responsive-bottom">
            <?php $i=0; $args=array('showposts'=>6, 'cat'=>'--11');$loop = new WP_Query($args); while($loop->have_posts()):$loop->the_post(); if($i++<2){ ?>
            <div class="divider-bottom">
                <a href="<?php the_permalink()?>">
                    <div class="enter-main">
                        <?php the_post_thumbnail('medium') ?>
                    </div>
                    <div class="pt-2">
                        <h4 class="fw-bold for-line"><?php echo wp_trim_words( get_the_title(), 8 )?></h4>
                    </div>
                </a>
                <p class="mb-1 for-line-p"><?php echo wp_trim_words(get_the_excerpt(),15,'') ?></p>

            </div>


            <?php if($i==2){echo '</div><div class="col-md-7  d-flex flex-column justify-content-between px-3 enter-child">';} ?>

            <?php }else{ ?>
            <div class="row divider-bottom">
                <div class="col-4">
                    <div class="enter-sub">
                        <a href="<?php the_permalink()?>"><?php the_post_thumbnail('thumbnail') ?></a>
                    </div>
                </div>

                <div class="col-8 d-flex align-items-center flex-column">
                    <div class="">
                        <a href="<?php the_permalink()?>">
                            <h6 class="fw-bold site-sub-text for-line">
                                <?php the_title()?>
                            </h6>
                        </a>
                        <p class="m-0 for-line-p"><?php echo wp_trim_words(get_the_excerpt(),15,'') ?></p>

                    </div>
                </div>
            </div>
            <?php } endwhile; wp_reset_postdata()?>
        </div>
    </div>
</aside>


<div class="d-flex justify-content-end">
    <div class="d-flex align-items-center justify-content-between">
        <a href="/?cat=13"> <button type="button" class="btn btn-aam " style="display: flex;align-items: center;">
                सबै हेर्नुहोस्
                <i class="bi bi-arrow-right px-1"></i></button></a>

    </div>
</div>
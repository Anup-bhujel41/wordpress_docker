<?php $i=0; while ( have_posts() ) : the_post();if($i++<1){?>
<a href="<?php the_permalink();?>">
    <div class="enter-img position mbl-img ">
        <div class="the-cat-main-img">
            <?php the_post_thumbnail('large'); ?>
        </div>
        <div class="fancy pt-3">

            <a href="<?php the_permalink()?>">
                <h5 class="mid-font mbl-font fw-bold " style="font-size: 40px;text-align: center;"><?php the_title();?>
                </h5>
            </a>
        </div>
    </div>
</a>
<hr>
<div class="for-cat-child row ">
    <?php } else{?>
    <div class="col-md-4 mb-4">
        <div class="media mbl-med mt-4 h-100  border  " style="2">
            <div class="d-flex flex-column justify-content-between p-3">
                <div class="">
                    <div class="cat-sub-img ">
                        <?php the_post_thumbnail('medium');?>
                    </div>
                </div>
                <div class="p-3">
                    <div class="media-body pl-3 pt-3 ">
                        <a href="<?php the_permalink();?>">
                            <h5 class="loop-font mbl-font fw-bold" style=" font-size: 22px; ">
                                <?php echo wp_trim_words( get_the_title(), 9 )?>
                            </h5>
                        </a>
                        <p class="paragraph">
                            <?php echo wp_trim_words(get_the_excerpt(),20,'');?>
                        </p>
                        <div class="divider-bottom p-0 "></div>
                        <div class="post-det d-flex pt-3">
                        </div>
                        <div class="user">
                            <h6 class="post-date  m-0"><i class="far fa-clock"></i>&nbsp;<?php the_time('j F, Y' );  ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } endwhile;appharu_paging();?>
</div>
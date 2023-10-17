<div class="cat-title d-flex">
    <span class="inner-cat"><a href="/?cat=25">अन्तर्राष्ट्रिय</a></span>
</div>


<div class="row">
    <?php $i=0; $args = array('showposts' =>5, 'cat' => '--9'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();if($i++<2){?>
    <div class="col-md-6 pt-4  ">
        <div class="position-relative h-100">
            <div class="h-100">
                <a href="<?php the_permalink()?>">
                    <div class="politics-img">
                        <?php the_post_thumbnail('large');?>
                    </div>
                    <div class="overlay1"></div>
                    <div class="position-absolute bottom-0 start-0 page-redo">

                        <h4 class="text-light fw-bold p-2  for-line m-0">
                            <?php echo wp_trim_words( get_the_title(), 10 ); ?>
                        </h4>

                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php  if($i==2){echo '</div><div class="row pt-4">';}  ?>
    <?php }  else{?>
    <div class="col-md-4 mainsub-4-responsive  ">
        <div class="position-relative h-100">
            <div class="h-100">
                <a href="<?php the_permalink()?>">
                    <div class="politics-sub">
                        <?php the_post_thumbnail('large');?>
                    </div>
                    <div class="overlay1"></div>
                    <div class="position-absolute bottom-0 start-0 page-redo">

                        <h5 class=" fw-bold p-2 main-4-sub-text for-line m-0">
                            <?php echo wp_trim_words( get_the_title(), 10 ); ?></h5>

                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php } endwhile; wp_reset_postdata();?>
</div>
<!-- .row -->
<a href="/?cat=58">
    <div class="cat-title">
        <span class="inner-cat">जनप्रतिनिधि</span>
        <span class="inner-more">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        </span>
    </div>
</a>


<div class="row">
    <div class="col-md-3">
        <?php $i=0; $args = array('showposts' =>5, 'cat' => '--279'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();if($i++<2){?>
        <div class="custom-list-item">
            <a href="<?php the_permalink();?>">
                <div class="pt-0">
                    <div class="back-img my-position"
                        style="background: url(<?php echo get_the_post_thumbnail_url( $post->ID,'medium' ); ?>);    height: 195px;">
                    </div>
                    <div class="mt-2">
                        <h5><?php echo wp_trim_words( get_the_title(), 10); ?></h5>
                    </div>
                </div>
            </a>
        </div>
        <?php if($i==2){ echo '</div><div class="col-md-6">';} }elseif($i++<5){?>

        <div class="sports-div">
            <a href="<?php the_permalink();?>">
                <div class="back-img"
                    style="background: url(<?php echo get_the_post_thumbnail_url( $post->ID,'large' ); ?>);height:350px;">
                </div>
            </a>
            <a href="<?php the_permalink();?>">
                <h5 class="news-title pt-3" style="font-size:30px;">
                    <?php the_title();?>
                </h5>
            </a>
            <p class="pt-0" style="font-size: 22px!important;">
                <?php echo wp_trim_words(get_the_excerpt(),30,'');?>
            </p>
        </div>
        <?php if($i==4){ echo ' </div> <div class="col-md-3">';} } else{?>
        <div class="custom-list-item">
            <a href="<?php the_permalink();?>">
                <div class="pt-0">
                    <div class="back-img my-position"
                        style="background: url(<?php echo get_the_post_thumbnail_url( $post->ID,'medium' ); ?>);    height: 195px;">
                    </div>
                    <div class="mt-2">
                        <h5><?php echo wp_trim_words( get_the_title(), 10); ?></h5>
                    </div>
                </div>
            </a>
        </div>
        <?php if($i==5)echo'</div>'; } endwhile;wp_reset_postdata();?>
    </div>
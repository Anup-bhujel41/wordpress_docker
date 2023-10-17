<?php get_header();?>
<div class="container mt-5">
    <div class="row mt-3">
        <?php $i=0; $args = array('showposts' =>5, 'cat' => '--125'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();if($i++<1){?>
        <div class="col md-7 mbl-margin ">
            <div class=" position   taja mbl-img">
                <?php if ( has_post_thumbnail() ) {
the_post_thumbnail('large');
} else { ?>
                <div class="def-img2 def-height"><img
                        src="https://www.janaaastha.com/wp-content/themes/janaastha/img/logo.png" /></div>
                <?php } ?>
                <h5 class="mt-3 fancy-text" style="font-weight: 600; font-size:26px;">
                    <?php echo wp_trim_words( get_the_title(), 10 ); ?>
                </h5>
                <a href="<?php the_permalink();?>">
                    <div class="overlay"></div>
                </a>

            </div>
            <p class="text-dark mbl-excerpt pt-3" style="line-height:1.3">
                <?php echo wp_trim_words(get_the_excerpt(),40,'');?></p>
        </div>
        <div class="col-md-5 equi-height">

            <?php } else{?>
            <div class="media my-list mb-3 my-child">
                <a href="<?php the_permalink();?>">
                    <div class="poli-img">
                        <?php if ( has_post_thumbnail() ) {
the_post_thumbnail('thumbnail');
} else { ?>
                        <div class="def-img2"><img
                                src="https://www.janaaastha.com/wp-content/themes/janaastha/img/logo.png" /></div>
                        <?php } ?>
                    </div>
                </a>
                <div class="media-body pl-3">
                    <a href="<?php the_permalink();?>">
                        <h5 class="mt-0" style="font-weight: 600; font-size:20px;">
                            <?php echo wp_trim_words( get_the_title(), 10 ); ?>
                        </h5>
                    </a>
                    <a href="<?php the_permalink();?>">
                        <p class="text-dark mbl-excerpt" style="line-height:1.3">
                            <?php echo wp_trim_words(get_the_excerpt(),15,'');?></p>
                    </a>
                </div>
            </div>
            <?php  } endwhile; wp_reset_postdata();?>
        </div>
    </div>

    <div class="row page">
        <div class="col-md-12 text-justify">
            <?php comments_template();?>
        </div>
    </div>
    
</div>
<!-- .row -->

<?php get_footer();?>
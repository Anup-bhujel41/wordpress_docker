<div class="col-md-12">
    <div class="container">
        </h5>

        <h1 class="banner-title text-center py-2"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>

        </h5>
        <div class="my-3">
            <div class="d-flex justify-content-center align-items-center">
                <div class="author-img">
                    <img src="<?php   echo get_stylesheet_directory_uri();?>/img/Freedom-logo.png" class="logo" alt="Logo"
                        id="nav-logo">
                </div>
                <div class="px-3">
                    <h5 class="m-0 author-name">फ्रिडम खबर प्रा.लि</h5>
                </div>
                <div class="pt-3 px-2 py-2 text-center">
                    <span class="post-date user"><i class="far fa-clock"></i>&nbsp;<?php echo get_the_date(); ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row samachar pt-3">
    <div class="col-md-5">
        <?php $i=0; $args = array('showposts' => 7, 'cat'=>"--61"); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
        <div class="main-list clearfix  ">
            <div class="blog-img " style="position:relative">
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
                <?php echo wp_trim_words(get_the_excerpt(),20,' ...');?>
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
        <?php if($i==3){echo '</div><div class="col-md-4  custom-list" style="display: flex;flex-flow: column;justify-content: space-between;">';}?>
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
    <div class="col-md-3 pathak-patra">
    <?php dynamic_sidebar('sidebar-1');?>
    </div>
</div>
<!-- .row -->
<a href="/?cat=-62">
    <div class="cat-title">
        <span class="inner-cat">अपराध</span>
        <span class="inner-more">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        </span>
    </div>
</a>


<div class="pt-3 pb-4">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php $i=0; $args = array('showposts' =>4, 'cat' => '--17'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();?>

            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i++ ?>"
                class="active" aria-current="true" aria-label=" <?php echo $i ?>"></button>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>

        <div class="carousel-inner">
            <?php $i=0; $args = array('showposts' =>4, 'cat' => '--17  '); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();?>
            <div class="carousel-item <?php if($i++ === 1){echo ' active';}?>">
                <a href="<?php the_permalink()?>">
                    <div class="the-carsoul carsoul-responsive">
                        <?php the_post_thumbnail()?>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="fw-bold"><?php the_title()?></h3>
                        <p class="text-light">
                            <?php echo wp_trim_words(get_the_excerpt(),20,'');?></p>
                    </div>
            </div>
            </a>
            <?php endwhile; wp_reset_postdata(); ?>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
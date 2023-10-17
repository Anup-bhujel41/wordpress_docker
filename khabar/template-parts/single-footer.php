<div class="col-md-6 mt-3">
    <?php get_template_part('related');?>
</div>

<?php $cats=array(array(105,"छुटाउनु भयो कि?"),array(61,"मुख्य समाचार"),array(77,"इतिहासको पानाबाट")); foreach($cats as $cat):?>
<div class="col-md-6 mt-3">
    <aside>
    <div class="cat-title">
        <?php echo $cat-[1];?>
    </div>
    
    <?php $i=0; $args = array('showposts' => 5, 'cat' => $cat-[0]); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){ ?>
    <div class="main-list card calc-height">
        <div class="main">
            <a href="<?php the_permalink();?>">
                <figure>
                    <?php the_post_thumbnail('medium');?>
                </figure>
                <h5 class="pl-3 pr-3">
                    <?php the_title();?>
                </h5>
            </a>
        </div>
        <ul class="card-body mb-0">
    <?php } else { ?>

    <li>
        <a href="<?php the_permalink();?>">
            <h6>
            <?php echo wp_trim_words(get_the_title(),6,'..');?>                
            </h6>
        </a>
    </li>
    
    <?php } endwhile; wp_reset_postdata();?>
    </ul>
    </div>
    </aside>
</div>

<?php endforeach;?>
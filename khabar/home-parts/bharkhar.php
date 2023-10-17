<ul class="nav nav-pills nav-fill mb-3" role="tablist">
    <li class="nav-item">
        <a class="nav-link active text-light" href="#latest" data-toggle="tab" style="font-size;font-size: 20px;">
            भर्खरै
        </a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link text-light" href="#popular" data-toggle="tab"style="font-size;font-size: 20px;">
            लोकप्रिय
        </a>
    </li> -->
</ul>
<div class="tab-content">
    <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">
        <ul class="list-unstyled mb-0 custom-list popular card p-3 calc-height">
            <?php $args = array('showposts' => 5); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
            <li class="custom-list-item">
                <a href="<?php the_permalink();?>">
                    <h5>
                        <?php echo wp_trim_words(get_the_title(),7,'');?>
                    </h5>
                </a>
            </li>
            <?php endwhile; wp_reset_postdata();?>
        </ul>
    </div>
    <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular-tab">
        <ul class="list-unstyled mb-0 custom-list popular card p-3 calc-height">
            <?php if ( function_exists('stats_get_csv') && $top_posts = stats_get_csv('postviews', 'days=2&limit=6') ) : foreach ( $top_posts as $p ) : if($p['post_title']!="Home page"){?>
            <li class="custom-list-item">
                <a href="<?php echo $p['post_permalink']; ?>">
                    <h5>
                        <?php echo $p['post_title']; ?>
                    </h5>
                </a>
            </li>
            <?php } endforeach; endif; ?>
        </ul>
    </div>
</div>
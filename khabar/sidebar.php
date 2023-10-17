<?php dynamic_sidebar('inseide');?>
<aside>
    <!-- <div class="fb-page" data-href="https://www.facebook.com/newsofnepal.samacharpatra/" data-width="349" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/newsofnepal.samacharpatra/" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/newsofnepal.samacharpatra/">newsofnepal</a>
        </blockquote>
    </div> -->
</aside>

<aside>
    <?php $i=0; if ( function_exists('stats_get_csv') && $top_posts = stats_get_csv('postviews', 'days=1&limit=6') ) : ?>
    <?php foreach ( $top_posts as $p ) : if($p['post_title'] != 'Home' && $p['post_title'] != 'Home page'){ if($i<4){ ?>
    <li class="custom-list-item">
        <a href="<?php echo $p['post_permalink']; ?>">
            <h5>
                <?php echo $p['post_title']; ?>
            </h5>
        </a>
    </li>
    <?php }} endforeach; endif;?>
    </ul>
</aside>

<div class="break clearfix"></div>

<aside>
    <div class="cat-title">
        भर्खरै
    </div>
    <ul class="card list-unstyled custom-list m-0">
        <?php $args = array('showposts' => 5, 'cat' => ''); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
        <li class="custom-list-item media m-0">
            <i class="fa fa-hashtag li-icon"></i>
            <div class="media-body">
                <a href="<?php the_permalink();?>">
                    <h5>
                        <?php the_title();?>
                    </h5>
                </a>
            </div>
        </li>
        <?php endwhile; wp_reset_postdata();?>
    </ul>
</aside>
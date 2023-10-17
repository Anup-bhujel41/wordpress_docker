
<a href="/?cat=58">
    <div class="cat-title">
        <span class="inner-cat">रोजगार</span>
        <span class="inner-more">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        </span>
    </div>
</a>


<?php $i=0; $args = array('showposts' => 4, 'cat' => '--21'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>



<?php endwhile; wp_reset_postdata();?>
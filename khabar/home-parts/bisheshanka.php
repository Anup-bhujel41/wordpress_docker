<div class="cat-title d-flex">
    <span class="inner-cat"><a href="/?cat=-25">विशेषांक</a></span>
    <ul class="navbar-nav d-none d-sm-flex w-100 flex-row nav-fill">
        <li class="nav-item">
            <a class="nav-link" onclick="loadArtha(39)">आर्थिक समृद्धि</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="loadArtha(42)">निर्माण</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="loadArtha(38)">फर्केर हेर्दा</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="loadArtha(101)">शिक्षा</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="loadArtha(7)">वार्षिकोत्सव</a>
        </li>
    </ul>
</div>


<div class="politics-wrap d-flex card">
    <div class="row">
        <div class="col-md-6 w-100 border-right">
            <?php $i=0; $args = array('showposts' => 4, 'cat' => '-65'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); if($i++<1){?>
            <div class="main-list clearfix p-2" style="background-color:#fff;">
                <a href="<?php the_permalink();?>">
                    <div class="main">
                        <h4><?php the_title();?></h4>
                    </div>
                    <?php the_post_thumbnail('medium');?>
                </a>
                <div class="pt-3">
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(),25,'');?>
                    </p>
                </div>
            </div>
        </div>
        <!-- .col-md-4 -->
        <div class="col-md b-non">
            <?php }  else{?>
            <a href="<?php the_permalink();?>">
                <div class="media custom-list-item small-list p-2 pl-1 pr-1" style="background-color:#fff;">
                    <?php the_post_thumbnail('thumbnail');?>
                    <div class="media-body">
                        <h5 class="mt-0 ml-3 list-heading">
                            <?php the_title();?>
                        </h5>
                    </div>
                </div>
            </a>
            <?php } endwhile; wp_reset_postdata();?>
        </div>

    </div>
</div>
<!-- .row -->
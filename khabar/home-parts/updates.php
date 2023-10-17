<a href="/?cat=58">
    <div class="cat-title" style="">
        <span class="inner-cat">अपडेट/प्रदेश</span>
        <span class="inner-more">
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        </span>
    </div>
</a>


<div class="col-md-2 mt-4">

    <div class="nav flex-column nav-pills h-100" id="v-pills-tab" role="tablist" aria-orientation="vertical"
        style="background-color:#fff;">
        <a class="nav-link active" onclick="loadState(44)" id="v-pills-one-tab" data-toggle="pill" href="#v-pills-one"
            role="tab" aria-controls="v-pills-home" aria-selected="true">प्रदेश १</a>

        <a class="nav-link" onclick="loadState(47)" id="v-pills-two-tab" data-toggle="pill" href="#v-pills-two"
            role="tab" aria-controls="v-pills-profile" aria-selected="false">प्रदेश २</a>

        <a class="nav-link" onclick="loadState(35)" id="v-pills-three-tab" data-toggle="pill" href="#v-pills-three"
            role="tab" aria-controls="v-pills-messages" aria-selected="false">प्रदेश ३</a>
        <a class="nav-link" onclick="loadState(49)" id="v-pills-four-tab" data-toggle="pill" href="#v-pills-four"
            role="tab" aria-controls="v-pills-settings" aria-selected="false">प्रदेश ४</a>
        <a class="nav-link" onclick="loadState(51)" id="v-pills-five-tab" data-toggle="pill" href="#v-pills-five"
            role="tab" aria-controls="v-pills-settings" aria-selected="false">प्रदेश ५</a>
        <a class="nav-link" onclick="loadState(54)" id="v-pills-six-tab" data-toggle="pill" href="#v-pills-six"
            role="tab" aria-controls="v-pills-settings" aria-selected="false">प्रदेश ६</a>
        <a class="nav-link" onclick="loadState(56)" id="v-pills-seven-tab" data-toggle="pill" href="#v-pills-seven"
            role="tab" aria-controls="v-pills-settings" aria-selected="false">प्रदेश ७</a>
    </div>
</div>

<div class="col-md-10">
    <div clas="background" style="height:23px;"></div>
    <div class="tab-content calc-height" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">
            <div id="newsList" class="row calc-height">
                <?php $args = array('showposts' => 3, 'cat' => '--24'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
                <div class="col-md-4 text-center">
                    <a href="<?php the_permalink();?>">
                        <div class="card box">
                            <?php the_post_thumbnail();?>
                            <div class="card-body" style="position:relative;background: #17a2b896;">
                                <h5 class="mb-0 pb-0"><?php the_title();?></h5>

                            </div>
                        </div>
                    </a>
                </div>
                <?php endwhile; wp_reset_postdata();?>
            </div>
        </div>
    </div>
</div>
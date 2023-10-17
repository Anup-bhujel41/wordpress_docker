<header>

    <h1 class="text-left pt-5"><?php the_title();?></h1>
    <h3 style="color:#656565"><?php the_field('sub_title');?></h3>
    <hr>
    <div class="row text-muted post-meta">
        <div class="col-6 col-sm-5 lead">
            <div class="author-img uk-margin-small-bottom" style="justify-content: start;">
                <?php $author_id = get_the_author_meta('ID');  $author_image = get_avatar( get_the_author_meta( 'ID' ), 50 );  $custom_image = get_field('image', 'user_'. $author_id );?>

                <?php if($custom_image){?>

                <img class="karobar-author" src="<?php echo $custom_image['sizes']['thumbnail'];?>" width="30"
                    height="30" alt="">

                <?php }elseif($author_image){
                                    echo $author_image;
                                     } else{?>
                <img class="border-circle banner-icon"
                    src="http://www.drishtinews.com/wp-content/uploads/2021/02/icon.png" width="80">
                <?php }?> &nbsp;&nbsp;
                <h6 class="author-name blog-titles">
                    <?php if(get_field('writer_name')){?>
                    <a class="uk-link-reset" href="/?author=<?php echo $author_id; ?>"><?php the_field('writer_name');?>
                    </a>
                    <?php } else {
                     the_author(); } ?>
                </h6>
            </div>

        </div>
        <div class="col-6 col-sm-3 align-self-center">
            <h6>
                <i class="fa fa-clock-o"></i>
                <?php the_time( 'l  , F jS, Y' ); ?>
            </h6>

        </div>
        <div class="col-sm-4 d-flex align-items-center justify-content-end mobile-share-bar">
            <!-- ShareThis BEGIN -->
            <div class="sharethis-inline-share-buttons"></div>
            <!-- ShareThis END -->
            <!--             <div class="addthis_inline_share_toolbox"></div> -->
        </div>
    </div>
    <hr>
</header>
<?php get_header();?>
<?php while ( have_posts() ) : the_post();?>

<div class="row page ">
    <h1 class="text-left pt-5"><?php the_title();?></h1>
    <hr>
    <div class=" col-6 col-sm-5 lead mbl-dn d-flex align-items-center  text-muted ">


        <div class="author-img ">
            <img src="<?php   echo get_stylesheet_directory_uri();?>/img/Freedom-logo.png" class="logo" alt="Logo"
                id="nav-logo">
        </div>
        <div class="px-3">
            <h5 class="m-0 author-name">फ्रिडम खबर प्रा.लि</h5>
        </div>
    </div>
    <div class="col-6 col-sm-3 align-self-center">
        <h6>
            <h6 class="post-date px-2 user m-0"><i class="far fa-clock"></i>&nbsp;<?php echo get_the_date(); ?>
            </h6>

    </div>
    <div class="col-sm-4 d-flex align-items-center justify-content-end mobile-share-bar p-2">
        <!-- ShareThis BEGIN -->
        <div class="sharethis-inline-share-buttons"></div>
        <!-- ShareThis END -->
        <!--             <div class="addthis_inline_share_toolbox"></div> -->
    </div>

    <hr>
    <div class="col-md-8 text-justify">

        <article class="post-entry">
            <header>

            </header>
            <?php the_content();?>
        </article>
        <?php comments_template();?>
    </div>


    <!-- .col-md-4 -->
    <div class="col-md-4">
        <?php get_sidebar();?>
    </div>
</div>


<!-- .row -->
<div class="container">
    <div class="row related-3d p-2 mt-4 no-gutters ">
        <?php get_template_part('related');?>
    </div>
</div>

<?php endwhile;?>
</div>

<?php get_footer();?>
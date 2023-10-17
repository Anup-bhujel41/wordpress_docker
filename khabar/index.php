<?php get_header();?>
<div class="row">
    <div class="col-md-12">
        <?php if ( is_active_sidebar( 'banner-top' ) ) : ?>
        <div class="mt-3 ">
            <?php dynamic_sidebar('banner-top');?>
        </div>
        <?php endif; ?>
        <?php get_template_part('home-parts/banner');?>
        <?php if ( is_active_sidebar( 'below-banner' ) ) : ?>
        <div class="mt-3">
            <?php dynamic_sidebar('below-banner');?>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="p-2">
    <div class="row mt-2">
        <div class="col-md-4">
            <?php dynamic_sidebar('bhar');?>
            <?php get_template_part('home-parts/bharkhar');?>
        </div>
        <div class="col-md-8">
            <?php get_template_part('home-parts/main');?>
        </div>
        <?php if ( is_active_sidebar( 'popular' ) ) : ?>
        <div class="col-md-12 mt-3">
            <?php dynamic_sidebar('popular');?>
        </div>
        <?php endif; ?>
    </div>
</div>


<div class="election-section mt-3">
    <?php get_template_part('home-parts/janpratinidhi');?>
</div>

<?php if ( is_active_sidebar( 'below-menu' ) ) : ?>
<div class="row  mt-3 mb-2">
    <div class=" col-md-12">
        <?php dynamic_sidebar('below-menu');?>
    </div>
    <!-- <div class="col-md-1">
        <div class="store">
            <a href="https://play.google.com/store/apps/details?id=com.app.eknepal" target="_blank"> <img
                    src="</?php echo get_stylesheet_directory_uri();?>/img/play-store.png" alt=""> </a>
            <a href="https://apps.apple.com/np/app/ek-nepal/id1605058431" target="_blank"> <img
                    src="</?php echo get_stylesheet_directory_uri();?>/img/app-store.png" alt=""> </a>
        </div>

    </div> -->
</div>


<?php endif; ?>

<div class="p-2">
    <div class="row">
        <?php get_template_part('home-parts/sports');?>
    </div>
</div>


<div class="">
    <?php  get_template_part('home-parts/entertainment') ?>
</div>


<div class="">
    <div class="container">
        <div class="row page3 mt-4">
            <?php get_template_part('home-parts/politics');?>
        </div>
    </div>
</div>

<!-- <div class="">
    <div class="row pb-4">
        </?php get_template_part('home-parts/aparadha');?>
    </div>
</div> -->


<div class="clearfix"></div>
<div class="row mt-4 mb-3">
    <div class="col-md-6 photo">
        <?php get_template_part('home-parts/aparadha');?>
    </div>
    <div class="col-md-6 photo">
        <?php get_template_part('home-parts/tajaupdate');?>
    </div>
</div>




<div class="row nepal mt-4  p-2">
    <?php get_template_part('home-parts/updates');?>
</div>
<?php if ( is_active_sidebar( 'page3d' ) ) : ?>
<div class="col-md-12 mt-3">
    <?php dynamic_sidebar('page3d');?>
</div>
<?php endif; ?>



<div class="col-md-12">
    <?php dynamic_sidebar('above-business');?>
    <?php get_template_part('home-parts/business');?>
</div>



<div class="col-md-12">
    <div class="row mt-3 interview " style="">
        <?php get_template_part('home-parts/interview_new');?>
    </div>
</div>
<?php if ( is_active_sidebar( 'bhar' ) ) : ?>
<div class="col-md-12 mt-3">
    <?php dynamic_sidebar('bhar');?>
</div>
<?php endif; ?>




<div class="row video mt-4">
    <?php get_template_part('home-parts/video');?>
</div>




<div class="container">
    <div class="row related-3d p-2 mt-4 no-gutters ">
        <?php get_template_part('related');?>
    </div>
    <?php dynamic_sidebar('pop');?>
</div>


<!-- <div class="row video mt-4">
    </?php get_template_part('home-parts/video');?>
</div> -->
<!-- .home -->

<?php get_footer();?>
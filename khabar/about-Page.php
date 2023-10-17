<?php get_header();?>
<?php /* Template Name: AboutPage-about */ ?>
<div class="container bg-light mt-3 mb-3 ">
    <div class="contact">
        <h1 class="d-block" style="text-align:center;"> <span style="border-bottom:solid 5px white">हाम्रो बारेमा
            </span></h1>
        <div class="row">
            <div class="col-md-3">
                <img class="footlogo" src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" alt="Logo">
            </div>
            <div class="col-md-9 texr-center mt-2">
                <?php while ( have_posts() ) : the_post();?>
                <article class="post-entry">
                    <?php the_content();?>
                </article>
                <?php endwhile;?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>
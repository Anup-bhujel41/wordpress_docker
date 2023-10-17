<?php get_header();?>
<div class="container">
    <div class="row 404 pt-3">
        <div class="col-md-8 text-center">
            <div class="wrap">
                <h1>404 Page Not Found | पृष्ठ उपलब्ध छैन</h1>

                <i class="far fa-eye-slash fa-5x"></i>
                <!-- <i class="fa fa-warning fa-5x"></i> -->
                <p class="lead text-muted">माफ गर्नुहोला तपाइले खोज्नुभएको पृष्ठ उपलब्ध छैन|<br><br>
                    <a href="/" class="text-danger">गृहपृष्ठमा जानुहोस :&nbsp; <button type="button"
                            class="btn btn-primary">गृहपृष्ठ </button></a>
                </p>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="wrap h-100 pt-5">
                <div class="brand-log  mbl-excerpt pt-3"><a href="/"> <img
                            src="<?php  echo get_stylesheet_directory_uri();?>/img/logo.png" class="logo" alt="Logo"
                            id="nav-logo"> </a></div>
            </div>
        </div>
    </div>
</div>
<!-- .row -->

<?php get_footer();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta property="fb:pages" content="631971620173873" />
    <meta name="description" content="Reporting, analysis, and commentary on Nepal's politics, economy and society." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="twitter:card" content="summary_large_image" />
    <title>
        <?=wp_title('&laquo;',true,'right')?>
        <?= bloginfo('name')?>
    </title>
    <?php wp_head();?>
    <!-- Start Alexa Certify Javascript -->
    <script type="text/javascript">
        _atrk_opts = {
            atrk_acct: "2hSCn1QolK10cv",
            domain: "newsofnepal.com",
            dynamic: true
        };
        (function () {
            var as = document.createElement('script');
            as.type = 'text/javascript';
            as.async = true;
            as.src = "https://certify-js.alexametrics.com/atrk.js";
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(as, s);
        })();
    </script>
    <noscript><img src="https://certify.alexametrics.com/atrk.gif?account=2hSCn1QolK10cv" style="display:none"
            height="1" width="1" alt="" /></noscript>
    <!-- End Alexa Certify Javascript -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111170204-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-111170204-1');
    </script>
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=5f8bce5b97d6dc0012ad2823&product=sop'
        async='async'></script>
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=401514826619301";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="container-fluid" style="background: #fff;border-bottom: solid 1px #c8c8c8;">
        <!-- <div class="container">
            <div class="row">
                </?php dynamic_sidebar('lup');?>
                </?php //get_template_part('home-parts/top-menu');?>
            </div>
        </div> -->
    </div>

    <div class="container">
        <div class="row align-items-center justify-content-between p-3">
            <div class="col-md-3 col-sm-12">

                <a href="/"> <img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/img/Freedom-logo.png"
                        alt="News Of Nepal Logo" style="margin-left: -34px;">
                </a>
                <h6 class="post-date user">
                    <i class="far fa-clock"></i>&nbsp;<?php echo get_the_date(); ?>
                </h6>
            </div>
            <div class="col-md-2">
                <!-- <h6 class="post-date user">
                    <i class="far fa-clock"></i>&nbsp;</?php echo get_the_date(); ?>
                </h6> -->
            </div>
            <div class="col-md-7">
                <div class="row ">
                    <?php dynamic_sidebar('lup');?>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>



    <div class="container-fluid sticky-top">
        <div class="row">
            <?php get_template_part('nav');?>
        </div>
        <!-- <div class="container p-2"> -->
    </div>


    <div class="container wrapper">
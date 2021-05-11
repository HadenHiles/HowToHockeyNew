<?php /* Template Name: Merch Page */
require_once('../wp-config.php');
wp_enqueue_style( 'merch', 'css/style.css' );
wp_enqueue_style( 'merch', 'css/responsive.css' );
wp_enqueue_style( 'merch', 'css/fonts.css' );
wp_enqueue_style( 'merch', 'css/custom.css' );
wp_enqueue_script( 'merch', '/merch/js/main.js');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Merch | How To Hockey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/fonts.css" />
    <link rel="stylesheet" href="./css/custom.css" />

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="./images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">
    <link rel="manifest" href="./images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WMGDH85');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154626870-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-154626870-3');
    </script>
</head>

<body class="template-index scheme_1 ">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WMGDH85"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php get_header(); ?>

    <div class="page_wrapper">
        <div class="page_container">
            <div class="main_content">
                <div id="shopify-section-1568977949738" class="shopify-section section section_homepage section_banners">
                    <div class="row">
                        <div class="col-sm-12 banner_100">
                            <div class="banner_item banner_main">
                                <img style="width: 100%" class="banner_image" src="./images/banner.png">
                                <div class="banner_caption style_telling">
                                    <div class="caption_text">
                                        <img src="./images/logo-white.png" class="logo" />
                                        <h2>Merch</h2>
                                        <!-- <h4>MERCH</h4> -->
                                        <!-- <a class="btn" href="#">Shop Merch</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="shopify-section-1566390937705" class="shopify-section section section_homepage section_banners collections">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 banner_25">
                            <div class="banner_item hover_image">

                                <img style="width: 100%" class="banner_image" src="./images/classics.png" alt="" data-src="./images/classics.png" data-widths="[360, 540, 720, 900, 1080, 1296, 1512, 1728, 1810]">

                                <div class="banner_caption style_minimal">

                                    <a class="caption_text merch-link" id="pacific-rink" href="https://www.pacificrink.com/collections/how-to-hockey" target="_blank">

                                        <p class="banner_text">The Classics</p>

                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 banner_25">
                            <div class="banner_item hover_image">

                                <img style="width: 100%" class="banner_image" src="./images/teespring.png" alt="" data-src="./images/teespring.png" data-widths="[360, 540, 720, 900, 1080, 1296, 1512, 1728, 1810]">

                                <div class="banner_caption style_minimal">

                                    <a class="caption_text merch-link" id="teespring" href="http://merch.howtohockey.com" target="_blank">

                                        <p class="banner_text">Latest</p>

                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 banner_25">
                            <div class="banner_item hover_image">

                                <img style="width: 100%" class="banner_image" src="./images/jerseys.png" alt="" data-src="./images/jerseys.png" data-widths="[360, 540, 720, 900, 1080, 1296, 1512, 1728, 1810]">

                                <div class="banner_caption style_minimal">

                                    <a class="caption_text merch-link" id="jerseys" href="https://mensleaguesweaters.com/products/authentic-custom-how-to-hockey-jersey" target="_blank">

                                        <p class="banner_text">Jerseys</p>

                                    </a>

                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-md-3 col-sm-6 banner_25">
                            <div class="banner_item hover_image">

                                <img style="width: 100%" class="banner_image" src="./images/summer-skates.png" alt="" data-src="./images/summer-skates.png" data-widths="[360, 540, 720, 900, 1080, 1296, 1512, 1728, 1810]">

                                <div class="banner_caption style_minimal">

                                    <a class="caption_text merch-link" id="summer-skates" href="https://www.summerskates.ca/products/how-to-hockey" target="_blank">

                                        <p class="banner_text">Summer Skates</p>

                                    </a>

                                </div>
                            </div>
                        </div> -->

                        <div class="col-md-3 col-sm-6 banner_25">
                            <div class="banner_item hover_image">

                                <img style="width: 100%" class="banner_image" src="./images/toques.png" alt="" data-src="./images/toques.png" data-widths="[360, 540, 720, 900, 1080, 1296, 1512, 1728, 1810]">

                                <div class="banner_caption style_minimal">

                                    <a class="caption_text merch-link" id="toques" href="/toques" target="_blank">

                                        <p class="banner_text">Toques</p>

                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            </div>

        </div>

    </div>

    <?php get_footer(); ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>

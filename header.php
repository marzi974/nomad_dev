<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title><?php bloginfo('name') ?> | <?php the_title() ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,700,900" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/favicon/manifest.json">
    <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon/favicon.ico">
    <meta name="theme-color" content="#ffffff">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <?php wp_head(); ?>

</head>
<body   <?php body_class(); ?>>

<header >
    <nav>
            <div class="main_menu clearfix">

                <div class="container clearfix">
                    <a class="logo" href="<?php bloginfo('url')?>"><img src="<?php echo get_template_directory_uri();?>/img/nomad_logo.svg" width="160" alt="logo"/></a>
                    <img class="logo_mobile"  src="<?php echo get_template_directory_uri();?>/img/logo_mobile.png" />
                    <div id="hamburger"><svg viewBox="0 0 800 600"><path  d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path><path d="M300,320 L540,320" id="middle"></path> <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path></svg></div>
                    <div class="sociaux">
                        <a href="">
                            <svg version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25.25px" height="25.75px"
                                 viewBox="0 0 34.25 34.75" style="enable-background:new 0 0 34.25 34.75;" xml:space="preserve">
                            <path d="M17.25,1c-8.84,0-16,7.16-16,16s7.16,16,16,16c8.84,0,16-7.16,16-16S26.09,1,17.25,1z M19.56,19.35
                                c-0.31,1.08-0.9,2.08-1.73,2.84c-0.19,0.18-0.4,0.35-0.62,0.5c-0.33,0.221-0.68,0.42-1.04,0.58c-0.37,0.15-0.75,0.281-1.14,0.371
                                c-0.14,0.029-0.28,0.059-0.42,0.09c-0.6,0.09-1.2,0.129-1.79,0.1c-0.28-0.029-0.57-0.061-0.85-0.121
                                c-0.15-0.029-0.29-0.059-0.44-0.1c-0.45-0.119-0.89-0.289-1.31-0.5C9.8,22.9,9.4,22.65,9.04,22.35c-0.1-0.08-0.19-0.16-0.28-0.24
                                H8.75c-0.09-0.09-0.18-0.17-0.26-0.25c-0.53-0.52-0.97-1.129-1.31-1.789h0.01v-0.01C7,19.709,6.86,19.34,6.74,18.959
                                c-0.07-0.26-0.13-0.52-0.18-0.779c-0.04-0.26-0.07-0.529-0.09-0.789c-0.04-0.58,0-1.17,0.12-1.75c0.01-0.031,0.01-0.051,0.02-0.08
                                c0.05-0.271,0.13-0.531,0.22-0.791c0.1-0.289,0.22-0.57,0.35-0.84l0.01-0.01c0.8-1.58,2.21-2.82,3.87-3.391
                                c1.48-0.51,3.14-0.5,4.61,0.041c0.21,0.08,0.41,0.16,0.6,0.26c0.16,0.08,0.32,0.16,0.47,0.26c0.12,0.07,0.23,0.141,0.34,0.211
                                c0.02,0.01,0.05,0.029,0.07,0.049c0.11,0.08,0.23,0.17,0.34,0.26c0.14,0.1,0.27,0.211,0.39,0.33c-0.22,0.23-0.45,0.441-0.67,0.67
                                c-0.42,0.42-0.84,0.84-1.26,1.26c-0.41-0.398-0.92-0.699-1.47-0.869c-0.65-0.199-1.35-0.23-2.01-0.08
                                c-0.72,0.15-1.4,0.52-1.94,1.029c-0.04,0.031-0.07,0.061-0.11,0.102v0.01c-0.45,0.459-0.79,1.01-0.99,1.6v0.01
                                c-0.29,0.859-0.29,1.801,0,2.66c0.28,0.84,0.83,1.59,1.56,2.1c0,0,0.01,0,0.01,0.01c0.26,0.18,0.53,0.33,0.82,0.441
                                c0.09,0.039,0.19,0.078,0.29,0.109c0.14,0.039,0.27,0.08,0.41,0.109c0.1,0.02,0.2,0.031,0.3,0.041c0.3,0.029,0.61,0.029,0.92,0.01
                                c0.14-0.01,0.28-0.02,0.41-0.051c0.31-0.049,0.6-0.141,0.88-0.26c0.09-0.039,0.19-0.09,0.28-0.131c0.12-0.068,0.23-0.139,0.35-0.209
                                c0.18-0.119,0.34-0.26,0.49-0.41c0.08-0.08,0.15-0.16,0.22-0.24c0.13-0.17,0.25-0.359,0.35-0.549c0.1-0.191,0.18-0.391,0.24-0.592
                                c0.02-0.109,0.05-0.209,0.07-0.318v-0.01H13.3v-2.66h6.44C19.95,16.93,19.9,18.17,19.56,19.35z M28.05,18.141h-1.84v1.84h-2.29
                                v-1.84h-1.83v-2.281h1.83v-1.84h2.29v1.84h1.84V18.141z"/>
                            </svg>
                        </a>
                        <a href="">
                            <svg version="1.1" id="RAW_ICONS_-_SQUARE__x2F__ROUNDED__x2F__CIRCLE"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25.25px" height="25.75px"
                                 viewBox="0 0 34.25 34.75" style="enable-background:new 0 0 34.25 34.75;" xml:space="preserve">
                            <g>
                                <path d="M18.209,15.824v-0.033c-0.006,0.012-0.015,0.023-0.022,0.033H18.209z"/>
                                <path d="M17.25,1c-8.837,0-16,7.164-16,16c0,8.838,7.163,16,16,16c8.836,0,16-7.162,16-16C33.25,8.164,26.086,1,17.25,1z
                                     M12.883,24.646H9.452V14.33h3.431V24.646z M11.167,12.92h-0.022c-1.15,0-1.895-0.793-1.895-1.783c0-1.012,0.768-1.783,1.939-1.783
                                    c1.174,0,1.896,0.771,1.918,1.783C13.107,12.127,12.363,12.92,11.167,12.92z M25.25,24.646h-3.43v-5.52
                                    c0-1.387-0.496-2.334-1.738-2.334c-0.946,0-1.512,0.641-1.76,1.256c-0.091,0.221-0.113,0.525-0.113,0.836v5.762H14.78
                                    c0,0,0.044-9.35,0-10.316h3.429v1.461c0.457-0.705,1.271-1.703,3.092-1.703c2.256,0,3.949,1.473,3.949,4.643V24.646z"/>
                            </g>
                            </svg>
                        </a>
                        <a href="">
                            <svg version="1.1" id="RAW_ICONS_-_SQUARE__x2F__ROUNDED__x2F__CIRCLE"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25.25px" height="25.75px"
                                 viewBox="0 0 34.25 34.75" style="enable-background:new 0 0 34.25 34.75;" xml:space="preserve">
                            <path d="M17.153,1.371c-8.836,0-16,7.164-16,16c0,8.838,7.164,16,16,16c8.837,0,16-7.162,16-16
                                C33.153,8.535,25.99,1.371,17.153,1.371z M20.581,17.377h-2.242c0,3.582,0,7.994,0,7.994h-3.322c0,0,0-4.367,0-7.994h-1.58v-2.824
                                h1.58v-1.828c0-1.309,0.621-3.354,3.353-3.354l2.461,0.01v2.742c0,0-1.496,0-1.786,0c-0.291,0-0.705,0.145-0.705,0.77v1.66h2.533
                                L20.581,17.377z"/>
                            </svg>
                        </a>
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'main' )); ?>
                    <div id="hamburger"></div>
                </div>
            </div>
    </nav>

    <?php if (is_front_page()) { ?>

        <?php putRevSlider("home", "homepage") ?>


    <?php } else if (is_category()) {

        $categories = get_the_category();
        foreach( $categories as $category ) {
        }
        ?>

        <div class="bg_titre">
            <h1 class="titre"><?php echo $category->name  ?></h1>
        </div>

    <?php } else  {?>

    <div class="bg_titre">
        <h1 class="titre"><?php the_title(); ?></h1>
    </div>

    <?php } ?>


</header>



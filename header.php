<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php $templateurl = get_bloginfo('template_url'); ?>



    <link rel="shortcut icon" href="<?php echo $templateurl; ?>/assets/images/logo.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $templateurl; ?>/assets/images/logo.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $templateurl; ?>/assets/images/logo.png">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

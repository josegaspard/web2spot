<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta name="google-site-verification" content="cmXC_4jm86FLs_UKqxxlFXcWcxIWMlis5wD5YB64YYw" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo site_icon_url() ?>">
    <title><?php wp_title(''); ?> <?php if (wp_title('', false)) {
                                        echo ':';
                                    } ?> <?php bloginfo('name') ?></title>
    <meta name="theme-color" content="#FF2D4F" />
    <meta name="msapplication-navbutton-color" content="#FF2D4F" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <a class="btnWhatsapp" href="http://wa.link/86nu7u">
        <img src="/wp-content/uploads/2022/02/whatsapp.svg" width="70" height="auto">
    </a>

    <div id="page">
        <div id="contenido">
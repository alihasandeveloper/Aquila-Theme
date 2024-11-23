<!doctype html>
<html "<?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo('charset') ?>">
    <meta name=" viewport
    " content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php
if (function_exists('body_class')) {
    body_class();
}
?>
>

<?php wp_body_open() ?>
<div class="site" id="page">
    <header class="site-header" id="masthead" role="banner">
        <?php get_template_part('template-parts/header/nav')?>
    </header>

    <div class="site-content" id="site">


<?php
/***************************************************************************/
/* print_head(...) */
/***************************************************************************/
function print_head($page_title, $include_gallery = false)
{ ?>
    <head>
        <title><?= $page_title ?> </title>
        <meta charset="utf-8"/>
        <meta name="author" content="Chaeme Vogue"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/style.css"/>
        <link rel="stylesheet" href="/css/responsive.css"/>
        <link rel="stylesheet" href="/css/icons.css"/>
        <script src="/js/jquery-3.4.1.min.js"></script>
        <script src="/js/slideshow.js"></script>
        <script src="/~17ccv/a5/js/form-validation.js"></script>
        <?php if ($include_gallery) : ?>
            <link rel="stylesheet" href="/css/magnific-popup.css">
            <script src="/js/jquery.magnific-popup.js"></script>
            <script src="/js/gallery-popup.js"></script>
        <?php endif; ?>
    </head>
    <?php
}


        
        
        
        
        
        
        
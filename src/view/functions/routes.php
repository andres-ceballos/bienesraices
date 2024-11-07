<?php

//REDIRECT FRIENDLY URL NAME TO FILES .PHP C_MAIN
function viewURLToController($view)
{
    if ($view[0] == 'nosotros') {
        $controller_file = 'controller/c_about.php';
    } else if ($view[0] == 'anuncios') {
        $controller_file = 'controller/c_ad.php';
    } else if ($view[0] == 'blog') {
        $controller_file = 'controller/c_blog.php';
    } else if ($view[0] == 'contacto') {
        $controller_file = 'controller/c_contact.php';
    }

    return $controller_file;
}
<?php

//REDIRECT FRIENDLY URL NAME TO FILES .PHP C_MAIN
function friendlyURL($view)
{
    if ($view[0] == 'nosotros') {
        $controller_file = 'controller/c_us';
    } else if ($view[0] == 'anuncios') {
        $controller_file = 'controller/c_ad';
    } else if ($view[0] == 'blog') {
        $controller_file = 'controller/c_blog';
    } else if ($view[0] == 'contacto') {
        $controller_file = 'controller/c_contact';
    }

    return $controller_file;
}
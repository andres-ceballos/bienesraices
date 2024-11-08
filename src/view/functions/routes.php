<?php

//REDIRECT TO CONTROLLER .PHP FILES
function viewURLToController($view)
{
    switch ($view[0]) {
        case 'nosotros':
            $controller_file = 'controller/c_about.php';
            return $controller_file;
            break;
        case 'anuncios':
            if ($view[1] == 'detalle') {
                $controller_file = 'controller/c_ad_detail.php';
            } else {
                $controller_file = 'controller/c_ad.php';
            }
            return $controller_file;
            break;
        case 'blog':
            if ($view[1] == 'detalle') {
                $controller_file = 'controller/c_detail_blog.php';
            } else {
                $controller_file = 'controller/c_blog.php';
            }            
            return $controller_file;
            break;
        case 'contacto':
            $controller_file = 'controller/c_contact.php';
            return $controller_file;
            break;
    }
}

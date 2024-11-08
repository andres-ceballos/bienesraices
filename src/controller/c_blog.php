<?php
require_once('model/m_blog.php');

//INSTANCE BLOG MODEL
$blog = new Blog();

//VALIDATE URL AND REDIRECT TO SPECIFIC CONTROLLER
if (isset($_GET['view'])) {
    $view = explode('/', $_GET['view']);

        //VALIDATE IF IT IS DETAIL OR AD
        if ($view[1] == 'detalle') {
            //IF CONTROLLER FILE EXISTS
            if (is_file(viewURLToController($view))) {
                include viewURLToController($view);
            } else {
                //IF NOT EXIST, REDIRECT TO ROOT
                header('Location: /');
                exit();
            }
        } else {
            //CALL BLOGS VIEW/V_BLOG
            $array_blog = $blog->getBlogs();
            require_once('view/v_blog.php');
        }
}

<?php
require_once('model/m_blog.php');

//INSTANCE CALL BLOGS TO VIEW/V_BLOG
$blog = new Blog();

//VALIDATE URL AND REDIRECT TO VIEW/BLOG_DETAIL
if (isset($_GET['view'])) {
    $view = explode('/', $_GET['view']);
    //IF VIEW[1] HAS DETALLE STRING, REDIRECT TO VIEW/V_BLOG_DETAIL
    if ($view[1] == 'detalle') {
        $view_file = 'view/v_blog_detail';

        //SET ID URL TO MODEL BLOG VAR ID
        $blog->setId((int)$view[2]);

        //SAVE RESULT QUERY DETAILBLOG BLOG MODEL
        $detail_blog = $blog->getDetailBlog();

        //IF FILE EXIST
        if (is_file($view_file . '.php')) {
            include $view_file . '.php';
            //IF NOT EXIST, REDIRECT TO ROOT
        } else {
            header('Location: /');
            exit();
        }
        //IF NOT EXIST GET['view], REDIRECT TO VIEW/V_BLOG
    } else {
        //CALL BLOGS VIEW/V_BLOG
        $array_blog = $blog->getBlogs();
        require_once('view/v_blog.php');
    }
}


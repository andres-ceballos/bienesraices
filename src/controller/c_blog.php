<?php
require_once('model/m_blog.php');

//INSTANCE CALL BLOGS TO VIEW/V_BLOG
$blog = new Blog();
$array_blog = $blog->getBlogs();

require_once('view/v_blog.php');

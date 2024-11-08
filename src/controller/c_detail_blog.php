<?php
//INSTANCE BLOG MODEL
$blog = new Blog();

//SET ID URL TO MODEL BLOG VAR ID
$blog->setId((int)$view[2]);

//SAVE RESULT QUERY DETAIL BLOG MODEL
$detail_blog = $blog->getDetailBlog();

require_once('view/v_blog_detail.php');
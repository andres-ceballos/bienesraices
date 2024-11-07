<?php
require_once('view/functions/functions.php');
require_once('model/m_main.php');

$Main = new Main();

$array_ad = $Main->ads;
$array_blog = $Main->blogs;
$array_review = $Main->reviews;

require_once('view/v_main.php');
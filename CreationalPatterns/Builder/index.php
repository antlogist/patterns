<?php

include_once('Controllers/BlogPostController.php');

$post = new BlogPostController;

echo '<pre>';
var_dump($post->builder());
echo '</pre>';

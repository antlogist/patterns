<?php

include_once('Builders/BlogPostBuilder.php');


class BlogPostController
{
    public function builder()
    {
        $builder = new BlogPostBuilder;

        $posts[] = $builder->setTitle('Test title')->getBlogPost();

        return $posts;
    }
}

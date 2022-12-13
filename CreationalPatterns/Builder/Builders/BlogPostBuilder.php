<?php

include_once('Interfaces/BlogPostBuilderInterface.php');
include_once('Classes/BlogPost.php');

class BlogPostBuilder implements BlogPostBuilderInterface
{

    private $blogPost;

    public function __construct()
    {
        $this->create();
    }

    public function create(): BlogPostBuilderInterface
    {
        $this->blogPost = new BlogPost;

        return $this;
    }

    /**
     * @param string $value
     * @return BlogPostBuilderInterface
     */
    public function setTitle(string $value): BlogPostBuilderInterface
    {
        $this->blogPost->title = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return BlogPostBuilderInterface
     */
    public function setText(string $value): BlogPostBuilderInterface
    {
        $this->blogPost->text = $value;

        return $this;
    }

    /**
     * @param array $value
     * @return BlogPostBuilderInterface
     */
    public function setCategories(array $value): BlogPostBuilderInterface
    {
        $this->blogPost->categories = $value;

        return $this;
    }

    /**
     * @param array $value
     * @return BlogPostBuilderInterface
     */
    public function setTags(array $value): BlogPostBuilderInterface
    {
        $this->blogPost->tags = $value;

        return $this;
    }

    /**
     * @return BlogPost
     */
    public function getBlogPost(): BlogPost
    {
        $result = $this->blogPost;

        /**
         * refresh the blogPost var
         * to continue working with the object
         */
        $this->create();

        return $result;
    }
}

<?php

interface BlogPostBuilderInterface
{
    /**
     * @return void
     */
    public function create();

    /**
     * @param string $value
     * @return void
     */
    public function setTitle(string $value);

    /**
     * @param string $value
     * @return void
     */
    public function setText(string $value);

    /**
     * @param array $value
     * @return void
     */
    public function setCategories(array $value);

    /**
     * @param array $value
     * @return void
     */
    public function setTags(array $value);

    /**
     * @return void
     */
    public function getBlogPost();
}

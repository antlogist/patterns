<?php

include_once('Factories/LightThemeFactory.php');
include_once('Factories/DarkThemeFactory.php');

class ThemeController
{
    private $theme;

    public function __construct($theme)
    {
        $this->theme = $theme;
    }

    public function load()
    {
        switch ($this->theme) {
            case 'dark':
                return new DarkThemeFactory;
            default:
                return new LightThemeFactory;
        }
    }
}

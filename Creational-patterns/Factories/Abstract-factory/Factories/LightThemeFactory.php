<?php

include_once('Interfaces/ThemeFactoryInterface.php');
include_once('Ui/LightHeader.php');
include_once('Ui/LightFooter.php');

class LightThemeFactory implements ThemeFactoryInterface
{
    public function getHeader(): HeaderInterface
    {
        return new LightHeader;
    }

    public function getFooter(): FooterInterface
    {
        return new LightFooter;
    }
}

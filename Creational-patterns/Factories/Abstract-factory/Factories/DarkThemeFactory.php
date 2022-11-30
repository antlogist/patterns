<?php

include_once('Interfaces/ThemeFactoryInterface.php');
include_once('Ui/DarkHeader.php');
include_once('Ui/DarkFooter.php');

class DarkThemeFactory implements ThemeFactoryInterface
{
    public function getHeader(): HeaderInterface
    {
        return new DarkHeader;
    }

    public function getFooter(): FooterInterface
    {
        return new DarkFooter;
    }
}

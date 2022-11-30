<?php

include_once('Interfaces/HeaderInterface.php');
include_once('Interfaces/FooterInterface.php');

interface ThemeFactoryInterface
{
    public function getHeader(): HeaderInterface;

    public function getFooter(): FooterInterface;
}

<?php

include_once('Controllers/ThemeController.php');

$theme = new ThemeController('light');

$theme->load()->getHeader()->render();
$theme->load()->getFooter()->render();

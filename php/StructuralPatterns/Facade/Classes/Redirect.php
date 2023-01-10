<?php

class Redirect
{
    //Redirect to specific page
    static function to($page)
    {
        header("location: $page");
    }

    //Redirect to the same page
    static function back()
    {
        $uri = $_SERVER("REQUEST_URI");
        header("location: $uri");
    }
}

<?php
class About
{
    public static function show()
    {
        readfile(__DIR__ . "/../nav.html");
        readfile(__DIR__ . "/about.html");
    }
}

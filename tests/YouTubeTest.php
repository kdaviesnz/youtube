<?php

require_once("vendor/autoload.php");
require_once("src/IYouTube.php");
require_once("src/YouTube.php");


class YouTubeTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {

    }

    public function tearDown()
    {

    }


    public function testYouTuve()
    {
        $yt = new \kdaviesnz\youtube\YouTube("AIzaSyBYpg2XaZYVf9JYkXqLzpTWQby4iVhtN_Y", "iphone");
        echo $yt;

    }

}

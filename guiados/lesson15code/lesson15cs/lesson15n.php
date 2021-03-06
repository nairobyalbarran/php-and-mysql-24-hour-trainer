<?php

class Sitewide {

    public static $copyright = '&copy; 2011';
    private static $site = 'Counting Site';
    private static $count;

    public static function getSite() {
        return self::$site;
    }

    public static function getCopyright() {
        return self::$copyright;
    }
    public static function getCount(){
        self::$count++; //añade uno al contador
        return self::$count; // devuelve count;
    }
}
?>
<html>
    <title><?php echo Sitewide::getSite(); ?></title>
    <body>
        <h1><?php echo Sitewide::getSite(); ?></h1>
        <ul>
            <li><?php echo Sitewide::getCount();?></li>
            <li><?php echo Sitewide::getCount();?></li>
            <li><?php echo Sitewide::getCount();?></li>
        </ul>
        <p><?php echo Sitewide::$copyright;?></p>
    </body>
</html>

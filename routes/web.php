<?php
require_once __DIR__ . "/../app/Controllers/MainController.php";

isset($_REQUEST[Setting::$prefix]) ? $nowHref = $_REQUEST[Setting::$prefix] : $nowHref = '';

isset($_REQUEST[Setting::$prefix_location]) ? $location = $_REQUEST[Setting::$prefix_location] : $location = '';

if($nowHref == 'vote' & ($location == '')) $nowHref = '';

$route = new MainController();

switch($nowHref){
    case 'vote':
        $title        = Setting::$title[0];
        $txt          = $route->Vote($location);

        $SiteCode     = $txt['SiteCode'];
        $SiteName     = $txt['SiteName'];
        $LocationCode = $txt['LocationCode'];
        $LocationName = $txt['LocationName'];
        $content = dirname(__DIR__ ) . "/app/Views/Vote/view.php";
        break;
    default:
        $title   = Setting::$title[0];
        $txt     = $route->Default();

        $content = $txt;
        $content = dirname(__DIR__ ) . "/app/Views/Home/view.php";
    break;
}
?>
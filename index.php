<?PHP
ob_start();
session_start();
require_once __DIR__ . "/config/setting.php";

require_once __DIR__ . "/tools/connectDB.php";
require_once __DIR__ . "/tools/function.tool.php";
require_once __DIR__ . "/tools/crud.tool.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set(Setting::$AppTimeZone);

// $_SESSION['jai_id_user'] = 1;
// $_SESSION['jai_no_user'] = '6601076';
// $_SESSION['jai_email'] = 'mail.com';
// $_SESSION['jai_ref_id_site'] = 1;
// $_SESSION['jai_site_initialname'] = 'PCS';
// $_SESSION['jai_fullname'] = 'MIS TEST';
// $_SESSION['jai_phone'] = '4537';
// $_SESSION['jai_class_user'] = 2;
// $_SESSION['jai_id_dept'] = 13;
// $_SESSION['jai_dept_name'] = 'IT';
// $_SESSION['jai_dept_initialname'] = 'IT';      
// $_SESSION['jai_status_user'] = 1;
// $_SESSION['jai_popup_howto'] = 0;

// if(empty($_SESSION['car_id_user'])){ 
    
//     $_SESSION = []; //empty array. 
//     session_destroy(); 
//     $prefixController = PageSetting::$prefixController;
//     isset($_REQUEST[$prefixController]) ? $nowHref = $_REQUEST[$prefixController] : $nowHref = '';
//     $AppPage = PageSetting::$AppPage;
//     if($nowHref == 'login'){
//         include("app/Views/main/login.php"); 
//     } else {
//         main();
//     }
// } else {
    // echo 'asdasd'
    main();
// }

function main(){
    $Time = new Processing;
    $start = $Time->Start_Time();
    include("routes/web.php");
    include("app/Views/Layout/main_layout.php");
}
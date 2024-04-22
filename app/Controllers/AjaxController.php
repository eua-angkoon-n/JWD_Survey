<?php 
ob_start();
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Bangkok');	

require_once __DIR__ . "/../../config/setting.php";

require_once __DIR__ . "/../../tools/connectDB.php";
require_once __DIR__ . "/../../tools/crud.tool.php";
require_once __DIR__ . "/../../tools/function.tool.php";

require_once __DIR__ . "/../Models/VoteModel.php";

$action = $_POST['action'];

switch($action){
    case 'SendVote':
        $vote   = new VoteModel($_POST['rate'] , $_POST['location'],$_POST['vehicle']);
        $result = $vote->SaveResult();
        echo $result;
        exit;

}
?>
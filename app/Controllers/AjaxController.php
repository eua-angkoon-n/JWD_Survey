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
require_once __DIR__ . "/../Models/ListModel.php";
require_once __DIR__ . "/../Models/ReportModel.php";

$action = $_POST['action'];

switch($action){
    case 'SendVote':
        $vote   = new VoteModel($_POST['rate'] , $_POST['location'],$_POST['vehicle']);
        $result = $vote->SaveResult();
        echo $result;
        exit;
    case 'LocationList':
        $List   = new ListModel();
        $result = $List->Location($_POST['site']);
        echo $result;
        exit;
    case 'Report':
        $Report = new ReportModel($_POST['site'], $_POST['location'], $_POST['start'], $_POST['end']);
        $result = $Report->ReportData();
        // print_r($result);
        echo json_encode($result);
        exit;

}
?>
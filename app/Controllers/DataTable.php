<?php
ob_start();
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once __DIR__ . "/../../config/setting.php";

require_once __DIR__ . "/../../tools/connectDB.php";
require_once __DIR__ . "/../../tools/crud.tool.php";
require_once __DIR__ . "/../../tools/function.tool.php";

require_once __DIR__ . "/../Models/TableProcess.php";

require_once __DIR__ . "/../Models/TableReport.php";

$column = $_POST['order']['0']['column'] + 1;
$search = $_POST["search"]["value"];
$start  = $_POST["start"];
$length = $_POST["length"];
$dir    = $_POST['order']['0']['dir'];
$draw   = $_POST["draw"];

$dataGet = array(
    'column'     => $column,
    'search'     => $search,
    'length'     => $length,
    'start'      => $start,
    'dir'        => $dir,
    'draw'       => $draw,
);

if (isset($_POST['action'])) {

    switch ($_POST['action']) {
        case 'Report':
            $dataGet['dataCol'] = array( 
                0 => "date_survey",
                1 => "date_survey",
                2 => "score",
            );
            $Table = new ReportTable($_POST['site'], $_POST['location'], $_POST['startdate'], $_POST['enddate'], $dataGet);
            $data  = $Table->getTable();
            break;
    }
    // echo ($data);
    echo json_encode($data);
} else {
    echo json_encode('No Action');
}
exit;
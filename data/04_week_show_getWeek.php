<?php
require("01_init.php");
$mon = $_REQUEST["mon"];
$monPattern = '/^[0-9]{1,2}$/';
if(!preg_match($monPattern,$mon)){
   echo '{"code":-1,"msg":"月份格式不正确"}';
   exit;
};
$output=[];
$sql1 = "SELECT mon FROM zz_week GROUP BY mon DESC";
$result = mysqli_query($conn,$sql1);
$row = mysqli_fetch_row($result);
$sql2 = "SELECT mon FROM zz_week WHERE mon<=$mon GROUP BY mon DESC LIMIT 0,2;";
$result = mysqli_query($conn,$sql2);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
$output = [
    "maxMon"=>$row[0],
    "data"=>$rows
];
echo json_encode($output);
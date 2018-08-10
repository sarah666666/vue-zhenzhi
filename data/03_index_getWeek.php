<?php
require("01_init.php");
$pno = $_REQUEST["pno"];
$pnoPattern = '/^[0-9]{1,5}$/';
if(!preg_match($pnoPattern,$pno)){
   echo '{"code":-1,"msg":"页码格式不正确"}';
   exit;
}
if($pno<1){
 $pno = 1;
}
$sql1 = "SELECT count(pid) as c FROM zz_week";
$result = mysqli_query($conn,$sql1);
$row = mysqli_fetch_row($result);
$pageCount = ceil($row[0]/6);
$offset = ($pno-1)*6;
$sql2 = "SELECT pid,mon,week,weekIndex FROM zz_week ORDER BY pid DESC LIMIT $offset,6";
$result = mysqli_query($conn,$sql2);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
if(mysqli_error($conn)){
    echo mysqli_error($conn);
}
$output = [
    "pno"=>$pno,
    "pageCount"=>$pageCount,
    "data"=>$rows
];
echo json_encode($output);
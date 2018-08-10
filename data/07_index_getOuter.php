<?php
header("Access-Control-Allow-Origin:*");
require("01_init.php");
$pno = $_REQUEST["pno"];
$pnoPattern = '/^[0-9]{1,5}$/';
if(!preg_match($pnoPattern,$pno)){
   echo '{"code":-1,"msg":"页码格式不正确"}';
   exit;
};
if($pno<1){
 $pno = 1;
};
$sql1 = "SELECT count(oid) as c FROM zz_outer";
$result = mysqli_query($conn,$sql1);
$row = mysqli_fetch_row($result);
$pageCount = ceil($row[0]/5);
$offset = ($pno-1)*5;
$sql2 = "SELECT oid,title,outerIndex FROM zz_outer ORDER BY oid DESC LIMIT $offset,5";
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
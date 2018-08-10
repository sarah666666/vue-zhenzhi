<?php
require("01_init.php");
$oid = $_REQUEST["oid"];
$oidPattern = '/^[0-9]{1,5}$/';
if(!preg_match($oidPattern,$oid)){
   echo '{"code":-1,"msg":"外景作品序号格式不正确"}';
   exit;
};
$sql = "SELECT outerShow1,outerShow2,outerShow3 FROM zz_outer WHERE oid='$oid'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
echo json_encode($row);



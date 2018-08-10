<?php
require("01_init.php");
$mon = $_REQUEST["mon"];
$week = $_REQUEST["week"];
$monPattern = '/^[0-9]{1,2}$/';
if(!preg_match($monPattern,$mon)){
	echo '{"code":-1,"msg":"月份格式不正确"}';
	exit;
}
$sql = "SELECT weekShow1,weekShow2,weekShow3,weekShow4 FROM zz_week WHERE mon=$mon AND week='$week'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

echo json_encode($row);
<?php
header("Access-Control-Allow-Origin:*");
require("01_init.php");
@$pic = $_REQUEST["pic"];
@$suit = $_REQUEST["suit"];
@$tel = $_REQUEST["tel"];
@$uname = $_REQUEST["uname"];
$tReg = '/^1[34578][0-9]{9}$/';
if(!preg_match($tReg,$tel)){
   echo '{"code":-1,"msg":"手机号码格式不正确，请您输入正确的手机号码"}';
  exit;
}
$sql = "INSERT INTO user VALUES(null,'$pic','$suit','$tel','$uname')";
$result = mysqli_query($conn,$sql);
echo '{"code":1,"msg":"更新成功"}';
<?php
header("Content-Type:application/json;charset=utf-8");
header("Access-Control-Allow-Origin:*");
$conn = mysqli_connect("127.0.0.1","root","","zz",3306);
mysqli_query($conn,"SET NAMES UTF8");
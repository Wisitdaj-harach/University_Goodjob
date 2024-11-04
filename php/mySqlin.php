<?php
require('ConnSQL.php');

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$nname=$_POST["nname"];
$gender=$_POST["gender"];
$reli=$_POST["reli"];
$day1=$_POST["day1"];
$month1=$_POST["month1"];
$years=$_POST["years"];
$addr=$_POST["addr"];
$pnum=$_POST["pnum"];
$email=$_POST["email"];
$skill=$_POST["skill"];
$exp=$_POST["exp"];



$sql="INSERT INTO study(fname,lname,nname,gender,reli,day1,month1,years,addr,pnum,email,skill,exp)
VALUES('$fname','$lname','$nname','$gender','$reli','$day1','$month1','$years','$addr','$pnum','$email','$skill','$exp')";
$result = mysqli_query($conn,$sql);

//ถ้าเสร็จจะให้กลับมาหน้ากรอกพร้อมข้อความ"เสร็จสิ้น"
if($result){ echo("เสร็จสิ้น");}
else{echo ("ระบบเกิดข้อมผิดพลาด:".mysqli_error($conn)); }
?>
<?php
include("header.html");
$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
$conn=mysqli_connect("localhost","root","","c-meat");
$result=mysqli_query($conn,"INSERT INTO `name`(`name`, `username`, `password`) VALUES ('$name','$username','$password');");
mysqli_close($conn);
if($result==true)
{
?>
<p>ثبت نام شد</p s>
<?php
}else{
?>
<p>ثبت نام انجام نشد</p>
<?php

}
?>

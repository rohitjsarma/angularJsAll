<?php
$qs=$_SERVER['QUERY_STRING'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"test");
$data=mysqli_query($con,"select * from tbl_user where uname='$qs'");
//sleep(10);
echo mysqli_num_rows($data);
?>
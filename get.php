<?php
$str=$_SERVER['QUERY_STRING'];
mysql_connect("localhost","root","");
mysql_select_db("test");
$data=mysql_query("select * from tbl_user where uname='$str'");
sleep(10);
print mysql_num_rows($data);
?>

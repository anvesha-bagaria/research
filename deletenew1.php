<?php
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 $id=$_POST['id'];
$result = mysql_query("DELETE FROM r_data where id='$id'") or die(mysql_error());
//echo $result;
if($result)
{
$u="SUCCESSFULLY DELETED!!";
	setcookie("msg",$u,time()+160);
	header("location:deletenew.php");
}
 echo "boo";
 ?>
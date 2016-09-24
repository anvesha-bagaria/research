<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database

require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
$id=$_GET['id'];
//$id="14";
$query = "SELECT title,issuedate FROM r_data WHERE id = '$id'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$title=$row['title'];
$year=$row['issuedate'];
$name=$year."_".$title.".pdf";
$query = "SELECT pdf FROM r_data WHERE id = '$id'";

$result = mysql_query($query) or die('Error, query failed');
list($content) = mysql_fetch_array($result);
//echo $name;
header("Content-length: ".strlen($content));
header("Content-type: application/pdf");
header("Content-Disposition: attachment; filename=$name");
echo (($content));

}

?>
<?php
	require('../header.php');
	require('sidebar.php');
?>
 <div id="main">
    
<?php
 

 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 $id=$_GET['id'];
 
// get all products from products table
$result = mysql_query("SELECT *FROM seminar where id='$id'") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<table><tr><td><font size='4'>".$row["title"]."</font><br><br>AUTHOR: ".$row["author"]."<br>DATE: ".$row["date"]."<br><br> AUTHOR'S PROFILE: <br>".$row["profile"]."<br><br> ABOUT SEMINAR: <br>".$row["about"]."<br> VENUE: ".$row["venue"]."<br> </td></tr>";
    }
    echo "</table><br><br>";
} else {
    echo "No RESULTS";
}


?>
</div>
  <?php
require('footer.php');
?>
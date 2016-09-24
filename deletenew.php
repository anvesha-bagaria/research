<?php
	require('../header.php');
	require('sidebar.php');
?> <div id="main">
    <?php
 if(isset($_COOKIE['msg']))echo "<p style='color:red'>* ".$_COOKIE['msg'];
 ?>
<?php
 

 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
if(isset($_GET['id']))
{ $id=$_GET['id'];
 
 
// get all products from products table
$result = mysql_query("SELECT *FROM r_data where id='$id'") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<table><tr><td><font size='4'>".$row["title"]."</font><br><br>AUTHOR: ".$row["author"]."<br>YEAR: ".$row["issuedate"]."<br><br> ABSTRACT: <br>".$row["abstract"]."<br><br> FULL PDF: <a href='download.php?id=".$row["id"]."'>pdf</a></td></tr>";
    }
    echo "</table><br><br><form action='deletenew1.php' method='POST'> <input type='hidden' name='id' value='".$id."'/><input type='submit' name='submit' value='DELETE PERMANENTLY'/></form>";
} else {
		echo "NO RESULTS";
	}
}


?>
</div>
  <?php
require('footer.php');
?>
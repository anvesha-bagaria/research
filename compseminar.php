<?php
	require('../header.php');
	require('sidebar.php');
?>    
<div id="main">
 <div class="dropmenu">
<?php
 

 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
 
 {
// get all products from products table
$result = mysql_query("SELECT *FROM seminar  ORDER BY date DESC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	echo "COMPLETED SEMINARS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='all_new.php?id=".$row["id"]."'>".$row["title"]."</a>,";
		if($row["author"]!=NULL)echo $row["author"]."(AUTHOR)";
		echo ",".$row["date"].".</td></tr>";
    }
    echo "<br></table><br><br>";
} else {
    echo "No RESULTS";
}
}

?>
</div>
</div>
  <?php
require('footer.php');
?>
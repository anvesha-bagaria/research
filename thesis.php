<?php
	require('../header.php');
	require('sidebar.php');
?> 


<div id="main">


    <div class="dropmenu">
	
	
	<form method="POST" action="thesis.php">
	
	SEARCH A WORD: <input type="text" name="search" value=<?php if(isset($_POST['search']))echo $_POST['search'];?> ><br><br>
	 <input type="submit" name="submit" value="Submit" /><br><br>
SORT OPTIONS: <input type="submit" name="action1" value="AUTHOR" />
<input type="submit" name="action2" value="PUBLICATION YEAR" />
<input type="submit" name="action3" value="TITLE" />

</form>
<br>
<br>
<?php
 

 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
 if ( isset( $_POST['action1'] ) ) { 
	 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM r_data where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' AND type='thesis' ORDER BY author ASC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "</table><br><br>";
	}
 }
 else if ( isset( $_POST['action2'] ) ) 
 {
	 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM r_data where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' AND type='thesis' ORDER BY issuedate DESC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
	}
 }
 else if ( isset( $_POST['action3'] ) ) 
 {
	 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM r_data where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' AND type='thesis' ORDER BY title ASC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
	}
 }
 else if(isset($_POST['search']))
 {
 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM r_data where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' AND where type='thesis' ORDER BY issuedate DESC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
} else {
    echo "No RESULTS";
}
 }
 else
 { 
$result = mysql_query("SELECT *FROM r_data where type='thesis' ORDER BY issuedate DESC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	echo "MTECH THESIS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."].&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"]."</td></tr>";
    }
    echo "<br></table><br><br>";
} else {
    echo "No THESIS AVAILABLE";
}
}


?>
</div>
</div>
  <?php
require('footer.php');
?>
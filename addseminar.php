<br>
<?php
if(isset($_COOKIE['c']))
{
require('../header.php');
require('sidebar.php');
?>


 <div id="main">
 <?php
 if(isset($_COOKIE['msg']))echo "<p style='color:red'>* ".$_COOKIE['msg'];
 ?>
    <div class="dropmenu">
  <form action="add2.php" method="Post" enctype="multipart/form-data">
   Author's name: <br><input type="text" name="name"><br>
   Title: <br><input type="text" name="title"><br>
  
   Branch:<br> <select name="branch">
	<option value="">---SELECT---</option>
	
	<option value="cse">CSE</option>
	<option value="ece">ECE</option>
	<option value="cce">CCE</option>
	<option value="mme">MME</option>
	<option value="maths">MATHS</option>
	<option value="phy">PHYSICS</option>
</select><br>
	
</select><br>
   
  Date: <br><input type="text" name="year"><br>
  Author's Profile:<br><textarea   name= "abstract" rows="5" cols="80"> </textarea> <br>
   <input type="hidden" name='MAX_FILE_SIZE' value="10000000">
 Select a file to upload: <input type="file" name="userfile" id="userfile"/><br>
 
 <input type="submit" value="Submit Form" name="submit">
</form>
    </div></div>
<br><br><br><br><br><br>
 <?php
require('footer.php');
?>
<?php
}
else
{header("location:login1.php");}
?>
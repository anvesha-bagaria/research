<?php
	require('../header.php');
	require('sidebar.php');
?> 
<div id="main">
  <table width="" align="center"  cellpadding="0" cellspacing="1" bgcolor="#CCCCCF">
<tr></tr>
<tr>
<form name="form1" method="post" action="login2.php">
<td>
<table width="" border="0" cellpadding="5" cellspacing="4" bgcolor="#FFFFFF">
<tr>
<td colspan="5"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="u" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="p" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</form>
</tr>
</table>
    </div>
<br><br><br><br><br><br>
  <?php
require('footer.php');
?>

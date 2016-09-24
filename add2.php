<?php
//echo $_FILES['userfile']['size'];
if($_FILES['userfile']['size'] > 0)
{
//echo "yep";
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);
if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

echo $name=$_POST['name'];
$year=$_POST['year'];
$publication=$_POST['publication'];
$advisor=$_POST['advisor'];
$type=$_POST['type'];
$title=$_POST['title'];
$branch=$_POST['branch'];
$key=$_POST['keywords'];
$abstract=$_POST['abstract'];
$con=mysql_connect('127.0.0.1','root','') ;
if(!$con)
print "error";
if(mysql_select_db('research'))
{
	print "";
}
else
{
	die("cant connect 2 database");
}
$select="insert into r_data(author,branch,type,title,issuedate,abstract,pdf,publication,advisor,keywords) VALUES('$name','$branch','$type','$title','$year','$abstract','$content','$publication','$advisor','$key')";
$check=mysql_query($select,$con) or die(mysql_error());
//$result = mysql_query($check);
        if($check)
        {
			$u="RECORD SUCCEFULLY ADDED!!";
			setcookie("msg",$u,time()+60);
            header("location:add1.php");

         }
         else
         {
			$u="RECORD CANNOT BE ADDED!!";
			setcookie("msg",$u,time()+60);
			header("location:add1.php");
             

        }
}
else
{
	$u="ADD A PDF!!";
	setcookie("msg",$u,time()+60);
	header("location:add1.php");
}
?>
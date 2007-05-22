<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
</head>

<body>
<?
	require('init.php');
	$flag=$_POST['flag'];
	if(!strcmp($flag,"submit"))
	{
		$ayat=$_POST['ayat'];
		
		$result=mysql_query("SELECT * FROM temp_ayat")or die(mysql_error()."select temp_ayat");
		
		$ayat_no=mysql_result($result,0,'ayat_no');
		$ayat_no++;
		$sura_no=mysql_result($result,0,'sura_no');
		$sura_name=mysql_result($result,0,'sura_name');
		$para=mysql_result($result,0,'para');
		$ruku=mysql_result($result,0,'ruku');
		
		mysql_query("UPDATE temp_ayat SET `ayat_no`='$ayat_no'")or die(mysql_error()."update");
		$sql = "INSERT INTO `ayat` (`ayat_no`, `ayat`, `sura_no`, `sura_name`, `para`, `ruku`, `link`) VALUES ('$ayat_no','$ayat','$sura_no','$sura_name','$para','$ruku','')";
		mysql_query($sql)or die(mysql_error()."insert");
		mysql_close();	
		echo "Ayat no: ".$ayat_no."<br />".$ayat;	
	}
	else if(!strcmp($flag,"incruku"))
	{
		$ruku=$_POST['ruku'];
		mysql_query("UPDATE temp_ayat SET `ruku`=`ruku`+1")or die(mysql_error()."update");
		echo "Ruku increased ".$ruku;
	}
?>



<form action="" method="post" >

	<textarea name="ayat" rows="10" cols="30"></textarea>
	<input type="submit" />
	<input type="hidden" value="submit" name="flag"/>
	
	

</form>

<form action="" method="post" >
	
	<input type="submit" value="increment ruku"/>
	<input type="hidden" value="incruku" name="flag"/>
	<input type="hidden" value="<?echo $ruku;?>" name="ruku"/>

</form>
</body>
</html>
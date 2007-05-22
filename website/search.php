<?php
	require('init.php');

	$search=$_POST['search'];
	$q=$_GET['q'];

	if($q=="")
	{
		$result = mysql_query("SELECT * FROM ayat WHERE ayat LIKE '%$search%' ") or die(mysql_error()); 

		$num=mysql_numrows($result);
		$i=0;
		while ($i < $num) 
		{
			$ayat=mysql_result($result,$i,"ayat");
			$ayat_no=mysql_result($result,$i,"ayat_no");
			$sura_no=mysql_result($result,$i,"sura_no");
			$i++;
			echo "$sura_no : $ayat_no    $ayat <br /><br /><br />";
		}
	}
	else
	{
		$result = mysql_query("SELECT * FROM ayat WHERE ayat LIKE '%$q%' ") or die(mysql_error()); 

		$num=mysql_numrows($result);
		$i=0;
		while ($i < $num) 
		{
			$ayat=mysql_result($result,$i,"ayat");
			$ayat_no=mysql_result($result,$i,"ayat_no");
			$sura_no=mysql_result($result,$i,"sura_no");
			$i++;
			echo "$sura_no : $ayat_no    $ayat <br /><br /><br />";
		}
	
	}


?>
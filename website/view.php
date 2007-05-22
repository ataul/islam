<?php
	require('init.php');

	$para_=$_POST['para'];
	$para=$_GET['p'];
	$limit_=$_POST['limit'];
	$limit=$_GET['l'];

	if($limit=="")
		$limit=50;
		/*
	if($limit_=="")
		$limit=50;
	else
		$limit=$limit_;
	
*/
	if($para=="")
	{
		$result = mysql_query("SELECT * FROM ayat WHERE para='$para_' LIMIT 0 , $limit ") or die(mysql_error()); 

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
		$result = mysql_query("SELECT * FROM ayat WHERE para ='$para' LIMIT 0,'$limit'") or die(mysql_error()); 

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
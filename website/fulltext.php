<!doctype html public "-//w3c//dtd html 4.01 transitional//en"
"http://www.w3.org/tr/html40/loose.dtd">
<html>
	<head>
		<title>Full Text Search in Quran</title>
		<script type="text/javascript" src="highlight.js" ></script>
	</head>
	<body onload="highlight()">
		<form action="" method="post">
			<input type="text" name="t" />
			<input type="submit" name="" />
			
		</form>
		
	
<script type="text/javascript">
function highlight(){

<?
	require('init2.php');
	$t=$_POST['t'];
	echo "searchPrompt('$t',false);";
	//echo 'searchPrompt(\''.$t.'\',true,\'green\', \'pink\');';
	echo '}</script>';
	if($t!=""){
		$result=mysql_query("SELECT * ,MATCH(ayat) AGAINST ('$t') AS score FROM ayat WHERE MATCH(ayat) AGAINST ('$t')")or die(mysql_error());
		$num=mysql_numrows($result);
		echo $num.'<br />
		';
		$i=0;
		while ($i < $num) 
		{
			$ayat=mysql_result($result,$i,"ayat");
			$ayat_no=mysql_result($result,$i,"ayat_no");
			$score=mysql_result($result,$i,"score");
			echo $ayat_no." ".$ayat.'<br />
			';
			$i++;
		}
	}
?>
</body>
</html>
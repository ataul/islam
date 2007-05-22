<html>
<title>Open source project Islam</title>

<body>
<a href="contribute.php">Contribute</a>
<br /><br /><br /><br />
<?php
require('init.php');
$where=$_POST['where'];
$where__=$_POST['where__'];
echo "SELECT * FROM ayat WHERE $where = $where__";

echo "<table border=\"1\">
<tr>
  <td>ayat_no</td>
  <td>ayat</td>
  <td>sura_no</td>
  <td>sura_name</td>
  <td>para</td>
  <td>ruku</td>
</tr>";

	$result=mysql_query("SELECT * FROM ayat WHERE $where = '$where__'")or die(mysql_error());
	$num=mysql_numrows($result);
	$i=0;
	while ($i < $num) 
	{
		$ayat=mysql_result($result,$i,"ayat");
		$ayat_no=mysql_result($result,$i,"ayat_no");
		$sura_no=mysql_result($result,$i,"sura_no");
		$sura_name=mysql_result($result,$i,"sura_name");
		$para=mysql_result($result,$i,"para");
		$ruku=mysql_result($result,$i,"ruku");
		$i++;
		echo "<tr>
		  <td>$ayat_no</td>
		  <td>$ayat</td>
		  <td>$sura_no</td>
		  <td>$sura_name</td>
		  <td>$para</td>
		  <td>$ruku</td>
		</tr>";

	}
		
?>
</table>
<br /><br /><br />
<a href="contribute.php">Contribute</a>
</body>
</html>
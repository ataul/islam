<?
require('init.php');
$start = $_POST['start'];
$limit = $_POST['limit'];
	$sql = <<<SQL

SELECT * FROM ayat

SQL;
$result = mysql_query($sql);
$num = mysql_num_rows($result);
$sql = "SELECT * FROM ayat LIMIT $start, $limit ";
$result = mysql_query($sql);
$num2 = mysql_num_rows($result);
if($num2>$limit)
	$min = $limit;
else
echo '{"success":true,"totalCount":'.$num.',"rows":[';
$i=0;
while($ayat = mysql_fetch_object($result)){
	echo '{
	"ayat_no":"'.$ayat->ayat_no.'",
	"sura":"'.$ayat->sura.'",
	"sura_name":"'.$ayat->sura_name.'",
	"ayat":"'.$ayat->ayat.'",
	"para":"'.$ayat->para.'",	
	"ruku":"'.$ayat->ruku.'"';
	if($i!=$min-1)
		echo ',';
	$i++;
	}
echo '}]}';
?>

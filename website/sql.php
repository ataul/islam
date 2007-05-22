<html>
<title>Open source project Islam</title>

<body>
<b>Database schema</b>
<br /><br />
Table "ayat"
<br />
<table border="1">
<tr>
  <td>Field/Attribute</td>
  <td>Type</td>
</tr>

<tr>
  <td>ayat_no</td>
  <td>int(11))</td>
</tr>
<tr>
  <td>ayat</td>
  <td>text</td>
</tr>

<tr>
  <td>sura_no</td>
  <td>int(11)</td>
</tr>

<tr>
  <td>sura_name</td>
  <td>text</td>
</tr>

<tr>
  <td>para</td>
  <td>int(11)</td>
</tr>
<tr>
  <td>ruku</td>
  <td>int(11)</td>
</tr>

</table>
<br /><br /><br /><br />
<form action="sql_query.php" method="post">
SELECT * FROM ayat WHERE <select name="where" id="where">
				<option>ayat_no</option>		
				<option>ayat</option>
				<option>sura_no</option>
				<option>sura_name</option>
				<option>para</option>
				<option>ruku</option>				
</select>
=
<input type="text" name="where__" id="where__" />
<input type="submit" name="query" id="query" value="Query" />
</form>
<br /><br />
<a href="labs.creash.com.bd">Home</a>
</body>

</html>
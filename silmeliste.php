<html>
 
<head>
<meta charset="utf-8">
<title>DATABASE LIST</title>
</head>
 
<body>
<table border="1" align="center" width="500">
<tr>
	
<td bgcolor="aqua" align="center">ID</td>
<td bgcolor="aqua" align="center">DAY</td>
<td bgcolor="aqua" align="center">MONTH</td>
<td bgcolor="aqua" align="center">YEAR</td>
<td bgcolor="aqua" align="center">TIME</td>
<td bgcolor="aqua" align="center">EVENT</td>

 
<td bgcolor="#CCCCCC">ACTION</td>
 
</tr>
<?php
require_once 'baglam.php';

$sonuc=pg_query("select * from planning"); 
 
while($satir=pg_fetch_array($sonuc))
{
echo '<tr>';
echo '<td>'.$satir['id'].'</td>';
echo '<td>'.$satir['day'].'</td>';
echo '<td>'.$satir['month'].'</td>';
echo '<td>'.$satir['year'].'</td>';
echo '<td>'.$satir['time'].'</td>';
echo '<td>'.$satir['event'].'</td>';

echo '<td> <a href="silme.php?id='.$satir['id'].'" onclick="return uyari();">Delete</a> </td>';
echo '</tr>';
}
?>
 
 
</table>
 
</body>
</html>
 
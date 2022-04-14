<?php
require_once 'baglam.php';


if(isset($_POST['ekle'])){
	$new=pg_query("insert into planning (id,day,month,year,time,event) VALUES ('".$_POST['id']."','".$_POST['day']."','".$_POST['month']."','".$_POST['year']."','".$_POST['time']."','".$_POST['event']."')");


$sonuc=($new);
 
if ($sonuc==0)
{
	echo "NOT SAVED.PLEASE CHECK IT!!";
}
else{

	echo '<font color=red>'."

	 SAVED",'</font>';

}
    
}

if(isset($_POST['kaydet'])){
	$ky_lat=$_POST['id'];
	$duzelt_sorgu = pg_query("update planning set id='".$_POST['id']."', day='".$_POST['day']."',month='".$_POST['month']."',year='".$_POST['year']."',time='".$_POST['time']."' , event='".$_POST['event']."' WHERE id=$ky_lat") or die("ERROR! Try Again");

	echo '<font color=red>'."CHANGED!...",'</font>';
}
?>
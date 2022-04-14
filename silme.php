<?php
require_once 'baglam.php';
 
$silinecekID= $_GET['id'];
 
 
$sonuc=pg_query("DELETE from planning 
where id =".$silinecekID);
 
if($sonuc>0){
echo "Succesfully deleted, 2 second loading new list.";
header( "refresh:2;url=silmeliste.php" ); 
 }
else
echo "Bir sorun oluştu silinemedi";
 
?>
<?php

try{
$con=new PDO("mysql:localhost=localhost; dbname=php5", "root","");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "défaut de connexion".$e->getMessage();
}
//pour tester la connexion ecrir la ligne suivante;
// if($con){ echo "connecxion réussite" ;}

?>
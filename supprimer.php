<?php
require_once("connect.php");
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $req=$con->prepare("DELETE FROM produit where id= ?");
    $req->execute(array($id));
    if($req){
      header("location: afficher.php");
    }
}


?>
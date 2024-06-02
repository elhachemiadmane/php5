<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php5</title>

    <style>
        input{
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- créer formulaire -->

    <form action="" method="post">
        <label for="">Nom de produit</label><input type="text" name="nom" autocomplete="off"><br>
        <label for="">Prix</label><input type="text" name="prix" autocomplete="off"><br>
        <label for="">Quantité</label><input type="number" name="quantite" min="1" autocomplete="off"><br>
        <button type="submit" name="enregistrer">Enregistrer</button>

    </form>
</body>
</html>
 <!-- créer connexion pour transmettre les information au BD -->

 <?php
 require_once("connect.php");
 if(isset($_POST['enregistrer']))
 {
    $nom=$_POST['nom'];
    $prix=$_POST['prix'];
    $quantite=$_POST['quantite'];
if(!empty($nom) AND !empty($prix) AND !empty($quantite)){
if(strlen($nom)<5){
    echo "cinque caracteres minimum";
} else {
    $req=$con->prepare("INSERT INTO produit(nomproduit, prix, quantite) VALUES (?,?,?)");
    $req->execute(array($nom, $prix, $quantite));
  if($req){   header("location: afficher.php");
  }
}
}else {echo "rempli tt champs";}
 }
 ?>
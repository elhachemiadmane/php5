<?php
require_once("connect.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $req=$con->prepare("SELECT * FROM produit where id= $id");
    $mod=$req->fetch();
}?>
   <h2>modification produit</h2>

<form action="" method="post">
<label for="">Nom de produit</label><input value="<?php echo $mod['nomproduit'];?>" type="text" name="nom" autocomplete="off"><br>
        <label for="">Prix</label><input value="<?php echo $mod['prix'];?>" type="text" name="prix" autocomplete="off"><br>
        <label for="">Quantité</label><input value="<?php echo $mod['quantite'];?>" type="number" name="quantite" min="1" autocomplete="off"><br>
        <button type="submit" name="modifier">Enregistrer Modification</button>

    </form>


    <?php 
if(isset($_POST['modifier']))
{
    $nom=$_POST['nom'];
    $prix=$_POST['prix'];
    $quantite=$_POST['quantite'];
    $req=$con->prepare("UPDATE produit SET nomproduit=?, prix=?, quantite=? where id=$id");
    $req->execute(array($nom, $prix, $quantite));
    if($req){
        header("location:afficher.php");
    }

}
    ?>
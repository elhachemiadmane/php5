<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afficher</title>
    <h4>afficher nos produits</h4>
</head>
<style>
table{
    border: 2px solid blue;
}
td, th{ border: 1px solid red;
    border-collapse: collapse;

}

</style>
<body>

    <table>

    <th>ID</th>
    <th>nom produit</th>
    <th>prix</th>
    <th>Quantite</th>
    <th>action</th>


    <?php
require_once("connect.php");
$req=$con->query("SELECT * FROM produit");
while($aff=$req->fetch()){?>

<tr>
<td><?php echo $aff['id'];?></td>
<td><?php echo $aff['nomproduit'];?></td>
<td><?php echo $aff['prix'];?></td>
<td><?php echo $aff['quantite'];?></td>
    <td>
        <a href="modifier.php?id=<?php echo $aff['id']?>">Modifier</a>
        <a href="supprimer.php?id=<?php echo $aff['id']?>">supprimer</a>
    </td>
</tr>

<?php }?>
    </table>
</body>
</html>


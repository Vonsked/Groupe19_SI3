
<?php
// configuration
$db = new PDO('mysql:host=localhost;dbname=basev1;charset=utf8mb4', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false,
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// new data
$id=$_GET['idProd'];

// query
$sql = "DELETE FROM produit
WHERE id_produit=?";
$q = $db->prepare($sql);
$q->execute(array($id));
header("location: admin_afficher_produit.php");

?>
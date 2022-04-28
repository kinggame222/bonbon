<?php
require "librairies/fonction.php";
$bd;
connecterBD($bd); 

$_produit = $_POST['nom'];
$_prix = $_POST['prix'];
$_fournisseur = $_POST['fourn'];
$_quant = $_POST['quanti'];
$_fmt = $_POST['form'];
$_dsc = $_POST['descri'];


$sql = "INSERT INTO produit (
		nomProduit,
		fournisseur,
		quantite,
		format,
		prix,
		description
	)
VALUES
	(
		'$_produit',
		'$_fournisseur ',
		$_quant,
		'$_fmt kg',
		$_prix,
		'$_dsc'
	);";

mysqli_query($bd, $sql);

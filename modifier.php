<?php
include 'inclus/header_admin.php'
?><?php
require "librairies/fonction.php";
$bd;
connecterBD($bd);    // appel de la fonction dans fonctions.lib.php


if (isset($_GET['action'])){
    if ($_GET['action'] == 'modifier'){
        modifierProduit($bd,$_GET['no'],$_POST['nomProduit'],$_POST['prix'],$_POST['quantite'],$_POST['format'],$_POST['fournisseur'],$_POST['description']);
        
    };
};



?>


<div id="texte">
   
        <table>
            <?php modifier($bd) ?>
          
        </table>
     
  
</div>

<?php
include 'inclus/footer_admin.php'
?>
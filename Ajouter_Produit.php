<?php
include 'inclus/header_admin.php'
?>
<?php
require "librairies/fonction.php";
$bd;
connecterBD($bd);
verife($bd);
?>
<div id="texte">
    <form name="f" action="Ajouter_Produit.php?action=plus" method="POST" enctype="multipart/form-data">
        <div class="input-group">
            <div class="input-group">

                <div class="input-group-text">Nom du produit :</div>
                <input type="text" class="form-control" required name="nomProduit">
            </div>
            <div class="input-group ">
                <div class="input-group-text">Prix: </div>
                <input type="text" class="form-control" required name="prix">
            </div><br>
            <div class="input-group">
                <div class="input-group-text">Fournisseur: </div>
                <input type="text" class="form-control" required name="fournisseur">
            </div><br>
            <div class="input-group">
                <div class="input-group-text">quantité: </div>
                <input type="text" class="form-control" required name="quantite">
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-text">format: </div>
                <input type="text" class="form-control" required name="format">
            </div><br>
            <div class="input-group">
                <div class="input-group-text">description: </div>
                <input type="text" class="form-control" required name="description">
            </div><br>
            <div class="input-group">
                <input type="file" class="form-control" name='photo' required>
            </div><br>
        </div>
        <input type="submit" value="sauvegarder" name="submit"><input type="reset" value="annuler">
    </form>
</div>
<?php
include 'inclus/footer_admin.php'
?>
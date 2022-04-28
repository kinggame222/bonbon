<?php
include 'inclus/header_admin.php'
?>
<?php
require "librairies/fonction.php";



?>
<div id="texte">
    <form method="post" enctype="multipart/form-data" action="Ajouter_Produit.php?action=produit">

        <div class="input-group">
            <div class="input-group">
                <div class="input-group-text">Nom du produit :</div>
                <input type="text" class="form-control" required>
            </div>

            <div class="input-group ">
                <div class="input-group-text">Prix: </div>
                <input type="text" class="form-control" required>
            </div><br>
            <div class="input-group">
                <div class="input-group-text">Fournisseur: </div>
                <input type="text" class="form-control" required>
            </div><br>
            <div class="input-group">
                <div class="input-group-text">quantité: </div>
                <input type="text" class="form-control" required>
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-text">format: </div>
                <input type="text" class="form-control" required>
            </div><br>
            <div class="input-group">
                <div class="input-group-text">remarque: </div>
                <input type="text" class="form-control" required>
            </div><br>
            <div class="input-group">
                <input type="file" class="form-control"  name='photo' required>
            </div><br>
            
            
        </div>
        <input type="submit" value="sauvegarder"><input type="reset" value="annuler">
    </form>
</div>
<?php ajouter()?>



<?php
include 'inclus/footer_admin.php'
?>
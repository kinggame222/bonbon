<?php
include 'inclus/header.php'
?>
<?php
require "librairies/fonction.php";

?>

<div id="texte">
    <form name="connection" action="connection.php?action=connection" method="post">
        <div class="row">
            <div class="col-4" align="right">
                <label for="cou ">Courriel:</label>
                <br>
                <label for="motdepasse">Mot de passe: </label>
            </div>
            <div class="col-7">
                <!-- courriel -->
                <input type="text" name="courriel" id="courriel">
                <br>
                <!-- mot de passe  -->
                <input type="password" name="motdepasse" id="motdepasse">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <br>
            </div>
            <div class="col-7">
                <br>
                <input type="button" value="Se connecter" onclick="location.href='Ajouter_Produit.php'">
                <input type="reset" value="Annuler">
            </div>
        </div>
    </form>
</div>

<?php
include 'inclus/footer.php'
?>
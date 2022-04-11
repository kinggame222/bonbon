<?php
include 'inclus/header.php'
?>

<div id="texte">
    <form action="">
        <div class="row">

            <div class="col-3">
            </div>
            <div class="col-2" align="right">
                <label for="courriel">Courriel:</label>
                <br>
                <label for="motdepasse">Mot de passe: </label>
            </div>
            <div class="col-1">
                <!-- courriel -->
                <input type="text">
                <!-- mot de passe  -->
                <input type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <br>
            </div>
            <div class="col-2">
                <br>
                <input type="button" value="Se connecter">
                <input type="button" value="Annuler">
            </div>
        </div>
    </form>
</div>

<?php
include 'inclus/footer.php'
?>
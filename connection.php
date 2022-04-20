<?php
include 'inclus/header.php'
?>

<div id="texte">
    <form action="">
        <div class="row">
            <div class="col-4" align="right">
                <label for="courriel">Courriel:</label>
                <br>
                <label for="motdepasse">Mot de passe: </label>
            </div>
            <div class="col-7">
                <!-- courriel -->
                <input type="text">
                <br>
                <!-- mot de passe  -->
                <input type="password">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <br>
            </div>
            <div class="col-7">
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
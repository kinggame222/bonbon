<?php
include 'inclus/header.php'
?>

<div id="texte">
    <form action="">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-2" align="right">
                <label for="nom">Votre nom : </label>
            </div>
            <div class="col-1">
                <!-- Nom -->
                <input type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-2" align="right">
                <label for="sujet">Sujet : </label>
            </div>
            <div class="col-1">
                <!-- Nom -->
                <input type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-2" align="right">
                <label for="Couriel">Courriel : </label>
            </div>
            <div class="col-1">
                <input type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
            </div>

            <div class="col-4">
                <textarea name="com" id="textar" cols="50" rows="10">

                </textarea>
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
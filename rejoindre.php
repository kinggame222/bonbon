<?php
include 'inclus/header.php'
?>

<div id="texte">
    <form action="">
        <div class="row">
            <div class="col-4" align="right">
                <label for="nom">Votre nom : </label>
            </div>
            <div class="col-7">
                <!-- Nom -->
                <input type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-4" align="right">
                <label for="sujet">Sujet : </label>
            </div>
            <div class="col-7">
                <!-- sujet -->
                <input type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-4" align="right">
                <label for="Couriel">Courriel : </label>
            </div>
            <div class="col-7">
                <!-- courriel -->
                <input type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-4">
                <!-- commentaire -->
                <textarea name="com" id="textar" cols="50" rows="10">inscrivez votre message
                </textarea>
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
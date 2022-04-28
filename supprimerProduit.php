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
    <form name="f" action="supprimerProduit.php?action=supprimer" method="POST" enctype="multipart/form-data">

        <h1>supprimer un produit</h1>
        <table class="table table-striped table tr td table-bordered table-hover">
            <?php supp($bd) ?>
        </table>

        <input type="submit" value="supprimer" name="submit" onclick=" return VerifSupp();">
    </form>
</div>
<script>
    function VerifSupp() {
        var valide = false;
        if (confirm('voulez vopus vraiment supprimmer les enregistrements sselectionner ?'))
            valide = true;
        return valide;
    };
</script>

<?php
include 'inclus/footer_admin.php'
?>
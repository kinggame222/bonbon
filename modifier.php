<?php
require "librairies/fonction.php";
$bd;
connecterBD($bd);    // appel de la fonction dans fonctions.lib.php
verife($bd);


if (isset($_GET["action"])) {
    if ($_get["action"] == "modifier") {
        modifier2($bd, $_GET['idProduit'], $_POST['nomProduit'], $_POST['prix'], $_POST['fournisseur'], $_POST['quantite'], $_POST['format'], $_POST['description']);
    }
}


?>
<?php
include 'inclus/header_admin.php'
?>

<div id="texte">
    <form name="item" action="modifier.php" method="post">
        <table>
            <?php modifier($bd) ?>
        </table>
    </form>
</div>

<?php
include 'inclus/footer_admin.php'
?>
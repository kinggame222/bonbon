<?php
include 'inclus/header.php'
?>
<?php
require "librairies/fonction.php";
$bd;
connecterBD($bd);    // appel de la fonction dans fonctions.lib.php
?>
<div id="texte">
    <form name="item" action="produit.php" method="post">
        <table>
            <?php afficher($bd) ?>
        </table>
    </form>
</div>

<?php
include 'inclus/footer.php'
?>
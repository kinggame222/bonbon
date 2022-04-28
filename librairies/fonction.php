<?php
function verife($bd)
{
    $valid  = 1;
    if (isset($_GET['action']))
        if ($_GET['action'] == "plus") {
            $requete = "select * from produit";
            $resultat = mysqli_query($bd, $requete);
            while (mysqli_fetch_array($resultat)) {
                $valid++;
            }
            $uploads_dir = './image/';
            $extention = '.jpg';
            $total = $valid . $extention;
            if (is_uploaded_file($_FILES['photo']['tmp_name'])) {
                move_uploaded_file($_FILES['photo']['tmp_name'], $uploads_dir . $total);
            }
            ajouter_produit_function($bd);
        };
};


function connecterBD(&$bd)
{
    $bd = mysqli_connect("localhost", "root", "", "bonbon");
    if (mysqli_connect_errno($bd)) {
        echo "Echec lors de la connexion à Mysql : " . mysqli_connect_error();
    }
    $bd->set_charset("utf8");
}

function afficher($bd)
{
    $requete = "select * from produit";
    $resultat = mysqli_query($bd, $requete);
    while ($ligne = mysqli_fetch_array($resultat)) {

        echo "<h5>" . $ligne["nomProduit"] . "</h5>",
        "<div class=row >",
        "<div class=col-lg-2 >
        <img src=image/$ligne[idProduit].jpg width=193px, height=130px> 
        </div>",
        "<div class=col-lg-10> <b> prix : </b> " . $ligne["prix"],
        " $",
        "<br>",
        "<b> quantité : </b> " . $ligne["quantite"],
        "<br>",
        "<b> format : </b> " . $ligne["format"],
        "<br>",
        "<b> fournisseur : </b> " . $ligne["fournisseur"],
        "<br>",
        "<b> description : </b> " . $ligne["description"],
        "<br>",
        "</div><br>";
        print("</div><hr>");
    };
}
function ajouter_produit_function($bd)
{
    $bd;
    connecterBD($bd);

    $_produit = $_POST['nomProduit'];
    $_prix = $_POST['prix'];
    $_fournisseur = $_POST['fournisseur'];
    $_quant = $_POST['quantite'];
    $_fmt = $_POST['format'];
    $_dsc = $_POST['description'];

    $sql = "INSERT INTO produit (
		nomProduit,fournisseur,quantite,format,prix,description)
    VALUES( '$_produit','$_fournisseur ',$_quant,'$_fmt kg',$_prix,'$_dsc');";
    -mysqli_query($bd, $sql);
};
// pour reset le compteur de la bd
//set @autoid :=0; 
//update produit set idProduit = @autoid := (@autoid+1);
//alter table produit Auto_Increment = 1;
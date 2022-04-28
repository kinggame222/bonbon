<?php

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
function ajouter()
{
    print_r($_POST);
};

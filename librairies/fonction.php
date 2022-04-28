<?php
function verife($bd)
{
    $valid  = 1;
    if (isset($_GET['action'])) {

        //ajouter 
        if ($_GET['action'] == "plus") {
            $requete = "select * from produit";
            $resultat = mysqli_query($bd, $requete);
            while ($ligne = mysqli_fetch_array($resultat)) {
                $valid = $ligne["idProduit"] + 1;
            }
            $uploads_dir = './image/';
            $extention = '.jpg';
            $total = $valid . $extention;
            if (is_uploaded_file($_FILES['photo']['tmp_name'])) {
                move_uploaded_file($_FILES['photo']['tmp_name'], $uploads_dir . $total);
            }
            ajouter_produit_function($bd);
        };

        //supprimer
        if ($_GET['action'] == "supprimer") {
            $requete = "select * from produit";
            $resultat = mysqli_query($bd, $requete);
            while ($ligne = mysqli_fetch_array($resultat)) {
                $cocher = 'chk' . $ligne['idProduit'];
                if (isset($_POST[$cocher])) {
                    if ($_POST[$cocher]) {
                        $requete2 = "delete from produit where idProduit = $ligne[idProduit]";
                        $resultat2 = mysqli_query($bd, $requete2);
                        var_dump($requete2);
                    }
                }
            }
        }
        //ajouter autre action ici
    }
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
    mysqli_query($bd, $sql);
    // pour reset le compteur de la bd
    //set @autoid :=0; 
    //update produit set idProduit = @autoid := (@autoid+1);
    //alter table produit Auto_Increment = 1;

};

function supp($bd)
{
    $requete = "select * from produit";
    $resultat = mysqli_query($bd, $requete);
    while ($ligne = mysqli_fetch_array($resultat)) {

        echo "<tr>" . "<td>" . "<input type=checkbox name='chk$ligne[idProduit]'>" . "</td>",
        "<td>" . $ligne["nomProduit"] . "</td>",
        "<td>" . $ligne["prix"] . "</td>",
        "<td>" . $ligne["quantite"] . "</td>",
        "<td>" . $ligne["format"] . "</td>",
        "<td>" . $ligne["fournisseur"] . "</td>",
        "<td>" . $ligne["description"] . "</td>" . "</tr>";
    }
}

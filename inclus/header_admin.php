<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../librairies/function.js"></script>
    <link rel="icon" href="./image/bonbon.ico">
    <PHP>
        <link rel="stylesheet" type="text/css" href="./css/fuck.css">
</head>
<PHP>
    <title>M. BONBON</title>
    </head>

    <body>
        <script type="text/javascript">
            var ladate = new Date()
            var options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            var aujourdhui = ladate.toLocaleDateString("fr-FR", options);
            <?php $abc = "<script>document.write(aujourdhui)</script>" ?>
        </script>
        <div class="container">
            <img src="image/bonbon2.png" alt="" width="100%">
            <nav class="navbar navbar-expand-md navbar-light ">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><b>M. BONBON (Admin)</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Ajouter_Produit.php">Ajouter Produit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Modifier.php">Modifier Produit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="supprimerProduit.php">Supprimer Produit</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <h5 align="center"><?php echo $abc; ?> <img src="./image/272763019_1152288498910085_8983358321687026070_n__1_-removebg-preview.png" alt="" width="20px" height="20px" z></h5>
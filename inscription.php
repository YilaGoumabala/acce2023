<html>


<head>
    <title>
        Banniere
    </title>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fichier.css">

    <style>
        body {
            background-image: url("u.jpg");


            width: 100%;
            color: #fff;
        }
    </style>

</head>

<body>
    <section>
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center" style="color: black;">
                    <h1 id="cc"> </h1>
                </div>
                <div class="col-12">
                    <nav class="navbar bg-dark">
                        <a href="index.php" class="nav-link text-white">Accueil</a>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="inscription.php">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="revue.php">Revue</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="autres.php">Autres</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12" style="background-color: white;color: black;">
                    <form action="post">
                        <div class="form-group align-center">
                            <label for="name"> Nom </label>
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name"> Prenom</label>
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="date"> Date de Naissance </label>
                            <input type="date" id="date" class="form-control">
                            <label for="Sexe"> Sexe</label>
                            <input type="sexe" id="sexe" name="sexe" class="form-control">
                            <label for="Poids"> Poids </label>
                            <input type="number" name="Poids" id="Poids" class="form-control">
                            <label for="Taille "> Taille</label>
                            <input type="number" name="Taille" id="Taille" class="form-control">
                            <label for="Diplome"> Diplome</label>
                            <input type="text " name="Diplome" id="Diplome" class="">
                            <label for="Commentaire">Commentaire</label>
                            <input type="text" name="Commentaire" id="Commentaire">

                        </div>
                        <button type="submit" class="btm btm-default"> Submit</button>
                    </form>
                </div>

            </div>

        </div>
    </section>
</body>
<footer>
    <div class=" bg-dark  container  text-md-left">
        <div class="row  text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">www.uahb.sn</h5>
            </div>
        </div>

    </div>

</footer>
<script>
    var aText = new Array(
        "BIENVENUE SUR NOTRE PAGE",
        "BIENVENUE SUR NOTRE PAGE"
    );
    var iSpeed = 100; // time delay of print out
    var iIndex = 0; // start printing array at this posision
    var iArrLength = aText[0].length; // the length of the text array
    var iScrollAt = 20; // start scrolling up at this many lines

    var iTextPos = 0; // initialise text position
    var sContents = ''; // initialise contents variable
    var iRow; // initialise current row

    function typewriter() {
        sContents = ' ';
        iRow = Math.max(0, iIndex - iScrollAt);
        var destination = document.getElementById("cc");
        console.log(destination)
        while (iRow < iIndex) {
            sContents += aText[iRow++] + '<br />';
        }
        destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos);
        if (iTextPos++ == iArrLength) {
            iTextPos = 0;
            iIndex++;
            if (iIndex != aText.length) {
                iArrLength = aText[iIndex].length;
                setTimeout("typewriter()s", 500);
            }
        } else {
            setTimeout("typewriter()", iSpeed);
        }
    }


    typewriter();
</script>

</html>
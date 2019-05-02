<!DOCTYPE html>


<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style2.css" />
        <title>Filtre entreprise</title>
    </head>

    <body>

        <header>
            <h1>Formulaire filtre entreprise</h1>
            <p>Comment est votre candidat parfait ?</p>

        </header>
        <section>
                
            <form method="post" action="traitement2bdd.php">

                <p><label for="majeure">Majeure: </label>
                    <select name="majeure">
                        <option value="informatique">Informatique</option>
                        <option value="cybersecurite">Cybersécurité</option>
                        <option value="energie">Energie</option>
                        <option value="urbaniot">Urban IOT</option>
                        <option value="mecatronique">Mécatronique</option>
                        <option value="bigdata">Big Data</option>
                    </select></p>
                <p><label for="nb_annee">Année d'étude du candidat ? </label>
                    <select name="nb_annee">
                        <option value="un">1ère année</option>
                        <option value="deux">2ème année</option>
                        <option value="trois">3ème année</option>
                        <option value="quatre">4ème année</option>
                        <option value="cinq">5ème année</option>
                    </select></p>
                <p><input type="submit" value="Envoyer" /></p>
            </form>

        </section>


        <footer>
            <p>Crée par Estelle DESCROIX et Elise GLADE</p>
        </footer>

    </body>

</html>
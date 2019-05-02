<!DOCTYPE html>


<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style2.css" />
        <title>Formulaire étudiant</title>
    </head>

    <body>

    	<header>
    		<h1>Un formulaire ! Un stage !</h1>
    		<p>Remplissez le formulaire, afin d'être présent dans notre base de données et avoir une chance de vous faire contacter par une entreprise !</p>

            <div class="logo-esme">
                <img src="esme.png" alt="logo-esme"  />
            </div>

    	</header>
    	<section>
    		    
    		<form method="post" action="traitement.php">
    			<p><label for="nom">Nom: </br></label><input type="text" name="nom" required /></p>
    			<p><label for="prénom">Prénom: </br></label><input type="text" name="prenom" required/></p>
    			<p><label for="mail">Adresse mail: </label><input type="text" name="mail" required/></p>
    			<p><label for="experiences">Expériences: </label><textarea type="text" name="experiences" required></textarea></p>
    			<p><label for="formation">Formation: </label><textarea type="text" name="formation" required></textarea></p>
    			<p><label for="majeure">Majeure: </label>
    				<select name="majeure">
	    				<option value="informatique">Informatique</option>
	    				<option value="cybersecurite">Cybersécurité</option>
	    				<option value="energie">Energie</option>
	    				<option value="urbaniot">Urban IOT</option>
	    				<option value="mecatronique">Mécatronique</option>
	    				<option value="bigdata">Big Data</option>
    			    </select></p>
    			<p><label for="nb_annee">En quelle année êtes-vous ? </label>
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

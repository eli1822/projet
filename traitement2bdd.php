<!DOCTYPE html>


    <head>
        <meta charset="utf-8" />
        <title>Résultats</title>
    </head>

    <header>

    </header>

    <body>
    
		<?php

		try
		{
		    $majeure_d= $_POST['majeure'];
		    $nb_annee=$_POST['nb_annee'];
		    $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'asmb78');

		}

		catch(Exception $e)
		{
		    
		        die('Erreur : '.$e->getMessage());
		}

		$reponse = $bdd->query("SELECT * FROM candidat WHERE majeure_c='".$majeure_d."' AND nb_annee_c='".$nb_annee."'");

		echo "Vous avez choisi les filtres: ", $majeure_d, " et année numéro ", $nb_annee;
		while ($donnees = $reponse->fetch())
		{

		?>
		    <p>

		    <strong>Voici le candidat n°<?php echo $donnees['id']; ?></strong><br /><br />
		    <label for="nom">Nom: </label><br />
		    <?php echo $donnees['nom']; ?><br /><br />
		    <label for="prenom">Prénom: </label><br />
		    <?php echo $donnees['prenom']; ?><br /><br />
		    <label for="mail">Adresse email: </label><br />
		    <?php echo $donnees['mail']; ?><br /><br />
		    <label for="experience">Expériences: </label><br />
		    <?php echo $donnees['experience']; ?><br /><br />
		    <label for="formation">Formation: </label><br />
		    <?php echo $donnees['formation']; ?><br /><br />

		    </p>

		<?php

		}

		$reponse->closeCursor(); 

		?>
	</body>

	<footer>

	</footer>




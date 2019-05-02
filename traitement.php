

  	<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'asmb78');
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}

		echo $_POST['nom'];
		echo $_POST['prenom'];
		echo $_POST['mail'];
		echo $_POST['experiences'];
		echo $_POST['formation'];
		echo $_POST['majeure'];
		echo $_POST['nb_annee'];
			
		$req = $bdd->prepare('INSERT INTO candidat(nom, prenom, mail, experience, formation, majeure_c, nb_annee_c) VALUES(:b,:e,:r,:t,:y,:p, :a)');
		$req->execute(array('b'=>$_POST['nom'],'e'=>$_POST['prenom'],'r'=>$_POST['mail'],'t'=>$_POST['experiences'], 'y'=>$_POST['formation'], 'p'=>$_POST['majeure'], 'a'=>$_POST['nb_annee']));
		

	?>
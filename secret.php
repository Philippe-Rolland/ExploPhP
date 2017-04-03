<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès au serveur central de la NASA</title>
    </head>

    <body>

    	<?php
		// Testons si le mot de passe a bien été envoyé et si c'est bien du texte

		echo '<p>'. $_POST['mdp'] . '</p>';
		if ($_POST['mdp'] != "") //AND is_string($_POST['mdp']) == 0)
		{

			echo "Le mot de passe a été bien tranféré <br>" ;
			echo "il vaut : " . $_POST['mdp'] . "</br>" ;

			if ($_POST['mdp']!='kangourou')
			{
				echo "Vous êtes bien sur la page de la préfecture </br>";
				echo "Le mot de passe : \"DFRT5-45Y4I-7GHE5\" sera changé dynamiquement tous les huit jours. Notez le !";		 
			}
			else
			{
				
				echo "Vous êtes autorisé à entrer dans mon site";
			}
		}
		else
		{

			echo "Vous devez entrer un mot de passe";

		}

		?>



    </body>
</html>

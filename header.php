<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.dd ul{
			display: flex;
			flex-direction: row;
			justify-content: space-around;
		}
		a:hover{
			background-color:red;
			color: white;

		}
		.dd li{
			height: 32px; 
			padding: 5px; 
			color: white;
			list-style-type: none;
		}
		.dd li a{
			text-decoration: none;
			margin: auto;
			font-weight: bold;
		}
		header{
			background-color: grey;
		}
	</style>
</head>
<body>
	<?php 	
			try{
				$bdd=new PDO('mysql:host=localhost;dbname=photocopie','root','');
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getmessage());
			}
			
		?>
	<div class="dd" method="POST" action="authentification.php">
			<nav>
			<ul>
				<li><a href="acceuil.php">ACCUEIL</a></li>
				<li><a href="inscription.php">INSCRIPTION</a></li>
				<li><a href="enregistrer.php">ENREGISTRER UNE SORTIE</a></li>
				<li><a href="imprimante.php">IMPRIMANTE</a></li>
			</ul>
		</nav>
		</div>
		
</body>
</html>
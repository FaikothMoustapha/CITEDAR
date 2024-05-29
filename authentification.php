<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form{
			border 	: solid;
			height: 300px;
			width: 350px;
			padding: 20px;
			background-color: rgb(219,183,255);
			border-radius: 20px;
			box-shadow: 4px 4px 4px black;

		}
		.me{
			display: flex;
			justify-content: center;
			align-items: center;
			
		
		}
		label {
            font-weight: bold;
        }
        .be {
            width: 200px;
            margin-left: 10px;
            border:none;
            text-align:center;
            padding:3px;
            box-shadow: inset 3px 3px 3px black;
        }
        .re{
        	margin: ;
            display: flex;
            justify-content: space-between;
        }
        a{
        	text-decoration: none;
        }
        .so{
        	border-style:  solid;
        	width: 350px;
        	height: 50px;
        }
        .co{
        	
        	display: flex;
			justify-content: center;
			align-items: center;
        }
        .vv{
        	background-color: green;
        	color: white;
        }
        .pp{
        	background-color: rgb(255,83,0);
        	color: white;
        }
        .si{
        	margin: ;
            display: flex;
            justify-content: space-between;
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
		<div class="me">
		<form method="POST">
		<h2>ENREGISTREMENT DE L'ETUDIANT</h2><br><br>
		<div class="re">
		<label>EMAIL:</label>
		<input type="email" name="email" class="be" required>
		</div><br><br>
		<div class="re">
		<label>MOT DE PASSE:</label>
		<input type="password" name="mdp" class="be" required></div><br><br>
		<div class="si">
		<input class="pp" type="submit" name="authentifier" value="S'AUTHENTIFIER" >
		</div>
	</form>
	</div><br><br>
	<?php 
		if (isset($_POST['authentifier'])) {
			$email = $_POST['email'];
			$password = $_POST['mdp'];
			$verifier = $bdd->prepare('SELECT COUNT(*) FROM utilisateur WHERE email=? AND password=?');
			$verifier->execute(Array($email,$password));
			$count = $verifier->fetchColumn();
			if ($count>0) {
				header("Location: acceuil.php");
			}else{
				echo "mot de passe incorrect";
			}}
			?>
        
        
  
        
</body>
</html>
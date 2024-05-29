<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form{
			border 	: solid;
			height: 350px;
			width: 350px;
			padding: 20px;
			background-color: rgb(219,183,255);
			border-radius: 20px;
			box-shadow: 4px 4px 4px black;
			margin-top: 10px;

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
		<?PHP include "header.php";?>
	<div class="me">
		<form >
		<h2>INSCRIPTION</h2><br><br>
		<div class="re">
		<label>NOM:</label>
		<input type="text" name="nom" class="be" required></div><br><br>
		<div class="re">
		<label>EMAIL:</label>
		<input type="email" name="email" class="be" required></div><br><br>
		<div class="re">
	    <label>PASSWORD:</label>
		<input type="password" name="mdp" class="be" required></div><br><br>
		<div class="re">
	    	<tr>
				<td>PROFIL: </td>
				<input type="radio" value="PDG" name="profil"><td >PDG:</td>
				<input type="radio" value="secretaire" name="profil"><td>Sécrétaire:</td>
			</tr>
	    </div><br><br>
		<div class="si">
		<input class="pp" type="submit" name="inscrire" value="s'inscrire" >	
		</div>
	</form>
	<?php 
		if (isset($_GET['inscrire'])) {
    			
 					$rep = $bdd->prepare('INSERT INTO utilisateur(nom,email,password,profil) VALUES(?,?,?,?)');
  					$rep->execute(Array($_GET['nom'], $_GET['email'],$_GET['mdp'],$_GET['profil']));
  		}	
	 ?>
</body>
</html>
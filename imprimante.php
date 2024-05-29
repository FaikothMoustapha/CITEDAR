<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form{
			border 	: solid;
			height: 500px;
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
	<?PHP include "header.php";?>
	<div class="me">
		<form >
		<h2>ENREGISTREMENT D'UNE IMPRIMANTE</h2><br><br>
		<div class="re">
		<label>NOM IMPRIMANTE:</label>
		<input type="text" name="nom" class="be" required></div><br><br>
		<div class="re">
		<label>Prix photocopie blanc noir:</label>
		<input type="text" name="pbn" class="be" required></div><br><br>
		<div class="re">
	    <label>Prix photocopie couleur:</label>
		<input type="text" name="ppc" class="be" required></div><br><br>
		<div class="re">
	    <label>Prix impression blanc noir:</label>
		<input type="text" name="ibn" class="be" required></div><br><br>
		<div class="re">
	    <label>Prix impression couleur:</label>
		<input type="text" name="pic" class="be" required></div><br><br>

		<div class="si">
		<input class="pp" type="submit" name="enregistrer" value="ENREGISTRER" >	
		</div>
	</form>
	<?php 
		if (isset($_GET['enregistrer'])) {
    			
 					$rep = $bdd->prepare('INSERT INTO imprimante(nomimp,prixphbn,prixphcoul,priximprbn,priximprcoul) VALUES(?,?,?,?,?)');
  					$rep->execute(Array($_GET['nom'], $_GET['pbn'],$_GET['ppc'],$_GET['ibn'],$_GET['pic']));
  		}	
	 ?>
	</div>
</body>
</html>
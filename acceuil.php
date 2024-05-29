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
	</style>
	
</head>
<body>
	<?PHP include "header.php";?>
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
		<form >
		<h2>POINT DU JOUR</h2><br><br>
		<div class="re">
		<label>NOM IMPRIMANTE:</label>
		<select name="codFil" class="be">
				<?php 
					$reponse = $bdd->query('SELECT nomimp FROM imprimante');
                     	while ($donnee = $reponse->fetch())
                        {
                ?>
                <option>
             	 	<table>
           				<tr>
                   	 		<td><?php echo $donnee['nomimp']; ?></td>
                  		</tr>
       	 			</table>
           		</option>
                   	<?php
                    }
                    
				    ?>
				
				
			</select>
		</div><br><br>
		<div class="re">
		<label>Compt photocopie blanc noir:</label>
		<input type="text" name="phbn" class="be" required></div><br><br>
		<div class="re">
	    <label>Compt photocopie couleur:</label>
		<input type="text" name="phc" class="be" required></div><br><br>
		<div class="re">
	    <label>Compt impression blanc noir:</label>
		<input type="text" name="impbn" class="be" required></div><br><br>
		<div class="re">
	    <label>Compt impression couleur:</label>
		<input type="text" name="impc" class="be" required></div><br><br>

		<div class="si">
		<input class="pp" type="submit" name="enregistrer" value="ENREGISTRER" >	
		</div>
	</form>
	<?php 
		if (isset($_GET['enregistrer'])) {
    			
 					$rep = $bdd->prepare('INSERT INTO poi(nomimp,prixphbn,prixphcoul,priximprbn,priximprcoul) VALUES(?,?,?,?,?)');
  					$rep->execute(Array($_GET['nom'], $_GET['pbn'],$_GET['ppc'],$_GET['ibn'],$_GET['pic']));
  		}	
	 ?>
	</div>



	<label>codFil:</label>
			
</body>
</html>
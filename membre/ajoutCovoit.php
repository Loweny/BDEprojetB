<html>
<head>
		<!-- titre de la page -->
		<title>BDE DLS Covoiturages</title>
		<!-- type d'encodage de la page -->
		<meta charset="utf-8" />
		<!-- taille et échelle de la page -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
		<!-- liens avec les fichiers css de bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet"> 
		<link rel="stylesheet" href="../styles/style.css">
		<!-- par défaut les tableaux occupent 100% de la page; le width fixe la largeur à 600 pixels -->
		<style> .boite {border: 2px solid #dea} </style>
	</head>
<body>
<div id=conteneur class="boite">
	<div id=contenu>
		<?php 
		// affichage de la liste des covoiturages 
			include("../include/_inc_parametres.php"); 
			include("../include/_inc_connexion.php");
			include("../include/dateFrancais.php");
			include('../include/head.php');
			include('../include/menu.php');
		?>
	
			
    <form method="post" action="AjoutCotraitement.php" enctype="multipart/form-data" name="exemple" id="form">
	
   		<input type="hidden" name="noMembre" value="<?= $_SESSION['numMembre'] ?>">
        <table>
			<legend> Informations :</legend>
            <tr>
		        <!--<td>Prix <input type="text" name="prix" placeholder="Prix" class="form-control" required ></td>-->
                <td>Ville de départ<input type="text" name="villDep" placeholder="Ville de départ" class="form-control" required></td>
                <td>Point de départ<input type="text" name="ptDep" placeholder="Point de départ" class="form-control" required></td>			
				<td>Jour de départ<input type="date" name="jDep" placeholder="Jour de départ" class="form-control" required></td>				
				<td>Heure de départ<input type="time" name="hDep" placeholder="Heure de départ" class="form-control" required></td>
			</tr>
			
			<tr>
				<td>Ville d'arrivée<input type="text" name="villFin" placeholder="Ville d'arrivée" class="form-control" required></td>				
                <td>Point de d'arrivée<input type="text" name="ptAriv" placeholder="Point de d'arrivée" class="form-control" required></td>					
				<td>Jour d'arrivée<input type="date" name="jAriv" placeholder="Jour d'arrivée" class="form-control" required></td>								
				<td>Heure d'arrivée<input type="time" name="hAriv" placeholder="Heure d'arrivée" class="form-control" required></td>
				
			</tr>
			<tr>
				<td>Nombre de place<input type="text" name="place" placeholder="Ville d'arriver" class="form-control" required></td>			
                <td>Place des bagages<select name="bag" size="1" placeholder="Point de d'arriver" class="form-control" required>
										<option>Petit</option>
										<option>Moyen</option>
										<option>Grand</option>
									</select>
					
				<td>Type de voiture<input type="text" name="voiture" placeholder="Type de voiture" class="form-control" required></td>				
			
				<td>Couleur de la voiture <input type="text" name="color" placeholder="Couleur de la voiture" class="form-control" required></td>
				
			</tr>
			<tr>
				<td>Description<textarea name="desc" placeholder="Description" class="form-control" rows="1" cols="20" required></textarea></td>
				
                <td>Prix<input type="number" step="0.01" name="prix" placeholder="Prix" class="form-control" required></td>		
            </tr>
        </table>
		
    

	<!-- zone de saisie de type bouton -->
	<input type="submit" value="Enregistrer" name="envoyer" class="btn btn-primary btn-sm"> &nbsp;
	<input type="reset" value="Annuler" class="btn btn-primary btn-sm"><br/><br/>
	</div>
	<?php include('../include/footer.php'); ?>
</div>

<!-- Obligatoirement avant la balise de fermeture de l'élément body  -->
	<!-- Intégration de la libraire jQuery -->
	<script src="bootstrap/js/jquery.js"></script>
	<!-- Intégration de la libraire de composants du Bootstrap -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
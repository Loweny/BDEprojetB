<?php
    include("../include/_inc_parametres.php"); 
    include("../include/_inc_connexion.php");
	include('../include/head.php');

	if ( empty ($_POST ["villDep"]) == true) $villDep = ""; else $villDep = $_POST ["villDep"];
	if ( empty ($_POST ["ptDep"]) == true) $ptDep = ""; else $ptDep = $_POST ["ptDep"];
	if ( empty ($_POST ["jDep"]) == true) $jDep = ""; else $jDep = $_POST ["jDep"];
	if ( empty ($_POST ["hDep"]) == true) $hDep = ""; else $hDep = $_POST ["hDep"];
	if ( empty ($_POST ["villFin"]) == true) $villFin = ""; else $villFin = $_POST ["villFin"];
	if ( empty ($_POST ["ptAriv"]) == true) $ptAriv = ""; else $ptAriv = $_POST ["ptAriv"];
	if ( empty ($_POST ["jAriv"]) == true) $jAriv = ""; else $jAriv = $_POST ["jAriv"];
	if ( empty ($_POST ["hAriv"]) == true) $hAriv = ""; else $hAriv = $_POST ["hAriv"];
	if ( empty ($_POST ["place"]) == true) $place = ""; else $place = $_POST ["place"];
	if ( empty ($_POST ["bag"]) == true) $bag = ""; else $bag = $_POST ["bag"];
	if ( empty ($_POST ["voiture"]) == true) $voiture = ""; else $voiture = $_POST ["voiture"];
	if ( empty ($_POST ["color"]) == true) $color = ""; else $color = $_POST ["color"];
	if ( empty ($_POST ["desc"]) == true) $desc = ""; else $desc = $_POST ["desc"];		
    if ( empty ($_POST ["prix"]) == true) $prix = ""; else $prix = $_POST ["prix"];
    if ( empty ($_POST ["noMembre"]) == true) $noMembre = ""; else $noMembre = $_POST ["noMembre"];
    

     $cnx->exec("INSERT INTO covoiturage (numMembre,etat,prix, description, villeDepart, villeArrive, pointDepart, pointArrive, heureDepart,heureArrive,jourDepart,jourArrive,nbPlaces,placeBagage,voiture,couleur)
        VALUES ($noMembre,0,'$prix', '$desc', '$villDep', '$villFin', '$ptDep', '$ptAriv', '$hDep','$hAriv','$jDep','$jAriv',$place,'$bag','$voiture','$color')" );
        
      echo  "INSERT INTO covoiturage (numMembre, etat, prix, description, villeDepart, villeArrive, pointDepart, pointArrive, heureDepart,heureArrive,jourDepart,jourArrive,nbPlaces,placeBagage,voiture,couleur)
    	VALUES ($noMembre,0,'$prix', '$desc', '$villDep', '$villFin', '$ptDep', '$ptAriv', '$hDep','$hAriv','$jDep','$jAriv',$place,'$bag','$voiture','$color')";

?>
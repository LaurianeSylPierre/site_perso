<?php

    if(empty($_POST)){
        $nom = $mail = $tel = $sujet = $message = "";
        include 'view/template/formulaire.php';
    }
    else{
        require('../model/dbh.php');
        require('class.formulaire.php');
        $formulaire = new Formulaire($conn);
        
        $formulaire->verifFormulaire();
    }

?>

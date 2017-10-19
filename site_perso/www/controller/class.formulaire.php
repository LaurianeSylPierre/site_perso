<?php

    /**
     *
     */
    class Formulaire
    {

        private $db;

        public function __construct($conn)
        {
            $this->db=$conn;
        }

        public function verifFormulaire(){
            $nom = $_POST['nom'];
            $mail = $_POST['mail'];
            $tel =  $_POST['tel'];
            $sujet =  $_POST['sujet'];
            $message =  $_POST['message'];

            if(empty($nom) || empty($mail) || empty($tel) || empty($sujet) || empty($message)){
                $messageErreur = '<div class="col-xs-12 text-center bandeau"></div>Veuillez vous assurer que vous avez bien rempli tous les champs.';
                echo $messageErreur;
                include('view/template/formulaire.php');
            }
            else{
                $to = 'laurianepierre@outlook.fr';
                $trueMessage = "<html><div>".$message."</div><div>Numéro de téléphone : ".$tel."</div><div>Mail : ".$mail."</div><div>Nom et prénom : ".$nom."</div></html>";
                $headers = 'From: '.$nom.' <'.$mail.'>' . "\r\n";
                $headers .=  'Reply-To:'.$mail. "\r\n" ;
                $headers .=  'X-Mailer: PHP/' . phpversion();
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .=  "Content-Type: text/html; charset=utf-8 \r\n";
                if(mail($to, $sujet, $trueMessage, $headers)){
                    $reponse = '<div class="col-xs-12 text-center bandeau">Votre message a bien été envoyé, je vous répondrai dans les plus brefs délais.</div>';
                }
                else{
                    $reponse = '<div class="col-xs-12 text-center bandeau">Une erreur est survenue, merci de réessayer dans quelques instants.</div>';
                }

                echo $reponse;
            }
        }

    }


 ?>

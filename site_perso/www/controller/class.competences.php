<?php

/**
 *
 */
class Competences{

    private $db;

    public function __construct($conn)
    {
        $this->db=$conn;
    }

    public function technologies(){
        $tech=$this->db->prepare("SELECT * FROM technologies");
        $tech->execute();
        $allTech=$tech->fetchAll(PDO::FETCH_ASSOC);

        foreach($allTech as $row){
            $technologie=$row['nom_tech'];
            $img_tech=$row['img_tech'];

            include('view/template/technologies.php');
        }
    }

}


?>

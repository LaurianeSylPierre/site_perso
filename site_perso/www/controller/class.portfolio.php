<?php

/**
 *
 */
class Portfolio
{

    private $db;

    public function __construct($conn)
    {
        $this->db=$conn;
    }

    public function portfolio(){
        $req=$this->db->prepare("SELECT * FROM projets ORDER BY id_projet ASC");
        $req->execute();
        $reqAll=$req->fetchAll(PDO::FETCH_ASSOC);

        foreach($reqAll as $row){
            $name=$row['nom_projet'];
            $url=$row['url_projet'];
            $tech=$row['technologies'];
            $img=$row['img_projet'];
            include 'view/template/portfolio.php';
        }
    }
}


?>

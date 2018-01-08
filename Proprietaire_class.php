<?php

namespace location\dao;

use \PDO ;

class Proprietaire{
    var $id;
    var $numPiece;
    var $nom;
    var $tel;
    private $bdd;

    private function getConnexion(){
        try{
            if($this->bdd == null){
                $this->bdd = new PDO('mysql:host=localhost;dbname=BDlocation;charset=utf8', 'root', 'Chanbaek27',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
            }       
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function addProprietaire()
    {
        $this->getConnexion();
        // requete a executer
       $sql = "insert into Proprietaire 
                  values(null, :numPiece, :nom, :tel)";
        // preparation de la requete
        $req = $this->bdd->prepare($sql);
        //execution de la requete
        $data = $req->execute(
                array(
                  'numPiece'=>$this->numPiece,
                  'nom'=>$this->nom,
                  'tel'=>$this->tel
                )           );
        return $data;
    }

    function find()
    {
        $this->getConnexion();
    $req = $this->bdd->query("SELECT * FROM Proprietaire WHERE numPiece='$numPiece'");
    return $req;
    }
    function update()
    {
        $this->getConnexion();
        $req= $this->bdd->prepare("UPDATE Proprietaire SET tel='$tel WHERE numPiece='$numPiece'");
        $data =$req->execute(
            array(
            'tel'=>$this->$tel,
    )
        );

        return $data;
        
    }

    function allProprietaire()
    {
        $this->getConnexion();
        // requete a executer
       $sql = "select * from Proprietaire";
        // preparation de la requete
        $donnees = $this->bdd->query($sql);
        return $donnees;
    }

}

<?php
abstract class Driver{
    protected $base;

    public function __construct($base){
        $this->base = $base;
    }

    public function listeCategorie(){
        $sql = "SELECT * FROM categorie";
        $res = $this->base->prepare($sql);
        $res->execute();
        $rows = $res->fetchAll(PDO::FETCH_OBJ);
        $res->closeCursor();
        $donnees=[];
        $compteur=0;
        foreach($rows as $row){
            $cat = new Categorie();
            $cat->setId_cat($row->id_cat);
            $cat->setNom_cat($row->nom_cat);
            $donnees[$compteur++] = $cat;
        }
        return $donnees;
    }
}
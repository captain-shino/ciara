<?php
require_once('./models/Driver.php');

class BackDriver extends Driver{

    public function __construct($base)
    {
        parent::__construct($base);
    }

    // Ajouter une catégorie
    public function addCategorie (Categorie $cat){
        $sql = "INSERT INTO categorie (nom_cat) VALUES (?)";
        
        $res = $this->base->prepare($sql);
        $res->execute([$cat->getNom_cat()]);
        if($res){
            return $this->base->LastInsertId();
        }
    }

    // Supprimer une catégorie
    public function deleteCategorie (Categorie $cat){
        $sql = "DELETE FROM categorie WHERE id_cat=?";
        $res = $this->base->prepare($sql);
        $res->execute([$cat->getId_cat()]);
    }

    // Editer une catégorie
    public function editCategorie($id_cat){
        $sql = "SELECT * FROM categorie WHERE id_cat = ?";
        $res = $this->base->prepare($sql);
        $res->execute([$id_cat]);
        $data = $res->fetch(PDO::FETCH_OBJ);

        $cat = new Categorie();

        $cat->setId_cat($data->id_cat);
        $cat->setNom_cat($data->nom_cat);

        return $cat;
    }

    // Modifier une catégorie
    public function updateCat(Categorie $cat){
        $sql = "UPDATE categorie SET id_cat=?, nom_cat=?  WHERE id_cat=".$cat->getId_cat();
        $tabCategorie=[$cat->getId_cat(), $cat->getNom_cat()];

        $res=$this->base->prepare($sql);
        $res->execute($tabCategorie);
    }
}
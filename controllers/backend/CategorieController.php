<?php
require_once('./communs/connexion.php');
require_once('./models/backend/BackDriver.php');
require_once('./models/Categorie.php');


class CategorieController{

    private $driver;

    public function __construct($base)
    {
        $this->driver= new BackDriver($base);
    }

    // Afficher liste catégories
    public function getCategorie(){
        $data = $this->driver->listeCategorie();
        require_once('./views/backend/affichCat.php');
    }

    // Ajouter nouvelle catégorie
    public function ajoutCategorie(){
        if(isset ($_POST['soumettre']) && isset($_POST['categorie']) && strlen($_POST['categorie'])>=3){
            $categorie = trim(htmlspecialchars(addslashes($_POST['categorie'])));

            $cat = new Categorie();

            $cat->setNom_cat($categorie);
            $nb = $this->driver->addCategorie($cat);

            if($nb != 0){
                header('location:index.php?action=list_cat');
            }else{
                echo "Echec de l'ajout de nouvelle catégorie";
            }  
        }
        require_once('./views/backend/ajoutCat.php');
       // else{
       //     header('location:index.php?action=ajout_cat');
       // }
    }

    // Supprimer une catégorie
    public function supCategorie($id_cat){
        $cat = new Categorie();
        $cat->setId_cat($id_cat);
        $this->driver->deleteCategorie($cat);
        header('location:index.php?action=list_cat');
    }

    // Editer une catégorie
    public function editCategorie($id_cat){
        if(isset($_POST['soumettre']) && !empty($_POST['id_cat'])){
            $id_cat = (int)trim(addslashes(htmlentities($_POST['id_cat'])));
            $nom_cat = trim(addslashes(htmlentities($_POST['nom_cat'])));

            $cat = new Categorie();

                $cat->setId_cat($id_cat);
                $cat->setNom_cat($nom_cat);

                $this->driver->updateCat($cat);
                header('location:index.php?action=list_cat');
        }
        $data = $this->driver->editCategorie($id_cat);
        require_once('./views/backend/editCat.php');
    }
    

}
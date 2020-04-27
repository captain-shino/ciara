<?php
require_once('./communs/connexion.php');
require_once('./controllers/backend/CategorieController.php');

class Router{

    private $ctrlCat;

    public function __construct($base)
    {
        $this->ctrlCat = new CategorieController($base);
    }

    public function reqUrl(){
        
        if(isset($_GET['action'])){
            if($_GET['action']=='list_cat'){
                $this->ctrlCat->getCategorie();

            }elseif($_GET['action']=='ajout_cat'){      
                $this->ctrlCat->ajoutCategorie();
            
            }elseif($_GET['action']=='sup_cat'){ 
                if(isset($_GET['id_cat'])){
                    $id_cat= intval(htmlspecialchars($_GET['id_cat']));
                    $this->ctrlCat->supCategorie($id_cat);
                }

            }elseif($_GET['action']=='edit_cat'){ 
                if(isset($_GET['id_cat'])){
                    $id_cat = intval($_GET['id_cat']);
                    if($id_cat!=0){
                        if($_SERVER['REQUEST_METHOD']==='POST'){
                            $this->ctrlCat->editCategorie($id_cat);
                        }
                        $this->ctrlCat->editCategorie($id_cat);
                    }
                }
            }
        }
    }
}
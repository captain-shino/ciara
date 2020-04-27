<?php ob_start(); ?>

<h2>Editer la catégorie</h2>

<form action="" method="post" enctype="multipart/form-data">
<div>
    <input type="hidden" name="id_cat" value="<?=$data->getId_cat() ?>">
    <label for="categorie">Nom</label>
    <input type="text" name="nom_cat" id="categorie" value="<?=$data->getNom_cat() ?>">
</div>
<button type="submit" name="soumettre">Mise à jour</button>
</form>


<?php 
    $contenu = ob_get_clean();
    require_once('template.php');
?>
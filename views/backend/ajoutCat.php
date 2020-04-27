<?php ob_start(); ?>

<h2>Ajouter une nouvelle catégorie</h2>
<form action="" method="post">
    <div>
        <label for="categorie">Nouvelle catégorie</label>
        <input type="text" id="categorie" placeholder="Renseigner la nouvelle catégorie" name="categorie">
    </div>

    <button type="submit" name="soumettre">Ajouter</button>
</form>


<?php 
    $contenu = ob_get_clean();
    require_once('template.php');
?>
<?php ob_start(); ?>

<h2>Liste des catégories</h2>
<a href="./index.php?action=ajout_cat">Ajouter</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id Catégorie</th>
            <th>Nom Catégorie</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach($data as $d){

        ?>
      <tr>
        <td><?=$d->getId_cat() ?> </td>
        <td> <?=$d->getNom_cat() ?> </td>
        <td> <a href="./index.php?action=edit_cat&id_cat=<?=$d->getId_cat()?>"> Editer </a>  </td>
        <td> <a onclick="return confirm('Etes-vous sûr de vouloir supprimer?')" href="./index.php?action=sup_cat&id_cat=<?=$d->getId_cat()?>"> Supprimer  </a> </td>
      </tr>
        <?php
        }
        ?>  
    </tbody>
</table>




<?php 
    $contenu = ob_get_clean();
    require_once('template.php');
  ?>
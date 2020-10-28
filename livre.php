
<?php ob_start() ?>
ici le contenu de ma page listant les livres
<table class="table table-hover align-middle text-center" >
  <thead>
  <tr class="table-dark">
        <th >Image</th>
        <th >Titre</th>
        <th >Nombre de pages</th>
        <th colspan="2" >Actions</th>
    </tr>
  </thead>
  <tbody>
  <tr>
        <td class="align-middle"><img src="public/images/algo.png" width="60px;"></td>
        <td class="align-middle">Algorithmique selon H2PROG</td>
        <td class="align-middle">300</td>
        <td class="align-middle" ><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle text-center"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <tr>
        <td class="align-middle"><img src="public/images/virus.png" width="60px;"></td>
        <td class="align-middle">Le virus Asiatique</td>
        <td class="align-middle">200</td>
        <td class="align-middle text-center"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle text-center"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
  </tbody>
</table>

<?php
$titre = "Les livres de la bibliothèque";
$content = ob_get_clean();
require "template.php";
?>
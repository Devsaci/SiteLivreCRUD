
<?php 
require_once "Livre.class.php";
$l1 = new Livre(1,"Algorithmique selon H2PROG",300,"algo.png");
$l2 = new Livre(2,"Le virus Asiatique",200,"virus.png");
$l3 = new Livre(3,"La France du 19ème",100,"france.png");
$l4 = new Livre(4,"Le JavaScript Client",500,"JS.png");

ob_start() 
?>


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
    <tr>
        <td class="align-middle"><img src="public/images/france.png" width="60px;"></td>
        <td class="align-middle">Le virus Asiatique</td>
        <td class="align-middle">200</td>
        <td class="align-middle text-center"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle text-center"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <tr>
        <td class="align-middle"><img src="public/images/JS.png" width="60px;"></td>
        <td class="align-middle">Le virus Asiatique</td>
        <td class="align-middle">200</td>
        <td class="align-middle text-center"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle text-center"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
  </tbody>
</table>
<a href="" class="btn btn-success d-block">Ajouter</a>


<?php
$titre = "Les livres de la bibliothèque";
$content = ob_get_clean();
require "template.php";
?>
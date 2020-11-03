<?php
 ob_start() 
 ?>
 
ici le contenu de la page d'accueil

<?php
$titre = "Bibliothèque MGA";
$content = ob_get_clean();
require "template.php";
?>
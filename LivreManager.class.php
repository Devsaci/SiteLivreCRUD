<?php

class LivreManager{
    private $livres;

    public function ajoutLivre($livre){
        $this->livres[] = $livre;
    }
}
?>
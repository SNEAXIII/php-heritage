<?php

namespace App;

//La classe Patron = Employe + X
//La classe Employe est une generalisation de la classe Patron
class Patron extends Employe
{
    protected string $voiture;

    /**
     * @param string $prenom
     * @param string $nom
     * @param int $age
     * @param string $voiture
     */
    public function __construct(string $prenom, string $nom, int $age, string $voiture)
    {
        parent::__construct($prenom, $nom, $age,);
        $this->voiture = $voiture;
    }

    public function presenter(): string
    {
        return "Bonjour, je me nomme {$this->prenom} {$this->nom} et je suis le BOSS.";
    }

    public function seDeplace(): string
    {
        return "Je me déplace en $this->voiture.";
    }
}
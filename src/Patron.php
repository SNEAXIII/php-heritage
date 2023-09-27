<?php

namespace App;

//La classe Patron = Employe + X
//La classe Employe est une generalisation de la classe Patron
class Patron extends Personnel
{
    protected string $voiture;
    protected int $bonus;

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
        $this->bonus = 2000;
    }

    public function presenter(): string
    {
        return "Bonjour, je me nomme {$this->prenom} {$this->nom} et je suis le BOSS.";
    }

    public function seDeplace(): string
    {
        return "Je me déplace en $this->voiture.";
    }

    public function getSalaire(): float
    {
        return $this->salaireBase + $this->bonus;
    }
}
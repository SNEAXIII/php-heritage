<?php

namespace App;

//La classe Patron = Employe + X
//La classe Employe est une generalisation de la classe Patron
class Employe extends Personnel
{
    protected string $voiture;

    /**
     * @param string $prenom
     * @param string $nom
     * @param int $age
     */
    public function __construct(string $prenom, string $nom, int $age)
    {
        parent::__construct($prenom, $nom, $age,);
    }

    public function presenter(): string
    {
        return "Je m'appelle $this->prenom $this->nom et j'ai $this->age ans.";
    }

    public function getSalaire(): float {
        return $this->salaireBase;
    }
}
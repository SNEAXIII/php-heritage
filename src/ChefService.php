<?php
namespace App;

//La classe Patron = Employe + X
//La classe Employe est une generalisation de la classe Patron
class ChefService extends Employe
{
    protected string $service;

    /**
     * @param string $prenom
     * @param string $nom
     * @param int $age
     * @param string $service
     */
    public function __construct(string $prenom, string $nom, int $age, string $service)
    {
        parent::__construct($prenom, $nom, $age,);
        $this->service = $service;
    }
    public function presenter(): string
    {
        return "Bonjour, je me suis {$this->prenom} {$this->nom} et je m'occuppe du service {$this->service}.";
    }
}
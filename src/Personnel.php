<?php

namespace App;

abstract class Personnel
{
    protected string $prenom;
    protected string $nom;
    protected int $age;
    protected int $salaireBase;

    /**
     * @param string $prenom
     * @param string $nom
     * @param int $age
     */
    public function __construct(string $prenom, string $nom, int $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        $this->salaireBase = 2500;
    }
    public function getNomClasse():string {
        return (new \ReflectionClass($this))->getShortName();
    }
    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    abstract public function presenter(): string;
    abstract public function getSalaire(): float;
}
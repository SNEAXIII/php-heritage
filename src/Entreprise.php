<?php

namespace App;


class Entreprise
{
    protected string $nom;
    protected string $ville;
    /**
     * @var Personnel[]
     */
    protected array $employes;

    /**
     * @param string $nom
     * @param string $ville
     */
    public function __construct(string $nom, string $ville)
    {
        $this->nom = $nom;
        $this->ville = $ville;
        $this->employes = [];
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
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return array
     */
    public function getEmployes(): array
    {
        return $this->employes;
    }

    /**
     * @param array $employes
     */
    public function setEmployes(array $employes): void
    {
        $this->employes = $employes;
    }

    public function findPatron(): ?Patron
    {
        foreach ($this->employes as $employe) {
            if ($employe instanceof Patron) {
                return $employe;
            }
        }
        return null;
    }

    public function findAllSalaireBySalarie(): array
    {
        $result = [];
        foreach ($this->employes as $employe) {
            $result[] = [
                $employe->getNomClasse() => "{$employe->getPrenom()} {$employe->getNom()}",
                "salaire" => $employe->getSalaire()
            ];
        }
        return $result;
    }

    public function findAllByStatus(): array
    {
        $result = [];
        foreach ($this->employes as $employe) {
            $nomStatus = $employe->getNomClasse();
            if (!isset($result[$nomStatus])) {
                $result[$nomStatus] = [];
            }
            $result[$nomStatus][] = $employe;
        }
        return $result;
    }

    public function findMasseSalariale():int {
        $result = 0;
        foreach ($this->employes as $employe) {
            $result = $result + $employe->getSalaire();
        }
        return $result;
    }

    public function openCsv($path = "./csv/data.csv", $mode = "r"): string
    {
        return fopen($path, $mode);
    }

    public function addEmploye(Personnel $employe): void
    {
        // On cherche le patron. Peut etre null
        $patron = $this->findPatron();

        // On regarde si l'employé actuel est un patron
        $ifEstUnPatron = $employe instanceof Patron;

        // On verifie si l'entreprise possède un patron
        $ifPossedeUnPatron = isset($patron);

        // On regarde si l'employé actuel n'est un pas un patron et si l'entreprise ne possède pas déjà un patron
        $ifPeutAjouter = !($ifEstUnPatron && $ifPossedeUnPatron);

        if ($ifPeutAjouter) {
            $this->employes[] = $employe;
        } else {
            echo "Warning : Il exite deja un patron\n";
        }
    }

    /**
     * @return void
     */
    public function presenterEmploye(): void
    {
        echo "Voici les effectifs de l'entreprise $this->nom:\n";
        foreach ($this->employes as $employe) {
            // Utilisation du polymorphisme
            echo "{$employe->presenter()}\n";
        }
    }
}
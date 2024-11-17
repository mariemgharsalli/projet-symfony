<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $contenue = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $valeur = null;

    #[ORM\Column(length: 255)]
    private ?string $id_visiteur = null;

    #[ORM\Column(length: 255)]
    private ?string $id_produit = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_creation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_modification = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenue(): ?string
    {
        return $this->contenue;
    }

    public function setContenue(string $contenue): static
    {
        $this->contenue = $contenue;

        return $this;
    }

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function setValeur(string $valeur): static
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getIdVisiteur(): ?string
    {
        return $this->id_visiteur;
    }

    public function setIdVisiteur(string $id_visiteur): static
    {
        $this->id_visiteur = $id_visiteur;

        return $this;
    }

    public function getIdProduit(): ?string
    {
        return $this->id_produit;
    }

    public function setIdProduit(string $id_produit): static
    {
        $this->id_produit = $id_produit;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): static
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getDateModification(): ?\DateTimeInterface
    {
        return $this->date_modification;
    }

    public function setDateModification(\DateTimeInterface $date_modification): static
    {
        $this->date_modification = $date_modification;

        return $this;
    }
}

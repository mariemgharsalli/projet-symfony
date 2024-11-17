<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $id_produit = null;

    #[ORM\Column(length: 255)]
    private ?string $quantite = null;

    #[ORM\Column(length: 255)]
    private ?string $id_panier = null;

    #[ORM\Column]
    private ?float $total = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_creation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_modification = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(string $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getIdPanier(): ?string
    {
        return $this->id_panier;
    }

    public function setIdPanier(string $id_panier): static
    {
        $this->id_panier = $id_panier;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): static
    {
        $this->total = $total;

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

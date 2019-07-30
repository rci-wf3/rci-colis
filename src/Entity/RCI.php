<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RCIRepository")
 */
class RCI
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $enseigne;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $activite;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $contact;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=5)
     * @Assert\NotBlank
     * @Assert\Length(max="5", min="5", minMessage="Code postal invalide", maxMessage="Code postal invalide")
     * @Assert\Regex("/[0-9]{5,5}/", message="Code postal invalide")
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank
     * @Assert\Length(max="10", min="10", minMessage="Téléphone invalide", maxMessage="Téléphone invalide")
     * @Assert\Regex("/[0]{1,1}[0-9]{9,9}/", message="Téléphone invalide")
     */
    private $telephone;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $paiements;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $horaires;

    public function getId(): ?int
    {
        return $this->id;
    }

    // 
    public function getEnseigne(): ?string
    {
        return $this->enseigne;
    }

    public function setEnseigne(string $enseigne): self
    {
        $this->enseigne = $enseigne;

        return $this;
    }

    // 
    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(string $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    // 
    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    // 
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    // 
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    // 
    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(int $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    // 
    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    // 
    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    // 
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    // 
    public function getPaiements(): ?string
    {
        return $this->paiements;
    }

    public function setPaiements(string $paiements): self
    {
        $this->paiements = $paiements;

        return $this;
    }

    // 
    public function getHoraires(): ?string
    {
        return $this->horaires;
    }

    public function setHoraires(string $horaires): self
    {
        $this->horaires = $horaires;

        return $this;
    }

    public function __toString(){
        // to show the name of the Client in the select
        return $this->enseigne . " à " . $this->ville;
        // to show the id of the CLient in the select
        // return $this->id;
    }
}

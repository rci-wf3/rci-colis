<?php

    namespace App\Entity;

    use Symfony\Component\Validator\Constraints as Assert;
    use FOS\UserBundle\Model\User as BaseUser;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="`user`")
     * @ORM\HasLifecycleCallbacks
     */
    class User extends BaseUser
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

        /**
         * @ORM\Column(type="string", length=32)
         * @Assert\NotBlank
         */
        private $prenom;

        /**
         * @ORM\Column(type="string", length=36)
         * @Assert\NotBlank
         */
        private $nom;

        /**
         * @ORM\Column(type="string", length=32)
         * @Assert\NotBlank
         */
        private $adresse;

        /**
         * @ORM\Column(type="string", length=32)
         * @Assert\NotBlank
         */
        private $ville;

        /**
         * @ORM\Column(type="string", length=5)
         * @Assert\NotBlank
         * @Assert\Length(max="5", min="5", minMessage="Code postal invalide", maxMessage="Code postal invalide")
         * @Assert\Regex("/[0-9]{5,5}/", message="Code postal invalide")
         */
        private $code_postal;

        /**
         * @ORM\Column(type="string", length=10)
         * @Assert\NotBlank
         * @Assert\Length(max="10", min="10", minMessage="Téléphone invalide", maxMessage="Téléphone invalide")
         * @Assert\Regex("/[0]{1,1}[0-9]{9,9}/", message="Téléphone invalide")
         */
        private $telephone;

        /**
         * @ORM\Column(type="datetime")
         */
        private $created_at;


        public function getPrenom(): ?string
        {
            return $this->prenom;
        }
    
        public function setPrenom(string $prenom): self
        {
            $this->prenom = $prenom;
    
            return $this;
        }
    
        public function getNom(): ?string
        {
            return $this->nom;
        }
    
        public function setNom(string $nom): self
        {
            $this->nom = $nom;
    
            return $this;
        }
    
        public function getAdresse(): ?string
        {
            return $this->adresse;
        }
    
        public function setAdresse(string $adresse): self
        {
            $this->adresse = $adresse;
    
            return $this;
        }
    
        public function getVille(): ?string
        {
            return $this->ville;
        }
    
        public function setVille(string $ville): self
        {
            $this->ville = $ville;
    
            return $this;
        }
    
        public function getCodePostal(): ?string
        {
            return $this->code_postal;
        }
    
        public function setCodePostal(string $code_postal): self
        {
            $this->code_postal = $code_postal;
    
            return $this;
        }
    
        public function getTelephone(): ?string
        {
            return $this->telephone;
        }
    
        public function setTelephone(string $telephone): self
        {
            $this->telephone = $telephone;
    
            return $this;
        }

        public function getCreatedAt(): ?\DateTimeInterface
        {
            return $this->created_at;
        }

        public function setCreatedAt()
        {
            
            return $this;
        }
        
        public function __construct()
        {
            parent::__construct();
            $this->created_at = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
            
        }
    }
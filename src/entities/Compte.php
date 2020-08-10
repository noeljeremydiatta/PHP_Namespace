<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @
 * ORM\Table(name="compte")
 */
class Compte
{
    /**
    * @ORM\Id 
    * @ORM\Column(type="integer") 
    * @ORM\GeneratedValue 
    */
    private $id;
    /** 
    * @ORM\Column(type="string") 
    */
    private $tyco;
    /** 
    * @ORM\Column(type="string") 
    */
    private $agence;
    /** 
    * @ORM\Column(type="integer") 
    */
    private $rib;
    /** 
    * @ORM\Column(type="integer") 
    */
    private $numcompte;
    /** 
    * @ORM\Column(type="float") 
    */
    private $montant;
    /** 
    * @ORM\Column(type="float") 
    */
    private $salaire;
    /** 
    * @ORM\Column(type="string") 
    */
    private $profession;
    /** 
    * @ORM\Column(type="float") 
    */
    private $frais;
    /** 
    * @ORM\Column(type="float") 
    */
    private $agios;
    /**
    * Many comptes have one client. This is the owning side.
    * @ORM\ManyToOne(targetEntity="Client", inversedBy="comptes")
    * @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
    */
    private $client;

    public function _construct()
    {
        $this->Compte = new ArrayCollection();
    }
    
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getTyco()
    {
        return $this->tyco;
    }
    public function setTyco($tyco)
    {
        $this->tyco = $tyco;
    }
    public function getAgence()
    {
        return $this->agence;
    }
    public function setAgence($agence)
    {
        $this->agence = $agence;
    }
    public function getRib()
    {
        return $this->rib;
    }
    public function setRib($rib)
    {
        $this->rib = $rib;
    }
    public function getNumcompte()
    {
        return $this->numcompte;
    }
    public function setNumcompte($numcompte)
    {
        $this->numcompte = $numcompte;
    }
    public function getMontant()
    {
        return $this->montant;
    }
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }
    public function getProfession()
    {
        return $this->profession;
    }
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }
    public function getFrais()
    {
        return $this->frais;
    }
    public function setFrais($frais)
    {
        $this->frais = $frais;
    }
    public function getAgios()
    {
        return $this->agios;
    }
    public function setAgios($agios)
    {
        $this->agios = $agios;
    }
}

?>
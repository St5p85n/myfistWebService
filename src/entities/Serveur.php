<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="serveur")
 **/
class serveur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
     /** @Column(type="string") **/
     private $adressIp;
      /** @Column(type="string") **/
    private $Salle;
    /**
     * One Serveur have Many Services.
     * @OneToMany(targetEntity="Service", mappedBy="serveur")
     */
    private $services;
    /**
     * One Serveur have Many Services.
     * @ManyToMany(targetEntity="Ingenieur")
     *  joinColumns={@JoinColumn(name="serveur_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="group_id", referencedColumnName="id")}
     *      )
     */
    private $ingenieurs;
    
    public function __construct()
    {
        $this->$ingenieurs = new ArrayCollection();
        $this->$services = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getAdressIp()
    {
        return $this->adressIp;
    }
    public function setAdressIp($adressIp)
    {
        $this->adressIp = $adressIp;
    }

    public function getSalle()
    {
        return $this->salle;
    }
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }

    public function getIngenieurs()
    {
        return $this->ingenieurs;
    }
    public function setIngenieurs($ingenieurs)
    {
        $this->ingenieurs = $ingenieurs;
    }
}

?>
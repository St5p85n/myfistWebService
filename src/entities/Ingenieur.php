<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="ingenieur")
 **/
class Ingenieur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
     /** @Column(type="string") **/
     private $prenom;
      /** @Column(type="string") **/
    private $email;
     /** @Column(type="string") **/
     private $password;
    /**
     * Many Ingenieur have Many Serveur.
     * @ManyToMany(targetEntity="Serveur")
     */
    private $serveurs;
    /**
     * Many Ingenieur have One Profil.
     * @ManyToOne(targetEntity="Profil",inversedBy="ingenieurs")
     */
    private $profil;
    
    public function __construct()
    {
        $this->serveurs = new ArrayCollection();
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

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getServeur()
    {
        return $this->serveurs;
    }
    public function setServeur($serveurs)
    {
        $this->serveurs = $serveurs;
    }

    public function getProfil()
    {
        return $this->profil;
    }
    public function setProfil($profil)
    {
        $this->profil = $profil;
    }
}

?>
<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Course", mappedBy="client")
     */
    private $courseDemandee;
    
    /**
     * @ORM\OneToMany(targetEntity="Course", mappedBy="livreur")
     */
    private $courseEffectuee;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=255, unique=true)
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="numVoie", type="string", length=255)
     */
    private $numVoie;

    /**
     * @var int
     *
     * @ORM\Column(name="cp", type="integer")
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255, nullable=true)
     */
    private $role;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return Utilisateur
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Utilisateur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set numVoie
     *
     * @param string $numVoie
     *
     * @return Utilisateur
     */
    public function setNumVoie($numVoie)
    {
        $this->numVoie = $numVoie;

        return $this;
    }

    /**
     * Get numVoie
     *
     * @return string
     */
    public function getNumVoie()
    {
        return $this->numVoie;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return Utilisateur
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return int
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Utilisateur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Utilisateur
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Utilisateur
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->courseDemandee = new \Doctrine\Common\Collections\ArrayCollection();
        $this->courseEffectuee = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add courseDemandee
     *
     * @param \AppBundle\Entity\Course $courseDemandee
     *
     * @return Utilisateur
     */
    public function addCourseDemandee(\AppBundle\Entity\Course $courseDemandee)
    {
        $this->courseDemandee[] = $courseDemandee;

        return $this;
    }

    /**
     * Remove courseDemandee
     *
     * @param \AppBundle\Entity\Course $courseDemandee
     */
    public function removeCourseDemandee(\AppBundle\Entity\Course $courseDemandee)
    {
        $this->courseDemandee->removeElement($courseDemandee);
    }

    /**
     * Get courseDemandee
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCourseDemandee()
    {
        return $this->courseDemandee;
    }

    /**
     * Add courseEffectuee
     *
     * @param \AppBundle\Entity\Course $courseEffectuee
     *
     * @return Utilisateur
     */
    public function addCourseEffectuee(\AppBundle\Entity\Course $courseEffectuee)
    {
        $this->courseEffectuee[] = $courseEffectuee;

        return $this;
    }

    /**
     * Remove courseEffectuee
     *
     * @param \AppBundle\Entity\Course $courseEffectuee
     */
    public function removeCourseEffectuee(\AppBundle\Entity\Course $courseEffectuee)
    {
        $this->courseEffectuee->removeElement($courseEffectuee);
    }

    /**
     * Get courseEffectuee
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCourseEffectuee()
    {
        return $this->courseEffectuee;
    }
}

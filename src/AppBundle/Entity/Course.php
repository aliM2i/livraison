<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CourseRepository")
 */
class Course
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
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="courseDemandee")
     * @ORM\JoinColumn(name="client_id")
     */
     private $client;   
    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="courseEffectuee")
     * @ORM\JoinColumn(name="livreur_id")
     */
     private $livreur;    


    /**
     * @var string
     *
     * @ORM\Column(name="PdeRetrait", type="string", length=255)
     */
    private $pdeRetrait;

    /**
     * @var string
     *
     * @ORM\Column(name="PdeLivraison", type="string", length=255)
     */
    private $pdeLivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=true)
     */
    private $etat;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", nullable=true)
     */
    private $prix;


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
     * Set utilisateurId
     *
     * @param integer $utilisateurId
     *
     * @return Course
     */
    public function setUtilisateurId($utilisateurId)
    {
        $this->utilisateurId = $utilisateurId;

        return $this;
    }

    /**
     * Get utilisateurId
     *
     * @return int
     */
    public function getUtilisateurId()
    {
        return $this->utilisateurId;
    }

    /**
     * Set pdeRetrait
     *
     * @param string $pdeRetrait
     *
     * @return Course
     */
    public function setPdeRetrait($pdeRetrait)
    {
        $this->pdeRetrait = $pdeRetrait;

        return $this;
    }

    /**
     * Get pdeRetrait
     *
     * @return string
     */
    public function getPdeRetrait()
    {
        return $this->pdeRetrait;
    }

    /**
     * Set pdeLivraison
     *
     * @param string $pdeLivraison
     *
     * @return Course
     */
    public function setPdeLivraison($pdeLivraison)
    {
        $this->pdeLivraison = $pdeLivraison;

        return $this;
    }

    /**
     * Get pdeLivraison
     *
     * @return string
     */
    public function getPdeLivraison()
    {
        return $this->pdeLivraison;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Course
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Course
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set client
     *
     * @param \AppBundle\Entity\Utilisateur $client
     *
     * @return Course
     */
    public function setClient(\AppBundle\Entity\Utilisateur $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set livreur
     *
     * @param \AppBundle\Entity\Utilisateur $livreur
     *
     * @return Course
     */
    public function setLivreur(\AppBundle\Entity\Utilisateur $livreur = null)
    {
        $this->livreur = $livreur;

        return $this;
    }

    /**
     * Get livreur
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getLivreur()
    {
        return $this->livreur;
    }
    
}

<?php

namespace Vae\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Formations
 *
 * @ORM\Table(name="formations", indexes={@ORM\Index(name="rubriques_id", columns={"rubriques_id"})})
 * @ORM\Entity
 */
class Formations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
     /**
     * @var string
     *
     * @Gedmo\Slug(fields={"nom"})
     * @ORM\Column(name="slug", type="string", length=100, nullable=true, unique=true)
     */
    private $slug;

    /**
     * @var string
     * 
     * @Gedmo\Slug(fields={"nomEn"})
     * @ORM\Column(name="slug_en", type="string", length=100, nullable=true, unique=true)
     */
    private $slugEn;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="nom_en", type="string", length=100, nullable=true)
     */
    private $nomEn;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="description_en", type="text", nullable=true)
     */
    private $descriptionEn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="datetime", nullable=true)
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="datetime", nullable=true)
     */
    private $fin;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_inscrit", type="integer", nullable=true)
     */
    private $maxInscrit;

    /**
     * @var \Rubriques
     *
     * @ORM\ManyToOne(targetEntity="Rubriques")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rubriques_id", referencedColumnName="id")
     * })
     */
    private $rubriques;
    
     /**
     * Set slug
     *
     * @param string $slug
     * @return Formations
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set slugEn
     *
     * @param string $slugEn
     * @return Formations
     */
    public function setSlugEn($slugEn)
    {
        $this->slugEn = $slugEn;

        return $this;
    }

    /**
     * Get slugEn
     *
     * @return string 
     */
    public function getSlugEn()
    {
        return $this->slugEn;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Formations
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
     * Set nomEn
     *
     * @param string $nomEn
     * @return Formations
     */
    public function setNomEn($nomEn)
    {
        $this->nomEn = $nomEn;

        return $this;
    }

    /**
     * Get nomEn
     *
     * @return string 
     */
    public function getNomEn()
    {
        return $this->nomEn;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Formations
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionEn
     *
     * @param string $descriptionEn
     * @return Formations
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;

        return $this;
    }

    /**
     * Get descriptionEn
     *
     * @return string 
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     * @return Formations
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime 
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     * @return Formations
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime 
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return Formations
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set maxInscrit
     *
     * @param integer $maxInscrit
     * @return Formations
     */
    public function setMaxInscrit($maxInscrit)
    {
        $this->maxInscrit = $maxInscrit;

        return $this;
    }

    /**
     * Get maxInscrit
     *
     * @return integer 
     */
    public function getMaxInscrit()
    {
        return $this->maxInscrit;
    }

    /**
     * Set rubriques
     *
     * @param \Vae\BaseBundle\Entity\Rubriques $rubriques
     * @return Formations
     */
    public function setRubriques(\Vae\BaseBundle\Entity\Rubriques $rubriques = null)
    {
        $this->rubriques = $rubriques;

        return $this;
    }

    /**
     * Get rubriques
     *
     * @return \Vae\BaseBundle\Entity\Rubriques 
     */
    public function getRubriques()
    {
        return $this->rubriques;
    }

   
}

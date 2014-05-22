<?php

namespace Vae\BaseBundle\Entity;
use Vae\MultiSiteBundle\Entity\Liaisons as MultiBase;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Agendas
 *
 * @ORM\Table(name="agendas", indexes={@ORM\Index(name="sites_id", columns={"sites_id"})})
 * @ORM\Entity
 */
class Agendas extends MultiBase
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
     * @Gedmo\Slug(fields={"titre"})
     * @ORM\Column(name="slug", type="string", length=100, nullable=true, unique=true)
     */
    private $slug;

    /**
     * @var string
     * 
     * @Gedmo\Slug(fields={"titreEn"})
     * @ORM\Column(name="slug_en", type="string", length=100, nullable=true, unique=true)
     */
    private $slugEn;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100, nullable=false)
     */
    private $titre = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="titre_en", type="string", length=100, nullable=true)
     */
    private $titreEn;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=true)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_en", type="text", nullable=true)
     */
    private $contenuEn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    



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
     * Set slug
     *
     * @param string $slug
     * @return Agendas
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
     * @return Agendas
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
     * Set titre
     *
     * @param string $titre
     * @return Agendas
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set titreEn
     *
     * @param string $titreEn
     * @return Agendas
     */
    public function setTitreEn($titreEn)
    {
        $this->titreEn = $titreEn;

        return $this;
    }

    /**
     * Get titreEn
     *
     * @return string 
     */
    public function getTitreEn()
    {
        return $this->titreEn;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Agendas
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set contenuEn
     *
     * @param string $contenuEn
     * @return Agendas
     */
    public function setContenuEn($contenuEn)
    {
        $this->contenuEn = $contenuEn;

        return $this;
    }

    /**
     * Get contenuEn
     *
     * @return string 
     */
    public function getContenuEn()
    {
        return $this->contenuEn;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Agendas
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

}

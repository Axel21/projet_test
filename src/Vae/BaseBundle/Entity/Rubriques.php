<?php

namespace Vae\BaseBundle\Entity;
use Vae\MultiSiteBundle\Entity\Liaisons as MultiBase;
use Doctrine\ORM\Mapping as ORM;

use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Rubriques
 *
 * @ORM\Table(name="rubriques", indexes={@ORM\Index(name="sites_id", columns={"sites_id"})})
 * @ORM\Entity
 */
class Rubriques extends MultiBase
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
     * @ORM\Column(name="slug", type="string", length=100, nullable=true)
     */
    private $slug;

    /**
     * @var string
     * 
     * @Gedmo\Slug(fields={"nomEn"})
     * @ORM\Column(name="slug_en", type="string", length=100, nullable=true)
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
     * @ORM\Column(name="nom_en", type="string", length=100, nullable=false)
     */
    private $nomEn;

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
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=true)
     */
    private $image;

    

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
     * @return Rubriques
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
     * @return Rubriques
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
     * Set nom
     *
     * @param string $nom
     * @return Rubriques
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
     * @return Rubriques
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
     * Set contenu
     *
     * @param string $contenu
     * @return Rubriques
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
     * @return Rubriques
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
     * Set image
     *
     * @param string $image
     * @return Rubriques
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

}

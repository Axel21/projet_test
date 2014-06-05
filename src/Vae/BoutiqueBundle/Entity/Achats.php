<?php

namespace Vae\BoutiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Achats
 *
 * @ORM\Table(name="achats")
 * @ORM\Entity
 */
class Achats
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
     * @ORM\Column(name="transaction", type="string", length=250, nullable=false)
     */
    private $transaction = 'NULL';
    
    /**
     * @var string
     *
     * @ORM\Column(name="produit", type="string", length=250, nullable=true)
     */
    private $produit;
    
    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=250, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=250, nullable=true)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="array", nullable=true)
     */
    private $adresse;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=true)
     */
    private $email;

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
     * Set transaction
     *
     * @param string $transaction
     * @return Achats
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction
     *
     * @return string 
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
    
    /**
     * Set produit
     *
     * @param string $produit
     * @return Achats
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return string 
     */
    public function getProduit()
    {
        return $this->produit;
    }
    
   /**
     * Set date
     *
     * @param string $date
     * @return Achats
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set client
     *
     * @param string $client
     * @return Achats
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Achats
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Achats
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

}

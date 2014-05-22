<?php

namespace Vae\MultiSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Liaisons
 *
 * @ORM\Table(name="liaisons")
 * @ORM\Entity
 */
/** 
 * @ORM\MappedSuperclass 
 */
class Liaisons
{
    /**
     * @var \Sites
     *
     
     
     * @ORM\ManyToOne(targetEntity="Sites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sites_id", referencedColumnName="id")
     * })
     */
    private $sites;

    /**
     * Set sites
     *
     * @param \Vae\MultiSiteBundle\Entity\Sites $sites
     * @return Liaisons
     */
    public function setSites(\Vae\MultiSiteBundle\Entity\Sites $sites)
    {
        $this->sites = $sites;

        return $this;
    }

    /**
     * Get sites
     *
     * @return \Vae\MultiSiteBundle\Entity\Sites 
     */
    public function getSites()
    {
        return $this->sites;
    }
}

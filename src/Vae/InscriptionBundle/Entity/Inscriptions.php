<?php

namespace Vae\InscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Inscriptions
{
  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Vae\UserBundle\Entity\Users")
   */
  private $users;

  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Vae\BaseBundle\Entity\Formations")
   */
  private $formations;

  /**
     * @var boolean
     *
     * @ORM\Column(name="payer", type="boolean", nullable=false)
     */
  private $payer;
  
    
  public function setUsers(\Vae\UserBundle\Entity\Users $users)
  {
    $this->users = $users;
  }
  
  public function getUsers()
  {
    return $this->users;
  }

  public function setFormations(\Vae\BaseBundle\Entity\Formations $formations)
  {
    $this->formations = $formations;
  }
  
  public function getFormations()
  {
    return $this->formations;
  }

  public function setPayer($payer)
  {
    $this->payer = $payer;
  }
  
  public function getPayer()
  {
    return $this->payer;
  }
    
    
}

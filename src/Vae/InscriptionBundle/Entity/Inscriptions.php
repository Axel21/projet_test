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
}

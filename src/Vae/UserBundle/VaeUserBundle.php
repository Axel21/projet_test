<?php

namespace Vae\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class VaeUserBundle extends Bundle
{
    public function getParent()
  {
    return 'FOSUserBundle';
  }
}

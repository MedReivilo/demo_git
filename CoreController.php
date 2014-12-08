<?php

// src/OC/CoreBundle/Controller/CoreController.php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
  public function indexAction()
  {
    return $this->render('OCCoreBundle:Core:layout.html.twig');
  }

}
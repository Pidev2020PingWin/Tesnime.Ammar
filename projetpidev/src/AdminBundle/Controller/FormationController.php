<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormationController extends Controller
{
    public function readAction()
    {
        return $this->render('@Admin/Formation/formation.html.twig');
    }
}

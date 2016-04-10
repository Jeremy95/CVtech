<?php

namespace CvTechBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CvTechBundle:Default:index.html.twig');
    }

    public function readPdfFile()
    {

    }

    public function newFunctionDevBranch()
    {

    }
}

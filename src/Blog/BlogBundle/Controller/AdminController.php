<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \DateTime;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBundle:Admin:index.html.twig');
    }


}

?>
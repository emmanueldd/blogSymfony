<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \DateTime;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBundle:Home:index.html.twig');
        // return $this->render('BlogBundle:Home:index.html.twig', array('name' => $name));
    }

    public function pageAction($page)
    {
    	return $this->render('BlogBundle:Home:page.html.twig', array('page' => $page));
    }

    public function articleAction($slug)
    {
    	 // $cookies = $this->getRequest()->cookies;
    	 // $cookies ->set('pseudo', 'Manu');
    	$session = $this->get('session');
    	$session->set('derniere_visite', new DateTime());
    	$article = array(
    		'titre' => 'Le titre', 
    		'date' => $session->get('derniere_visite'),
    		'content' => 'le contenu',
    		'author' => 'Manu',
    		// 'author' => $cookies->get('pseudo'),
    		'token' => $this->getRequest()->query->get('token'), 
    	);

    	return $this->render('BlogBundle:Home:article.html.twig', 
    		array('article' => $article)
    	);
    }
}

?>
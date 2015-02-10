<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use \DateTime;
use Symfony\Component\HttpFoundation\Response;

class AdminArticleController extends Controller
{
    public function addAction(Request $request)
    {
        if ($request->isXmlHttpRequest())
        {
            return new Response(json_encode(array('erreur', 'ok')));
        }

        if ($request->getMethod() == 'POST')
        {
            $this->addFlash('info', 'l article a bien été ajouté');

            return $this->redirect($this->generateUrl('blog_admin_home'));
        }
        else
        {
            return $this->render('BlogBundle:AdminArticle:add.html.twig');
        }


    }

    public function editAction()
    {
        return $this->render('BlogBundle:AdminArticle:edit.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('BlogBundle:AdminArticle:delete.html.twig');
    }

}

?>
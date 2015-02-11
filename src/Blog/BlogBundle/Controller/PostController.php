<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blog\BlogBundle\Entity\Post;
use Symfony\Component\Validator\Constraints\Date;
use Blog\BlogBundle\Form\PostType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $posts = $em->getRepository('BlogBundle:Post')->findAll();
        return $this->render('BlogBundle:Post:index.html.twig', array(
            'posts' => $posts
        ));
    }

    public function showAction(POST $post){
        return $this->render('BlogBundle:Post:show.html.twig', array('post' => $post));

    }

    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
//        $post = new Post();
//        $post->setAuthor('Manu')
//            ->setCategory(3)
//            ->setTitle('Premier evenement')
//            ->setContent('Grosse fete chez moi')
//            ->setThumb('http://cdn.playbuzz.com/cdn/fa79aecc-8ac9-4994-8118-1485d8c0c5fd/e8ff9782-8612-40a4-8804-8e41343a0f52.jpg')
//            ->setCreatedAt(new DateTime())
//            ->setUpdatedAt(new DateTime())
//            ->setKeywords('grosse soiree, grosse teuf');
//        $em->persist($post);
//        $em->flush();
        $p = new Post();
        $form = $this->createForm(new PostType(), $p);
        if ($request->isMethod('POST'))
        {
            $form->submit($request);
            if ($form->isValid()){
                $p = $form->getData();
                $em->persist($p);
                // On dégage de la mémoire
                $em->flush();
                $this->addFlash('info', 'l article a bien été ajouté');
                return $this->redirect($this->generateUrl('blog_show_post', array('id' => $p->getId(),)));
            }

        }

        return $this->render('BlogBundle:Post:add.html.twig', array(
                'form' => $form->createView(),
                'action' => 'Ajouter ',
        ));



    }

    public function updateAction(POST $post, Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $form = $this->createForm(new PostType(), $post);
        if ($request->isMethod('POST'))
        {
            $form->submit($request);
            if ($form->isValid()){
                $p = $form->getData();
                $em->persist($p);
                // On dégage de la mémoire
                $em->flush();
                $this->addFlash('info', 'l article a bien été ajouté');
                return $this->redirect($this->generateUrl('blog_show_post', array('id' => $p->getId(),)));
            }

        }
        return $this->render('BlogBundle:Post:add.html.twig', array(
            'form' => $form->createView(),
            'action' => 'Editer '
        ));
    }

    public function deleteAction(POST $post, Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($post);
        $em->flush();

        return $this->redirect($this->generateUrl('blog_posts'));
    }



}

?>
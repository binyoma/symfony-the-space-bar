<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('OMG! My first page already! Woo');
    }

    /**
     * @Route("/news/{slug}")
     */
    public  function  show($slug){

        $comments =[
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'In aliquet risus auctor, convallis turpis sed, volutpat sapien',
        'Quisque quis justo nec urna auctor molestie sed non mauris'
        ];
        return $this->render('article/show.html.twig', [
            'title' => $slug,
                'comments' =>$comments
        ]
       );
    }

}
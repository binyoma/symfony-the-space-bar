<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/" , name ="app_homepage")
     */
    public function homepage(){
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/news/{slug}", name="article_show")
     */
    public  function  show($slug){

        $comments =[
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'In aliquet risus auctor, convallis turpis sed, volutpat sapien',
        'Quisque quis justo nec urna auctor molestie sed non mauris'
        ];
        dump($slug, $this);
        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-',' ', $slug)),
                'slug' =>$slug,
                'comments' =>$comments
        ]
       );
    }

    /**
     * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
     */
    public function toggleArticleHeart($slug , LoggerInterface $logger )
    {
        //TODO -actually heart/unheart the article!

        $logger->info('Article is being hearted');
        return new JsonResponse(['hearts'=>rand(5,100)]);

    }

}
<?php

namespace App\Controller;

use App\Taxes\Calculator;
use App\Taxes\Detector;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController extends AbstractController
{
    protected $twig;

//    AbstractController fait déjà cette injection de $twig
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
//    protected $logger;
//    protected $calculator;
//
//    public function __construct(LoggerInterface $logger, Calculator $calculator)
//    {
//        $this->logger = $logger;
//        $this->calculator = $calculator;
//    }

    /**
     * @Route("/hello/{prenom?World2}", defaults={"prenom":"World1"}, name="hello", methods={"GET"})
     */
//    public function hello($prenom = "World3", Detector $detector)
    public function hello($prenom = "World3")
    {
//        $html = $twig->render('hello.html.twig', [
//            'prenom' => $prenom,
//            'ages' => [
//                6,
//                80,
//                12,
//                25
//            ],
//            'prenoms' => [
//                'Alper',
//                'Alp',
//                'Er',
//            ],
//            'formateur1' => [
//                'prenom' => 'Alper',
//                'nom' => 'Bulut',
//                'age' => 36,
//            ],
//            'formateur2' => [
//                'prenom' => 'Marc',
//                'nom' => 'Dupont',
//                'age' => 45,
//            ],
//        ]);
//        return new Response($html);

//        dump($detector->detect(101, 50));
//        dump($detector->detect(10, 5));
//
//        $tva = $this->calculator->calcul(100);
//        dump($tva);
//
//        $this->logger->info("Mon message de log");
//        return new Response("Hello $prenom");
        return $this->render('hello.html.twig', ['prenom' => $prenom]);

    }

    /**
     * @Route("/example", name="example")
     */
    public function example()
    {
//        $html = $twig->render('example.html.twig', [
//            'age' => 33
//        ]);
//        return new Response($html);
        return $this->render('example.html.twig', ['age' => 36]);
    }

//  AbstractController contient déjà cette methode render()
//    protected function render(string $path, array $variables = [])
//    {
//        $html = $this->twig->render($path, $variables);
//        return new Response($html);
//    }
}

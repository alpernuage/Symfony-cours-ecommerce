<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    protected $logger;
    protected $calculator;

    public function __construct(LoggerInterface $logger, Calculator $calculator)
    {
        $this->logger = $logger;
        $this->calculator = $calculator;
    }
    /**
     * @Route("/hello/{firstName?World2}", defaults={"firstName":"World1"}, name="hello", methods={"GET"})
     */
    public function hello($firstName = "World3")
    {
        $tva = $this->calculator->calcul(100);
        dump($tva);
        $this->logger->info("Mon message de log");
        return new Response("Hello $firstName");
    }

}

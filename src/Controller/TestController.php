<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    /**
     * @Route("/", name="index")
     * 
     */
    public function index()
    {
        var_dump('OK');
        die();
    }
/**
 * @Route("/test/{age<\d+>?20}", name="test", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
 */
    public function test(Request $request, $age)
    {
        // $request = Request::createFromGlobals();
        // $age = $request->query->get('age', 0); //params après URL
        // $age = $request->attributes->get('age', 0); //params dans URL
        // dd($request);
        // dd($age);

        // $age = $_GET['age'];
        // dd("Test $age");
        return new Response("Vous avez $age ans");
    }
}

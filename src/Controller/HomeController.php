<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(EntityManagerInterface $em)
    {
        // CREATE
/*         $product = new Product;
        $product
            ->setName('Table en métal')
            ->setPrice(3000)
            ->setSlug('table-en-métal');

        $em->persist($product);
        $em->flush();

        dd($product); */

        // UPDATE
/*         $productRepository = $em->getRepository(Product::class);
        $product = $productRepository->find(3);
        $product->setPrice(2500);
        $em->flush();
        dd($product); */

        // DELETE
        $productRepository = $em->getRepository(Product::class);
        $product = $productRepository->find(3);
        $em->remove($product);
        $em->flush();

        return $this->render('home.html.twig');
    }
}

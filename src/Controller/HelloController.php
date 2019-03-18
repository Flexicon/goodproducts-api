<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/", name="hello")
     */
    public function __invoke()
    {
        return $this->json([
            'message' => 'GoodProducts API!',
        ]);
    }
}

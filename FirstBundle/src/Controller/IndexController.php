<?php

namespace Roger\Test\Bundle\First\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/bundle",methods={"GET"})
     */
    public function index()
    {
        return $this->json(['data' => [], 'message' => '恭喜你完成新的bundle', 'code' => 200]);
    }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends Controller
{
    /**
     * @Route("/", name="base")
     */
    public function index()
    {
        return $this->render('base/index.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
    /**
     * @Route("/en", name="baseen")
     */
    public function indexen()
    {
        return $this->render('base/index-en.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }

    /**
     * @Route("/solution", name="solution")
     */
    public function solution()
    {
        return $this->render('base/solution.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
    /**
     * @Route("/solutioneng", name="solution-eng")
     */
    public function solution_eng()
    {
        return $this->render('base/solution-eng.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
    /**
     * @Route("/presentation", name="presentation")
     */
    public function presentation()
    {
        return $this->render('base/presentation.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
}

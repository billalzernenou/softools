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
    {   $language= 'fr';
        return $this->render('base/presentation.html.twig', [
            'controller_name' => 'BaseController',
             'language'=> $language,

        ]);
    }

    /**
     * @Route("/presentationen", name="presentation_en")
     */
    public function presentation_en()
    {   $language= 'en';
        return $this->render('base/presentation.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }
    /**
     * @Route("/pricing", name="pricing")
     */
    public function pricing()
    {   $language= 'en';
        return $this->render('base/pricing.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }

    /**
     * @Route("/security", name="security")
     */
    public function security()
    {   $language= 'en';
        return $this->render('base/security.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }
    /**
     * @Route("/personalisable", name="personalisable")
     */
    public function Personalisable()
    {   $language= 'en';
        return $this->render('base/personalisable.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }

}

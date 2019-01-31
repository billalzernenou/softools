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

    /**
     * @Route("/finance", name="finance")
     */
    public function finance()
    {   $language= 'en';
        return $this->render('base/finance.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }
    /**
     * @Route("/solution1", name="solution1")
     */
    public function solution1()
    {   $language= 'en';
        return $this->render('solutions/solution1.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }
    /**
     * @Route("/solution2", name="solution2")
     */
    public function solution2()
    {   $language= 'en';
        return $this->render('solutions/solution2.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }
    /**
     * @Route("/solution3", name="solution3")
     */
    public function solution3()
    {   $language= 'en';
        return $this->render('solutions/solution3.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }

    /**
     * @Route("/store", name="store")
     */
    public function store()
    {   $language= 'en';
        return $this->render('base/store.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }

    /**
     * @Route("/sign", name="sign")
     */
    public function sign()
    {   $language= 'en';
        return $this->render('sign/sign.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }

    /**
     * @Route("/signin", name="signin")
     */
    public function signin()
    {   $language= 'en';
        return $this->render('base/signin.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {   $language= 'en';
        return $this->render('base/contact.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }


    /**
     * @Route("/testimonial", name="testimonial" )
     */
    public function testimonial()
    {   $language= 'en';
        return $this->render('base/testimonial.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }

    /**
     * @Route("/blog", name="blog" )
     */
    public function blog()
    {   $language= 'en';
        return $this->render('base/blog.html.twig', [
            'controller_name' => 'BaseController',
            'language'=> $language,

        ]);
    }

}

<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('home/index.html.twig', []);
    }

    /**
     * @Route("/carousel", name="carousel")
     */
    public function carouselAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();

        $response = $this->render(
            'home/carousel.html.twig',
            [
                'items' => $em->getRepository('AppBundle:Crea')->findByDiapo(true),
            ]
        );

        $response->setSharedMaxAge(10);

        return $response;
    }

    /**
     * @Route("/guest-book", name="guest-book")
     */
    public function guestBookAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();

        $response = $this->render(
            'home/guest-book.html.twig',
            [
                'comments' => $em->getRepository('AppBundle:Livre')->findBy([], ['datliv' => 'desc']),
            ]
        );

        $response->setSharedMaxAge(10);

        return $response;
    }
}

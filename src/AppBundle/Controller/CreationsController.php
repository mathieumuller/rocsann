<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Crea;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/creations")
 */
class CreationsController extends Controller
{
    /**
     * @Route("/", name="creations_list")
     */
    public function creationsListAction(Request $request)
    {
        return $this->render('home/index.html.twig', []);
    }

    /**
     * @Route("/{id}", name="creation_detail")
     * @ParamConverter("crea", class="AppBundle:Crea")
     */
    public function creationDetailAction(Request $request, Crea $crea)
    {
        return $this->render('home/index.html.twig', []);
    }
}

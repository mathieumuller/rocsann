<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Crea;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AppBundle\Model\Criteria\CreationCriteria;
use AppBundle\Form\Type\Criteria\CreationCriteriaType;

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
        $em = $this->getDoctrine()->getManager();
        $creationRepository = $em->getRepository('AppBundle:Creation');
        $criteria = new CreationCriteria();
        $criteriaType = $this->createForm(
            CreationCriteriaType::class,
            $criteria,
            [
                'matieres' => $creationRepository->getDistinctMatieres(),
            ]
        );
        $criteriaType->handleRequest($request);

        $creations = $creationRepository->searchByCriteria($criteria)->getResult();

        $response = $this->render(
            'creations/list.html.twig',
            [
                'criteria' => $criteriaType->createView(),
                'creations' => $creations,
            ]
        );
        $response->setSharedMaxAge(60);
        $response->setETag(md5($response->getContent()));
        $response->setPublic(); // make sure the response is public/cacheable
        $response->isNotModified($request);

        return $response;
    }

    /**
     * @Route("/{id}", name="creation_detail")
     * @ParamConverter("crea", class="AppBundle:Creation")
     */
    public function creationDetailAction(Request $request, Creation $crea)
    {
        return $this->render('home/index.html.twig', []);
    }
}

<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Creation;
use AppBundle\Form\Type\CreationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AppBundle\Model\Criteria\CreationCriteria;
use AppBundle\Form\Type\Criteria\CreationCriteriaType;

/**
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("/creations", name="list_creations")
     */
    public function listCreations(Request $request)
    {
        $creationRepository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Creation');
        $criteria = new CreationCriteria();
        $form = $this->createForm(CreationCriteriaType::class, $criteria, []);

        $form->handleRequest($request);

        $results = $creationRepository->search($criteria);

        return $this->render(
            'admin/creations.html.twig',
            [
                'creations' => $creationRepository->findBy([], ['label' => 'ASC']),
                'criteria' => $form->createView(),
            ]
        );
    }

    /**
     * @Route("/creations/edit/{id}", name="manage_creations", defaults={"id": null})
     * @ParamConverter("creation", class="AppBundle:Creation")
     */
    public function editCreationAction(Request $request, Creation $creation = null)
    {
        $em = $this->getDoctrine()->getManager();
        $creation = is_null($creation) ? new Creation() : $creation;
        $form = $this->createForm(CreationType::class, $creation, []);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($creation);
            $em->flush();

            return $this->redirectToRoute('manage_creations', ['id' => $creation->getId()]);
        }
        // replace this example code with whatever you need
        return $this->render(
            'admin/edit_creation.html.twig',
            [
                'creations' => $em->getRepository('AppBundle:Creation')->findBy([], ['label' => 'ASC']),
                'form' => $form->createView(),
            ]
        );
    }
}

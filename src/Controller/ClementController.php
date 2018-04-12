<?php

namespace App\Controller;

use App\Entity\Clement;
use App\Form\ClementType;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClementController extends Controller
{
    /**
     * @Route("/clement", name="clement")
     * @Template()
     */
    public function index(Request $request)
    {
        $task = new Clement();

        $form = $this->createForm(ClementType::class, new Clement());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();
            $this->addFlash(
                'notice',
                'Your changes were saved!'
            );
            return $this->redirectToRoute('clement');
        }
        return ['controller_name' => 'ClementController',
            'form' => $form->createView()];
    }
}

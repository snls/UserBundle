<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;
use UserBundle\Form\UserRegistrationType;
use UserBundle\Repository\UserRepository;

class RegistrationController extends Controller
{
    /**
     * @Route("/user/create")
     * @param $request
     * @return resource
     */
    public function indexAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserRegistrationType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($user);
            if(count($errors) > 0) {
                return $this->render('UserBundle:Registration:index.html.twig', array(
                    'form' => $form->createView(),
                    'errors' => $errors
                ));
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute("listUser");
        }

        return $this->render('UserBundle:Registration:index.html.twig', array(
            'form' => $form->createView()
        ));
    }

}

<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;
use UserBundle\Form\UserAuthorizationType;
use UserBundle\Form\UserType;
use UserBundle\FormEntity\UserAuth;

class AuthorizationController extends Controller
{
    /**
     * @Route("/user/login")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserAuthorizationType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($user);;

            if (count($errors) > 0) {
                return $this->render('UserBundle:Registration:index.html.twig', array(
                    'form' => $form->createView(),
                    'errors' => $errors
                ));
            }

            return new Response("Auth success");
        }

        return $this->render('UserBundle:Authorization:index.html.twig', array(
            'form' => $form->createView()
        ));
    }

}

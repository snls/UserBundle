<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Model\UserManager;
use UserBundle\Security\UserProvider;

class DefaultController extends Controller
{
    /**
     * @Route("users/", name="listUser")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getRepository("UserBundle:User");
        $users = $em->findAll();

        return $this->render('UserBundle:Default:index.html.twig', [
            'users' => $users
        ]);
    }
}

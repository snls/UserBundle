<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdministrationUserController extends Controller
{
    /**
     * @Route("/admin/users")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:AdministrationUser:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/admin/user/create")
     */
    public function createAction()
    {
        return $this->render('UserBundle:AdministrationUser:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/admin/user/update")
     */
    public function updateAction()
    {
        return $this->render('UserBundle:AdministrationUser:update.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/admin/user/delete")
     */
    public function deleteAction()
    {
        return $this->render('UserBundle:AdministrationUser:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/admin/user/read")
     */
    public function readAction()
    {
        return $this->render('UserBundle:AdministrationUser:read.html.twig', array(
            // ...
        ));
    }

}

<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdministrationRoleController extends Controller
{
    /**
     * @Route("/admin/roles")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:AdministrationRole:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/admin/role/create")
     */
    public function createAction()
    {
        return $this->render('UserBundle:AdministrationRole:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/admin/role/read")
     */
    public function readAction()
    {
        return $this->render('UserBundle:AdministrationRole:read.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/admin/role/update")
     */
    public function updateAction()
    {
        return $this->render('UserBundle:AdministrationRole:update.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/admin/role/delete")
     */
    public function deleteAction()
    {
        return $this->render('UserBundle:AdministrationRole:delete.html.twig', array(
            // ...
        ));
    }

}

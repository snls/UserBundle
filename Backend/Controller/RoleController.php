<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 21.08.16
 * Time: 17:54
 */

namespace UserBundle\Backend\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    /**
     * @Route("/roles")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Backend/Role:list.html.twig');
    }

    /**
     * @Route("/role/create")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction()
    {
        return new Response("Create...");
    }

    /**
     * @Route("/role/{name}")
     *
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($name)
    {
        return new Response("Show...:".$name);
    }

    /**
     * @Route("/role/{name}/update")
     *
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function updateAction($name)
    {
        return new Response("Update...:".$name);
    }

    /**
     * @Route("/role/{name}/delete")
     *
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($name)
    {
        return new Response("Delete...:".$name);
    }
}
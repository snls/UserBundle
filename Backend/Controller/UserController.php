<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 21.08.16
 * Time: 17:50
 */

namespace UserBundle\Backend\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * @Route("/users")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Backend/User:list.html.twig');
    }

    /**
     * @Route("/user/create")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction()
    {
        return new Response("Create...");
    }

    /**
     * @Route("/user/{name}")
     *
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($name)
    {
        return new Response("Show...:".$name);
    }

    /**
     * @Route("/user/{name}/update")
     *
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function updateAction($name)
    {
        return new Response("Update...:".$name);
    }

    /**
     * @Route("/user/{name}/delete")
     *
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($name)
    {
        return new Response("Delete...:".$name);
    }
}
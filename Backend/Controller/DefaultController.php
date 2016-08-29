<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 21.08.16
 * Time: 18:23
 */

namespace UserBundle\Backend\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Backend/Default:index.html.twig');
    }
}
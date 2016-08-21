<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PasswordController extends Controller
{
    /**
     * @Route("/password/reset")
     */
    public function emailResetAction()
    {
        return $this->render('UserBundle:Password:email_reset.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/password/reset/sms")
     */
    public function smsResetAction()
    {
        return $this->render('UserBundle:Password:sms_reset.html.twig', array(
            // ...
        ));
    }

}

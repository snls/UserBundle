<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 20.07.16
 * Time: 16:10
 */

namespace UserBundle\Entity;


use Doctrine\ORM\Mapping\Entity as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

abstract class User implements UserInterface
{
}
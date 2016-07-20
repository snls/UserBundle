<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 20.07.16
 * Time: 17:50
 */

namespace UserBundle\Security;


use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class UserProvider implements UserProviderInterface
{
    public function supportsClass($class)
    {
        // TODO: Implement supportsClass() method.
    }

    public function refreshUser(UserInterface $user)
    {
        // TODO: Implement refreshUser() method.
    }

    public function loadUserByUsername($username)
    {
        // TODO: Implement loadUserByUsername() method.
    }
}
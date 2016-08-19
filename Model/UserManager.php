<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 19.08.16
 * Time: 11:21
 */

namespace UserBundle\Model;


use UserBundle\Repository\UserRepository;
use UserBundle\Security\UserProvider;

class UserManager implements UserManagerInterface
{
    public function deleteUser(UserInterface $user)
    {
        // TODO: Implement deleteUser() method.
    }

    public function findUserBy(array $criteria)
    {
        // TODO: Implement findUserBy() method.
    }

    public function findUsers()
    {
        
    }

    public function updateUser(UserInterface $user)
    {
        // TODO: Implement updateUser() method.
    }

    public function updatePasswordForUser(UserInterface $user)
    {
        // TODO: Implement updatePasswordForUser() method.
    }
    
    public function getClass()
    {
        // TODO: Implement getClass() method.
    }
}
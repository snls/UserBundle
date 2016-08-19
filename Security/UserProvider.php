<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 20.07.16
 * Time: 17:50
 */

namespace UserBundle\Security;


use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use UserBundle\Model\UserInterface;
use UserBundle\Model\UserManagerInterface;
use UserBundle\Model\UserProviderInterface;

class UserProvider implements UserProviderInterface
{
    protected $userManager;

    public function __construct(UserManagerInterface $userManagerInterface)
    {
        $this->userManager = $userManagerInterface;
        return $this;
    }

    private function supportsClass($class)
    {
        return ($class instanceof UserInterface) ? true : false;
    }

    public function refreshUser(UserInterface $user)
    {
        if(!$this->supportsClass($user)) {
            throw new UnsupportedUserException(sprintf("Excepted as instance of UserBundle\\Model\\UserInterface, but got a ".get_class($user)));
        }
        
        return $this->userManager->findUserBy(['id' => $user->getId()]);
    }

    public function loadUserByUsername($username)
    {
        $user = $this->getUser($username);

        if(!$user) {
            throw new UsernameNotFoundException(sprintf("Username %s does not exist.", $username));
        }

        return $user;
    }

    public function createUser()
    {

    }
}
<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 20.07.16
 * Time: 16:10
 */

namespace UserBundle\Entity;


use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 *
 * @UniqueEntity("email", groups={"registration"})
 * @UniqueEntity("username", groups={"registration"})
 */

class User
{
    /**
     * @var $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=40, nullable=true, unique=true)
     *
     * @Assert\Length(min=3, max=40, groups={"registration", "authorization"})
     * @Assert\NotBlank(groups={"registration", "authorization"})
     */
    protected $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=40, nullable=true, unique=true)
     *
     * @Assert\Length(min=3, max=40, groups={"registration"})
     * @Assert\Email(groups={"registration"})
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=40, nullable=true)
     *
     * @Assert\Length(min=3, groups={"registration", "authorization"})
     * @Assert\NotBlank(groups={"registration", "authorization"})
     */
    protected $password;

    /**
     * Get ID
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set username
     *
     * @param $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password
     *
     * @param $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);

        return $this;
    }
}

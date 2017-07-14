<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * User.
 */
class User extends \SaleBundle\Model\Customer
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $previousPassword;

    /**
     * @var string
     */
    private $email;

    /**
     * @var bool
     */
    private $isActive;

    /**
     * @var array
     */
    private $roles;

    /**
     * @var int
     */
    private $countconnections = '0';

    /**
     * @var \DateTime
     */
    private $lastconnection;

    /**
     * @var bool
     */
    private $news;

    /**
     * @var string
     */
    private $activationToken;

    public function __construct()
    {
        $this->addresses = new ArrayCollection();
    }

    /**
     * Set username.
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set previousPassword.
     *
     * @param string $previousPassword
     *
     * @return User
     */
    public function setPreviousPassword($previousPassword)
    {
        $this->previousPassword = $previousPassword;

        return $this;
    }

    /**
     * Get previousPassword.
     *
     * @return string
     */
    public function getPreviousPassword()
    {
        return $this->previousPassword;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isActive.
     *
     * @param bool $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive.
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set roles.
     *
     * @param array $roles
     *
     * @return User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles.
     *
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set countconnections.
     *
     * @param int $countconnections
     *
     * @return User
     */
    public function setCountconnections($countconnections)
    {
        $this->countconnections = $countconnections;

        return $this;
    }

    /**
     * Get countconnections.
     *
     * @return int
     */
    public function getCountconnections()
    {
        return $this->countconnections;
    }

    /**
     * Set lastconnection.
     *
     * @param \DateTime $lastconnection
     *
     * @return User
     */
    public function setLastconnection($lastconnection)
    {
        $this->lastconnection = $lastconnection;

        return $this;
    }

    /**
     * Get lastconnection.
     *
     * @return \DateTime
     */
    public function getLastconnection()
    {
        return $this->lastconnection;
    }

    /**
     * Set news.
     *
     * @param bool $news
     *
     * @return User
     */
    public function setNews($news)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Get news.
     *
     * @return bool
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Set activationToken.
     *
     * @param string $activationToken
     *
     * @return User
     */
    public function setActivationToken($activationToken)
    {
        $this->activationToken = $activationToken;

        return $this;
    }

    /**
     * Get activationToken.
     *
     * @return string
     */
    public function getActivationToken()
    {
        return $this->activationToken;
    }
}

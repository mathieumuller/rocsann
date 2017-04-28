<?php

namespace AppBundle\Entity\Methods;

class UserMethods
{
    public function newConnection()
    {
        $this->setCountConnections($this->getCountConnections() + 1);
        $this->setLastConnection(new \DateTime());
    }
}

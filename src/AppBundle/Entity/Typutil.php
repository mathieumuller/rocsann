<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typutil
 *
 * @ORM\Table(name="typutil")
 * @ORM\Entity
 */
class Typutil
{
    /**
     * @var string
     *
     * @ORM\Column(name="libTyp", type="string", length=25)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $libtyp;



    /**
     * Get libtyp
     *
     * @return string 
     */
    public function getLibtyp()
    {
        return $this->libtyp;
    }
}

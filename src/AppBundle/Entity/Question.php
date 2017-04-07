<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity
 */
class Question
{
    /**
     * @var string
     *
     * @ORM\Column(name="libQuestion", type="string", length=100, nullable=true)
     */
    private $libquestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idQuestion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestion;



    /**
     * Set libquestion
     *
     * @param string $libquestion
     * @return Question
     */
    public function setLibquestion($libquestion)
    {
        $this->libquestion = $libquestion;

        return $this;
    }

    /**
     * Get libquestion
     *
     * @return string 
     */
    public function getLibquestion()
    {
        return $this->libquestion;
    }

    /**
     * Get idquestion
     *
     * @return integer 
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }
}

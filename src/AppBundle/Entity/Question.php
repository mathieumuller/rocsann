<?php

namespace AppBundle\Entity;

/**
 * Question
 */
class Question
{
    /**
     * @var integer
     */
    private $idquestion;

    /**
     * @var string
     */
    private $libquestion;


    /**
     * Get idquestion
     *
     * @return integer
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }

    /**
     * Set libquestion
     *
     * @param string $libquestion
     *
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
}


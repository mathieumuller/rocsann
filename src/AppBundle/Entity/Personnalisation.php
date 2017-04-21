<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Creation.
 *
 * @ORM\Entity
 */
class Personnalisation extends Realisation
{
    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    private $commentaire;

    /**
     * Gets the value of commentaire.
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Sets the value of commentaire.
     *
     * @param string $commentaire the commentaire
     *
     * @return self
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }
}

<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Model\Criteria\CreationCriteria;

class CreationRepository extends EntityRepository
{
    public function search(CreationCriteria $criteria)
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.label', 'ASC')
           ;
    }
}

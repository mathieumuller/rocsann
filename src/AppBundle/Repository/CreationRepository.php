<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CreationRepository extends EntityRepository
{
    public function searchByCriteria($criteria)
    {
        $sorts = explode('&&', $criteria->sort);

        $qb = $this->createQueryBuilder('crea')
            ->select('crea')
            ->leftJoin('crea.configuration', 'conf')
        ;

        foreach ($sorts as $sort) {
            $sort = explode(',', $sort);
            $qb->addOrderBy($sort[0], $sort[1]);
        }

        if (!empty($criteria->categorie)) {
            $qb->andWhere('crea.categorie = :categorie')
                ->setParameter('categorie', $criteria->categorie)
            ;
        }

        if (!empty($criteria->forme)) {
            $qb->andWhere('crea.forme = :forme')
                ->setParameter('forme', $criteria->forme)
            ;
        }

        if (!empty($criteria->matiere)) {
            $qb->andWhere('conf.matiere = :matiere')
                ->setParameter('matiere', $criteria->matiere)
            ;
        }

        return $qb->getQuery();
    }

    public function getDistinctMatieres()
    {
        $result = $this->createQueryBuilder('crea')
            ->select('conf.matiere')
            ->distinct('conf.matiere')
            ->leftJoin('crea.configuration', 'conf')
            ->orderBy('conf.matiere', 'ASC')
            ->getQuery()
            ->getResult()
        ;

        $result = array_map('current', $result);

        return array_combine($result, $result);
    }
}

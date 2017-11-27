<?php

namespace AppBundle\Repository;

/**
 * IngredientsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class IngredientsRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * @param string $name
     *
     * @return \AppBundle\Entity\Ingredients[]
     */
    public function findByName(string $name) {
        return $this->createQueryBuilder('ingredients')
            ->andWhere('ingredients.origfdnm LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $name . '%')
            ->getQuery()
            ->execute();
    }
}

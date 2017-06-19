<?php

namespace Admin\Repository;

use Doctrine\ORM\EntityRepository;
use Admin\Entity\Organisation;

/**
 * This is the custom repository class for Post entity.
 */
class OrganisationRepository extends EntityRepository {

    /**
     * Retrieves all published posts in descending date order.
     * @return Query
     */
    public function getAll() {
        $entityManager = $this->getEntityManager();

        $queryBuilder = $entityManager->createQueryBuilder();

        $queryBuilder->select('o')
                ->from(Organisation::class, 'o');
        return $queryBuilder->getQuery();
    }

}

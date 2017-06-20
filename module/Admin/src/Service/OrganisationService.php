<?php

namespace Admin\Service;

use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\ServiceManagerAwareInterface;
use Admin\Entity\Organisation;

/**
 * The PostManager service is responsible for adding new posts, updating existing
 * posts, adding tags to post, etc.
 */
class OrganisationService {
    /**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager;
     */
    private $entityManager;

    /**
     * Constructor.
     */
    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
    }

    public function getData() {
        $org = $this->entityManager->getRepository(Organisation::class)->findPublishedPosts()->getResult();
        return $org;
    }

}

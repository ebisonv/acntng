<?php

namespace Admin\Controller\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Admin\Service\OrganisationService;
use Admin\Controller\RegisterController;

/**
 * This is the factory for IndexController. Its purpose is to instantiate the
 * controller.
 */
class RegisterControllerFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        $organisationService = $container->get(OrganisationService::class);
        return new RegisterController($entityManager, $organisationService);
    }

}

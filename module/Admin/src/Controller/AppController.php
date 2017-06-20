<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class AppController extends AbstractActionController {

    /**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager 
     */
    protected $entityManager;

    /**
     * Constructor is used for injecting dependencies into the controller.
     */
    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
    }

}

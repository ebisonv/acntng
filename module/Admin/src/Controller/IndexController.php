<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Admin\Controller\AppController;
use Zend\View\Model\ViewModel;

class IndexController extends AppController {

    /**
     * OrganisationService.
     * @var Admin\Service\Organisation
     */
    protected $organisationService;

    /**
     * Constructor is used for injecting dependencies into the controller.
     */
    public function __construct($entityManager, $organisationService) {
        parent::__construct($entityManager);
        $this->organisationService = $organisationService;
    }

    public function indexAction() {

        var_dump($this->organisationService->getData());
        return new ViewModel();
    }

}

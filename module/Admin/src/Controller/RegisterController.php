<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Admin\Controller\AppController;
use Zend\View\Model\JsonModel;

class RegisterController extends AppController {

    /**
     * OrganisationService.
     * @var Admin\Service\Organisation
     */
    protected $organisationService;

    /**
     * Constructor is used for injecting dependencies into the controller.
     */
    public function __construct($entityManager, $organisationService) {

        parent::__construct($entityManager, $this->getRequest());
        $this->organisationService = $organisationService;
    }

    public function indexAction() {
        $request = $this->getRequest();
        $postData = $request->getPost();
        $dta = $request->getPost();
        //      var_dump($dta); die;


       // var_dump($this->request);
       // die;
        return new JsonModel(["dgdgi" => "ggf"]);
    }

}

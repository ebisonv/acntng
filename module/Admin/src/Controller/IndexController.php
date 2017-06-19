<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

/**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager 
     */
    private $entityManager;

    /**
     * Constructor is used for injecting dependencies into the controller.
     */
    public function __construct($entityManager, $organisation) 
    {
        $this->entityManager = $entityManager;
        $this->organisation = $organisation;
      //  var_dump($organisation);
        
    }

    public function indexAction()
    {
     //   $org=$this->organisation->fetchAll();
        var_dump($this->organisation->getData());
//$entityManager = $container->get('doctrine.entitymanager.orm_default'); 
//$em = $this->getServiceLocator()
 //           ->get('doctrine.entitymanager.orm_default');
        return new ViewModel();
    }
}

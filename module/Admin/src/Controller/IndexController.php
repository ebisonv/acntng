<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Entity\Organisation;

use Interop\Container\ContainerInterface;


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
   // public function __construct($entityManager) 
   // {
   //     $this->entityManager = $entityManager;
   // }
public function __invoke(ContainerInterface $container){
$this->entityManager = $container->get('doctrine.entitymanager.orm_default');
echo "fff";
die;
}
    public function indexAction()
    {
//$entityManager = $container->get('doctrine.entitymanager.orm_default'); 
//$em = $this->getServiceLocator()
 //           ->get('doctrine.entitymanager.orm_default');
        return new ViewModel();
    }
}

<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
//        $config = $this->getServiceLocator()->get('config');
//        $configEmailContact = $config['lwd-send-email-email'];
//        var_dump($configEmailContact);
//        $configEmailContact2 = $config['email_from_address'];
//        var_dump($configEmailContact2);
        var_dump($_SESSION['lwd']);
        return new ViewModel();
    }
}

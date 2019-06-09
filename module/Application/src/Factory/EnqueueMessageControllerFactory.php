<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 1:11 AM
 */

namespace Application\Factory;


use Aos\Autoloader\Service\EnqueueMessageService;
use Application\Controller\EnqueueMessageController;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class EnqueueMessageControllerFactory implements FactoryInterface {
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new EnqueueMessageController(new EnqueueMessageService());
    }
}
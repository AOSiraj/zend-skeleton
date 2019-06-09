<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/8/2019
 * Time: 5:41 PM
 */

namespace Application\Factory;


use Aos\Autoloader\Service\DequeueMessageService;
use Application\Controller\DequeueMessageController;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class DequeueMessageControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $dequeueMessageService =  $container->get(DequeueMessageService::class);
        return new DequeueMessageController($dequeueMessageService);
    }
}
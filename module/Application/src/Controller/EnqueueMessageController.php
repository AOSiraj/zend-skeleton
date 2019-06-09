<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/9/2019
 * Time: 1:14 AM
 */

namespace Application\Controller;


use Aos\Autoloader\Service\EnqueuemessageInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class EnqueueMessageController extends AbstractActionController
{
    public $enqueueService = null;

    public function __construct(EnqueuemessageInterface $enqueueService)
    {
        $this->enqueueService = $enqueueService;
    }

    public function EnqueueAction()
    {
        try {
            return new JsonModel([
                "response" => $this->enqueueService->enqueue()
            ]);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
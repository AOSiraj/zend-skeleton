<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/8/2019
 * Time: 4:44 PM
 */

namespace Application\Controller;


use Aos\Autoloader\Service\DequeueMessageService;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class DequeueMessageController extends AbstractActionController
{
    public $dequeueMessageService;
    public function __construct(DequeueMessageService $dequeueMessageService) {
        $this->dequeueMessageService = $dequeueMessageService;
    }

    public function dequeueAction() {
        try{
            return new JsonModel([
                'success' => $this->dequeueMessageService->dequeue()
            ]);
        }
        catch(\Exception $e){
            throw $e;
        }
    }
}
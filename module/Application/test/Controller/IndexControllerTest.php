<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ApplicationTest\Controller;

use Application\Controller\IndexController;
use PHPUnit\Framework\TestCase;
use Zend\Stdlib\ArrayUtils;

class IndexControllerTest extends TestCase
{
    private $indexController = null;
    public function setUp():void
    {
//        $this->indexController = $this->createMock(IndexController::class);
        $this->indexController = new IndexController();
        parent::setUp();
    }

    public function testIndexActionCanBeAccessed()
    {
        $reponse = $this->indexController->indexAction();
        $this->assertNotNull($reponse);
    }
}

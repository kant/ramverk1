<?php

namespace Bashar\IpValidator;

use Anax\DI\DIMagic;
use Anax\DI\DIFactoryConfig;
use Anax\Response\ResponseUtility;
use PHPUnit\Framework\TestCase;

/**
 * Test features for THE controller IpValidatorController.
 */
class JsonGeoLocationByIpControllerTest extends TestCase
{

    // Create the di container.
    protected $controller;

    /**
     * Prepare before each test.
     */
    protected function setUp() : void
    {
        // Setup di
        $this->di = new DIFactoryConfig();
        $this->di = new DIMagic();
        $this->di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Setup IpValidatorController
        $this->controller = new JsonGeoLocationByIpController();
        $this->controller->setDI($this->di);
    }

    /**
     * Test the route "index".
     */
    public function testIndexAction()
    {
        $res = $this->controller->indexAction();
        $this->assertInternalType("object", $res);
        $this->assertInstanceOf(ResponseUtility::class, $res);
    }
}

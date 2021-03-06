<?php
/*
 * Xibo Signage Ltd - https://xibo.org.uk
 * Copyright (C) 2015 Xibo Signage Ltd
 * (CloudTest.php)
 */
namespace XiboTests;

class CloudTest extends TestCase
{
    public function testThemeList()
    {
        $themes = (new \Xibo\Platform\Entity\Cloud($this->getProvider()))->getThemes();
        $this->assertGreaterThanOrEqual(2, count($themes));
    }

    public function testDomainList()
    {
        $domains = (new \Xibo\Platform\Entity\Cloud($this->getProvider()))->getDomains();
        $this->assertGreaterThanOrEqual(3, count($domains));
    }

    public function testInstanceList()
    {
        $instances = (new \Xibo\Platform\Entity\Cloud($this->getProvider()))->getInstances();
        $this->assertGreaterThanOrEqual(1, count($instances));
    }

    /*public function testRenewNow()
    {
        $instance = new \Xibo\Platform\Entity\Cloud($this->getProvider());
        $order = $instance->renewNow(4808);

        $this->assertNotEmpty($order->orderId);
    }*/
}
<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Customer\Model;

class GroupTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Magento\Customer\Model\Group
     */
    protected $groupModel;

    /**
     * @var \Magento\Customer\Api\Data\GroupInterfaceFactory
     */
    protected $groupFactory;

    protected function setUp()
    {
        $this->groupModel = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(
            \Magento\Customer\Model\Group::class
        );
        $this->groupFactory = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(
            \Magento\Customer\Api\Data\GroupInterfaceFactory::class
        );
    }

    public function testCRUD()
    {
        $this->groupModel->setCode('test');
        $crud = new \Magento\TestFramework\Entity($this->groupModel, ['customer_group_code' => uniqid()]);
        $crud->testCrud();
    }
}

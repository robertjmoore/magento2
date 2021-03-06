<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Setup\Test\Unit\Model\Description\Mixin;

class HeaderMixinTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Magento\Setup\Model\Description\Mixin\HeaderMixin
     */
    private $mixin;

    public function setUp()
    {
        $this->mixin = new \Magento\Setup\Model\Description\Mixin\HeaderMixin();
    }

    /**
     * @dataProvider getTestData
     */
    public function testApply($subject, $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->mixin->apply($subject));
    }

    public function getTestData()
    {
        return [
            ['', ''],
            [
                'Lorem ipsum dolor sit amet.' . PHP_EOL
                . 'Consectetur adipiscing elit.' . PHP_EOL
                . 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

                '<h1>Lorem ipsum</h1>' . PHP_EOL
                . 'Lorem ipsum dolor sit amet.' . PHP_EOL
                . '<h1>Consectetur</h1>' . PHP_EOL
                . 'Consectetur adipiscing elit.' . PHP_EOL
                . '<h1>Sed do eiusmod</h1>' . PHP_EOL
                . 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ]
        ];
    }
}

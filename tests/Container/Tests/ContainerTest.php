<?php
namespace Sinergi\Container\Tests;

use PHPUnit_Framework_TestCase;

class ContainerTest extends PHPUnit_Framework_TestCase
{
    public function testApplication()
    {
        new MockContainer();
    }
}

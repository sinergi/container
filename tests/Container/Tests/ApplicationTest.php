<?php
namespace Sinergi\Container\Tests;

use PHPUnit_Framework_TestCase;
use Sinergi\Container\Application;

class ApplicationTest extends PHPUnit_Framework_TestCase
{
    public function testApplication()
    {
        $app = new Application();
        $app->add(new MockApplication());
        $app->run();
    }
}

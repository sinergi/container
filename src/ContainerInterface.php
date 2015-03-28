<?php
namespace Sinergi\Container;

use Countable;
use IteratorAggregate;
use JsonSerializable;
use ArrayAccess;

interface ContainerInterface extends Countable, IteratorAggregate, ArrayAccess, JsonSerializable
{
    public function get($key, $default = null);
    public function set($key, $value);
}

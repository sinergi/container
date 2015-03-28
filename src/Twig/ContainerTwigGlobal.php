<?php

namespace Sinergi\Container\Twig;

use Sinergi\Container\ContainerInterface;

class ContainerTwigGlobal
{
    /**
     * @var string
     */
    private $service;

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @param string $service
     * @param ContainerInterface $container
     */
    public function __construct($service, ContainerInterface $container)
    {
        $this->service = $service;
        $this->container = $container;
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call($name, array $arguments)
    {
        $service = call_user_func([$this->container, $this->service]);
        return call_user_func_array([$service, $name], $arguments);
    }

    /**
     * @return null|string
     */
    public function __toString()
    {
        $object = call_user_func([$this->container, $this->service]);
        if (is_object($object)) {
            return (string)$object;
        }
        return null;
    }
}

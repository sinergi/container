<?php
namespace Sinergi\Container;

class Application
{
    /**
     * @var array
     */
    private $applications = [];

    /**
     * @var string
     */
    private $env;

    /**
     * @var string
     */
    private $runtime;

    /**
     * @var string
     */
    private $srcDir;

    /**
     * @var string
     */
    private $rootDir;

    public function run()
    {
        foreach ($this->applications as $application) {
            $this->runApplication($application);
        }
    }

    /**
     * @param ApplicationInterface $application
     */
    public function add(ApplicationInterface $application)
    {
        $this->applications[spl_object_hash($application)] = $application;
    }

    /**
     * @param ApplicationInterface $application
     */
    private function runApplication(ApplicationInterface $application)
    {
        $application->run();
    }

    /**
     * @param string $env
     * @return $this
     */
    public function setEnv($env)
    {
        $this->env = $env;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * @param string $runtime
     * @return $this
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;
        return $this;
    }

    /**
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * @param string $srcDir
     * @return $this
     */
    public function setSrcDir($srcDir)
    {
        $this->srcDir = $srcDir;
        return $this;
    }

    /**
     * @return string
     */
    public function getSrcDir()
    {
        return $this->srcDir;
    }

    /**
     * @param string $rootDir
     * @return $this
     */
    public function setRootDir($rootDir)
    {
        $this->rootDir = $rootDir;
        return $this;
    }

    /**
     * @return string
     */
    public function getRootDir()
    {
        return $this->rootDir;
    }
}

<?php

namespace Ndewez\ApplicationConsoleBundle\Application;

use Ndewez\ApplicationConsoleBundle\Command\ContainerCommand;
use Ndewez\ApplicationConsoleBundle\Dependency\ContainerInjection;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Console\Application as ConsoleApplication;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * Class Application.
 */
class Application extends ConsoleApplication
{
    use ContainerInjection;

    /**
     * @param string $pathConfigFile
     * @param string $name
     * @param string $version
     */
    public function __construct($pathConfigFile, $name = 'UNKNOWN', $version = 'UNKNOWN')
    {
        $this->initContainer($pathConfigFile);
        parent::__construct($name, $version);
    }

    /**
     * @param string $pathConfigFile
     */
    protected function initContainer($pathConfigFile)
    {
        $file = new \SplFileInfo($pathConfigFile);

        $this->container = new ContainerBuilder();
        $configDirectory = new FileLocator($file->getPath());
        $loader = new XmlFileLoader($this->container, $configDirectory);
        $loader->load($file->getBasename());
    }

    /**
     * @param ContainerCommand $command
     *
     * @return ContainerCommand
     */
    public function addContainerCommand(ContainerCommand $command)
    {
        $command->setContainer($this->container);

        return $this->add($command);
    }
}

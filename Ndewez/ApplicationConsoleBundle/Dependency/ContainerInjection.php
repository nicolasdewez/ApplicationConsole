<?php

namespace Ndewez\ApplicationConsoleBundle\Dependency;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class ContainerInjection.
 */
trait ContainerInjection
{
    /** @var ContainerInterface */
    protected $container;

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }
}

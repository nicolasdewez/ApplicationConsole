<?php

namespace Ndewez\ApplicationConsoleBundle\Command;

use Ndewez\ApplicationConsoleBundle\Dependency\ContainerInjection;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * ContainerCommand.
 */
abstract class ContainerCommand extends Command implements ContainerAwareInterface
{
    use ContainerInjection;
}

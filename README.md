ApplicationConsoleBundle
========================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/20fce30e-2616-4a51-8ff6-00e3d9dd1a1b/mini.png)](https://insight.sensiolabs.com/projects/20fce30e-2616-4a51-8ff6-00e3d9dd1a1b)

The `ApplicationConsoleBundle` provides use console application with container in application and commands.


# Installation

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
    $ composer require nicolasdewez/application-console-bundle
```

This command requires you to have Composer installed globally, as explained
in the ``installation chapter``_ of the Composer documentation.


# Using

Create an application file console.

```php

    use App\Command\MyCommand;
    use Ndewez\ApplicationConsoleBundle\Application\Application;
    
    $application = new Application(__DIR__.'/config/services.xml');
    $application->addContainerCommand(new MyCommand());
    $application->run();
```

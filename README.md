ApplicationConsoleBundle
========================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/20fce30e-2616-4a51-8ff6-00e3d9dd1a1b/mini.png)](https://insight.sensiolabs.com/projects/20fce30e-2616-4a51-8ff6-00e3d9dd1a1b)

The `ApplicationConsoleBundle` ...


# Installation

## Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
    $ composer require nicolasdewez/application-console-bundle
```

This command requires you to have Composer installed globally, as explained
in the ``installation chapter``_ of the Composer documentation.

## Step 2: Enable the Bundle

Then, enable the bundle by adding the following line in the ````app/AppKernel.php````
file of your project:

```php
    // app/AppKernel.php

    // ...
    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                // ...

                new Ndewez\ApplicationConsoleBundle\NdewezApplicationConsoleBundle(),
            );

            // ...
        }

        // ...
    }
```

# Using

Create an application file console.

```php

    use App\Application\Application;
    use App\Command\MyCommand;
    
    $application = new Application(__DIR__.'/config/services.xml');
    $application->addContainerCommand(new MyCommand());
    $application->run();
```

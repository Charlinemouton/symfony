<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.k1LR1YD' shared service.

return $this->privates['service_locator.k1LR1YD'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('generator' => function (): ?\App\GreetingGenerator {
    return ($this->privates['App\GreetingGenerator'] ?? $this->privates['App\GreetingGenerator'] = new \App\GreetingGenerator());
}, 'logger' => function () {
    return ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService());
}));
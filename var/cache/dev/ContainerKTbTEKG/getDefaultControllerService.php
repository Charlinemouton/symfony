<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\DefaultController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/DefaultController.php';

$this->services['App\Controller\DefaultController'] = $instance = new \App\Controller\DefaultController();

$instance->setContainer([new \Symfony\Component\DependencyInjection\ServiceLocator(array('doctrine' => function () {
    return ($this->services['doctrine'] ?? $this->getDoctrineService());
}, 'http_kernel' => function () {
    return ($this->services['http_kernel'] ?? $this->getHttpKernelService());
}, 'request_stack' => function () {
    return ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack());
}, 'router' => function () {
    return ($this->services['router'] ?? $this->getRouterService());
}, 'security.authorization_checker' => function () {
    return ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService());
}, 'security.token_storage' => function () {
    return ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage());
}, 'serializer' => function () {
    return ($this->services['serializer'] ?? $this->getSerializerService());
}, 'twig' => function () {
    return ($this->services['twig'] ?? $this->getTwigService());
})), 'withContext']('App\\Controller\\DefaultController', $this));

return $instance;

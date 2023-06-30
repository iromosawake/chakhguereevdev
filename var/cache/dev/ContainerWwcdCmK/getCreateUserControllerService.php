<?php

namespace ContainerWwcdCmK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateUserControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CreateUserController' shared autowired service.
     *
     * @return \App\Controller\CreateUserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CreateUserController.php';

        $container->services['App\\Controller\\CreateUserController'] = $instance = new \App\Controller\CreateUserController($container->getEnv('AUTH0_DOMAIN'), $container->getEnv('AUTH0_CLIENT_ID'), $container->getEnv('AUTH0_MANAGEMENT_TOKEN'), $container->getEnv('AUTH0_CLIENT_SECRET'), $container->getEnv('AUTH0_AUDIENCE'), $container->getEnv('COOKIE_SECRET'), $container->getEnv('LOGIN_REDIRECT_URI'));

        $instance->setContainer(($container->privates['.service_locator.ZYbxp_V'] ?? $container->load('get_ServiceLocator_ZYbxpVService'))->withContext('App\\Controller\\CreateUserController', $container));

        return $instance;
    }
}

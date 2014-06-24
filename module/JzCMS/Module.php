<?php
namespace JzCMS;

use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\InitProviderInterface;


class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return [
            'invokables' => [
                'JzCMS\Event\Admin' => 'JzCMS\Event\Admin'
            ],
            'factories' => [
                'jz-cms-admin-navigation-factory' => 'JzCMS\Service\Factory\Admin\Navigation'
            ],


        ];
    }


}

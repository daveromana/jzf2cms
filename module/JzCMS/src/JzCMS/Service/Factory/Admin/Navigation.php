<?php


namespace JzCMS\Service\Factory\Admin;

use Zend\Navigation\Service\AbstractNavigationFactory;

class Navigation extends AbstractNavigationFactory
{
    protected function getName()
    {
        return 'jz-cms-admin';
    }
}

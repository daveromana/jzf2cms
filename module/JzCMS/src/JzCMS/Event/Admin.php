<?php

namespace JzCMS\Event;

use Zend\EventManager\Event;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;
use Zend\View\Model\ModelInterface;
use Zend\View\Model\ViewModel;

class Admin extends Event implements ServiceLocatorAwareInterface
{
    use ServiceLocatorAwareTrait;

    const INDEX_DISPLAY_PRE = 'index.pre';
    const EDIT_DISPLAY_PRE = 'edit.display.pre';
    const EDIT_PRE = 'edit.pre';
    const EDIT_POST = 'edit.post';
    const EDIT_FAIL = 'edit.fail';
    const DELETE_PRE = 'delete.pre';
    const DELETE_POST = 'delete.post';
    const DELETE_FAIL = 'delete.fail';
    const ADD_PRE = 'add.pre';
    const ADD_POST = 'add.post';
    const ADD_DISPLAY_PRE = 'add.display.pre';

    public function setViewModel(ModelInterface $model)
    {
        $this->setParam('viewModel', $model);
        return $this;
    }

    public function getViewModel()
    {
        $viewModel = $this->getParam('viewModel');

        if (!$viewModel) {
            $viewModel = new ViewModel();

            $this->setViewModel($viewModel);
        }

        return $viewModel;

    }
}
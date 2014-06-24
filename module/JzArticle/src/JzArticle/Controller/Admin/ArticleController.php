<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 6/22/14
 * Time: 3:08 PM
 */
namespace JzArticle\Controller\Admin;

use JzCMS\Event\Admin;
use Zend\Mvc\Controller\AbstractActionController;

class ArticleController extends AbstractActionController
{
    public function indexAction()
    {
        $adminEvent = $this -> serviceLocator -> get('JzCMS\Event\Admin');
        $this->getEventManager()->trigger(Admin::INDEX_DISPLAY_PRE, $adminEvent);

        $this->layout('jz-cms-layout');

        return $adminEvent->getViewModel();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 6/22/14
 * Time: 3:08 PM
 */
namespace JzArticle\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ArticleController extends AbstractActionController
{
    public function indexAction()
    {
        echo __CLASS__ . __FUNCTION__;
    }
}
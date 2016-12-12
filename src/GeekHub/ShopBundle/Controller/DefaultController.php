<?php

namespace GeekHub\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeekHubShopBundle:Default:index.html.twig');
    }
}

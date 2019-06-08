<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductController extends Controller
{
    /**
     * @Route("/product/create")
     */
    public function createAction()
    {
        return $this->render('@App/Product/create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/product/update")
     */
    public function updateAction()
    {
        return $this->render('@App/Product/update.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/product/delete")
     */
    public function deleteAction()
    {
        return $this->render('@App/Product/delete.html.twig', array(
            // ...
        ));
    }

}

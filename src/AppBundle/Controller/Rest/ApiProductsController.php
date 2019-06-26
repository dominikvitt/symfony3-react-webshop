<?php

use FOS\RestBundle\Controller\Annotations as Rest;

class ApiProductsController extends FOSRestController {
    /**
     * Retrieves an Product resource
     * @Rest\Get("/products/{productId}")
     */
    public function getProduct(int $productId): View
    {
        $product = $this->productRepository->findById($productId);
        // In case our GET was a success we need to return a 200 HTTP OK response with the request object
        return View::create($product, Response::HTTP_OK);
    }
}
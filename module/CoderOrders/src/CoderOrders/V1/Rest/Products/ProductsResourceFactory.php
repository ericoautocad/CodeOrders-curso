<?php
namespace CoderOrders\V1\Rest\Products;

class ProductsResourceFactory
{
    public function __invoke($services)
    {
        return new ProductsResource($services->get('CoderOrders\\V1\\Rest\\Products\\ProductsRepository'));
    }
}
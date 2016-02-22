<?php
namespace CoderOrders\V1\Rest\Products;

class ProductsResourceFactory
{
    public function __invoke($services)
    {
        $usersRepository = $services->get('CoderOrders\\V1\\Rest\\Users\\UsersRepository');
        return new ProductsResource($services->get('CoderOrders\\V1\\Rest\\Products\\ProductsRepository'), $usersRepository);
    }
}

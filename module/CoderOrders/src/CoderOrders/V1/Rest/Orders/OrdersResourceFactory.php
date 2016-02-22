<?php
namespace CoderOrders\V1\Rest\Orders;

class OrdersResourceFactory
{
    public function __invoke($services)
    {
        $ordersRepository = $services->get('CoderOrders\\V1\\Rest\\Orders\\OrdersRepository');
        $ordersService = $services->get('CoderOrders\\V1\\Rest\\Orders\\OrdersService');
        $usersRepository = $services->get('CoderOrders\\V1\\Rest\\Users\\UsersRepository');

        return new OrdersResource($ordersRepository, $ordersService, $usersRepository);
    }
}

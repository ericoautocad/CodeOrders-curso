<?php
/**
 * Created by PhpStorm.
 * User: erico.oliveira
 * Date: 07/01/16
 * Time: 16:54
 */

namespace CoderOrders\V1\Rest\Orders;


use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class OrdersServiceFactory implements  FactoryInterface {

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $orderRepository = $serviceLocator->get('CoderOrders\\V1\\Rest\\Orders\\OrdersRepository');

        return new OrdersService($orderRepository);
    }
}
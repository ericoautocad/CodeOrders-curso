<?php
/**
 * Created by PhpStorm.
 * User: erico.oliveira
 * Date: 07/01/16
 * Time: 15:27
 */

namespace CoderOrders\V1\Rest\Orders;


use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ClassMethods;

class OrdersRepositoryFactory implements  FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $dbAdapter = $serviceLocator->get('DbAdapter');
        $hydratory = new HydratingResultSet(new ClassMethods(), new OrdersEntity());

        $tableGateway = new TableGateway('orders', $dbAdapter, null , $hydratory);

        $orderItemTableGateway = $serviceLocator->get('CoderOrders\\V1\\Rest\\Orders\\OrdemItemTableGateway');

        return  new OrdersRepository($tableGateway, $orderItemTableGateway);

    }
}
<?php
/**
 * Created by PhpStorm.
 * User: erico.oliveira
 * Date: 07/01/16
 * Time: 15:05
 */

namespace CoderOrders\V1\Rest\Orders;


use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ClassMethods;

class OrdemItemTableGatewayFactory implements FactoryInterface
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

        $hydratory = new HydratingResultSet(new ClassMethods(), new OrderItemEntity());

        $tableGateway = new TableGateway('order_items', $dbAdapter, null , $hydratory);

        return $tableGateway;
    }
}
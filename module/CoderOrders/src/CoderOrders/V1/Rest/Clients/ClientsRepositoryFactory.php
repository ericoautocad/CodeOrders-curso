<?php
/**
 * Created by PhpStorm.
 * User: erico.oliveira
 * Date: 22/02/16
 * Time: 13:26
 */

namespace CoderOrders\V1\Rest\Clients;


use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ClientsRepositoryFactory implements FactoryInterface {

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dbAdapter = $serviceLocator->get('DbAdapter');
        $clientsMapper = new ClientsMapper();
        $hydratory = new HydratingResultSet($clientsMapper, new ClientsEntity());

        $tableGateway =  new TableGateway('clients', $dbAdapter, null , $hydratory);

        $clientsRepository =  new ClientsRepository($tableGateway);

        return $clientsRepository;
    }
}
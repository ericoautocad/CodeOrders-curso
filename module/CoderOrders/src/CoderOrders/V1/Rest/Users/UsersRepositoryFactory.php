<?php
/**
 * Created by PhpStorm.
 * User: erico.oliveira
 * Date: 06/01/16
 * Time: 16:08
 */

namespace CoderOrders\V1\Rest\Users;


use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ClassMethods;

class UsersRepositoryFactory implements  FactoryInterface
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
        $usersMapper = new UsersMapper();
        //$hydrator = new HydratingResultSet($usersMapper, new UsersEntity());
        $hydrator = new HydratingResultSet(new ClassMethods(), new UsersEntity());
        $tableGateway = new TableGateway('oauth_users', $dbAdapter, null, $hydrator);
        $usersRepository = new UsersRepository($tableGateway);
        return $usersRepository;
    }
}
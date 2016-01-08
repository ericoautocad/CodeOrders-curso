<?php
/**
 * Created by PhpStorm.
 * User: erico.oliveira
 * Date: 07/01/16
 * Time: 10:32
 */

namespace CoderOrders\V1\Rest\Products;


use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ProductsRepositoryFactory implements FactoryInterface
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
        $productsMapper = new ProductsMapper();
        $hydrator = new HydratingResultSet($productsMapper, new ProductsEntity());

        $tableGateway  =  new TableGateway('products', $dbAdapter, null, $hydrator);

        $productsRepository = new ProductsRepository($tableGateway);

        return $productsRepository;
    }
}
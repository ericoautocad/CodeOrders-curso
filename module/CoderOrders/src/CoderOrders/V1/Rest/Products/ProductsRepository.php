<?php
/**
 * Created by PhpStorm.
 * User: erico.oliveira
 * Date: 07/01/16
 * Time: 10:11
 */

namespace CoderOrders\V1\Rest\Products;


use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;

class ProductsRepository {

    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function findAll()
    {
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);
        return new ProductsCollection($paginatorAdapter);
    }

    public function find($id)
    {
        $resultSet = $this->tableGateway->select(['id' => (Int) $id]);
        return $resultSet->current();
    }

    public function insert( $data)
    {
        $hydrator = new ObjectProperty();
        $data = $hydrator->extract($data);

        return $this->tableGateway->insert($data);
    }

    public function update($data, $id)
    {
        $hydrator = new ObjectProperty();
        $data = $hydrator->extract($data);

        return $this->tableGateway->update($data, $id);
    }
} 
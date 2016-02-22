<?php
/**
 * Created by PhpStorm.
 * User: erico.oliveira
 * Date: 22/02/16
 * Time: 13:26
 */

namespace CoderOrders\V1\Rest\Clients;


use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Stdlib\Hydrator\ObjectProperty;
use Zend\Paginator\Adapter\DbTableGateway;

class ClientsRepository {

    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;

    }

    public function findAll()
    {
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);
        return new ClientsCollection($paginatorAdapter);
    }

    public function find($id)
    {
        $resultSet =  $this->tableGateway->select(['id' => (Int) $id]);
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

    public function delete($id)
    {
        return $this->tableGateway->delete($id);
    }
} 
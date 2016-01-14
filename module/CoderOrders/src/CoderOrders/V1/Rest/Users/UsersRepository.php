<?php
/**
 * Created by PhpStorm.
 * User: erico.oliveira
 * Date: 06/01/16
 * Time: 15:59
 */

namespace CoderOrders\V1\Rest\Users;


use Zend\Crypt\Password\Bcrypt;
use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;
use Zend\Stdlib\Hydrator\ObjectProperty;
use ZFTest\Hal\TestAsset\ClassMethods;

class UsersRepository {

    private $tableGateway;
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function findAll()
    {
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);
        return new UsersCollection($paginatorAdapter);
        //return $this->tableGateway->select();
    }

    public function find($id)
    {
        $resultSet = $this->tableGateway->select(['id' => (Int) $id]);
        return $resultSet->current();
    }

    public function findByUsername($username)
    {
        return $this->tableGateway->select(['username' => $username])->current();
    }

    public function insert( $data)
    {
        $hydrator = new ObjectProperty();
        $data = $hydrator->extract($data);
        if(!empty($data['password'])){
            $bcrypt = new Bcrypt();
            $data['password'] = $bcrypt->create($data['password']);
        }

       return $this->tableGateway->insert($data);
    }

    public function update($data, $id)
    {
        $hydrator = new ObjectProperty();
        $data = $hydrator->extract($data);
        if(!empty($data['password'])){
            $bcrypt = new Bcrypt();
            $data['password'] = $bcrypt->create($data['password']);
        }
        return $this->tableGateway->update($data, $id);
    }

} 
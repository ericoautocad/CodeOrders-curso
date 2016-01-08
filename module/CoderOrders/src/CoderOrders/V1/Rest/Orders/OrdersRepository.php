<?php
/**
 * Created by PhpStorm.
 * User: erico.oliveira
 * Date: 07/01/16
 * Time: 15:24
 */

namespace CoderOrders\V1\Rest\Orders;




use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\Stdlib\Hydrator\ObjectProperty;

class OrdersRepository {

    private $tableGateway;
    private $orderItemTableGateway;

    public  function __construct(AbstractTableGateway $tableGateway, AbstractTableGateway $orderItemTableGateway)
    {

        $this->tableGateway = $tableGateway;
        $this->orderItemTableGateway = $orderItemTableGateway;
    }

    public function findAll()
    {
        $hydrator = new ClassMethods();
        $hydrator->addStrategy('items', new OrderItemHydratorStrategy(new ClassMethods()));
        $orders = $this->tableGateway->select();
        $res = [];

        foreach($orders as $order){
            $items = $this->orderItemTableGateway->select(['order_id' => $order->getId()]);
            foreach($items as $item){
                $order->addItem($item);
            }

            $data = $hydrator->extract($order);
            $res[] = $data;
        }

        //$paginatorAdapter = new DbTableGateway($tableGateway);
        $arrayAdapter = new ArrayAdapter($res);
        $ordersCollection = new OrdersCollection($arrayAdapter);
        return $ordersCollection;
        //return $res;
    }

    public function find($id)
    {
        $resultSet = $this->tableGateway->select(['id' => (Int) $id]);
        return $resultSet->current();
    }

    public function insert(array $data)
    {
;        $this->tableGateway->insert($data);
        $id = $this->tableGateway->getLastInsertValue();

        return $id;
    }

    public function update($data , $id)
    {
        return $this->tableGateway->update($data, array('id' => $id));
    }

    public function insertItem(array $data)
    {
        $this->orderItemTableGateway->insert($data);

        return $this->orderItemTableGateway->getLastInsertValue();
    }

    /**
     * @return \Zend\Db\TableGateway\AbstractTableGateway
     */
    public function getTableGateway()
    {
        return $this->tableGateway;
    }


} 
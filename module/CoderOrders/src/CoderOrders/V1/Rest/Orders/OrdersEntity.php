<?php
namespace CoderOrders\V1\Rest\Orders;

class OrdersEntity
{
    protected $id;
    protected $client_id;
    protected $user_id;
    protected $ptype_id;
    protected $total;
    protected $status;
    protected $created_at;
    protected $items;

    function __construct()
    {
        $this->items = [];
    }

    /**
     * @param mixed $client_id
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $items
     */
    public function addItem($item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $ptype_id
     */
    public function setPtypeId($ptype_id)
    {
        $this->ptype_id = $ptype_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPtypeId()
    {
        return $this->ptype_id;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }




}

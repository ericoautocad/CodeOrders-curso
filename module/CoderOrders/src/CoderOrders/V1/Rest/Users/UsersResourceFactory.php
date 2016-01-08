<?php
namespace CoderOrders\V1\Rest\Users;

class UsersResourceFactory
{
    public function __invoke($services)
    {
        return new UsersResource($services->get('CoderOrders\\V1\\Rest\\Users\\UsersRepository'));
    }
}

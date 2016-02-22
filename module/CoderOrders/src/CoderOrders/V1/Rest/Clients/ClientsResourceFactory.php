<?php
namespace CoderOrders\V1\Rest\Clients;

class ClientsResourceFactory
{
    public function __invoke($services)
    {
        $repository = $services->get('CoderOrders\\V1\\Rest\\Clients\\ClientsRepository');
        $usersRepository = $services->get('CoderOrders\\V1\\Rest\\Users\\UsersRepository');
        return new ClientsResource($repository, $usersRepository);
    }
}

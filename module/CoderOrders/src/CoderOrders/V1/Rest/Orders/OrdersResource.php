<?php
namespace CoderOrders\V1\Rest\Orders;

use CoderOrders\V1\Rest\Users\UsersRepository;
use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

class OrdersResource extends AbstractResourceListener
{

    private $repository;
    private $repositoryUser;
    private $service;

    public function __construct(OrdersRepository $repository, OrdersService $service, UsersRepository $repositoryUser)
    {
        $this->repository = $repository;
        $this->repositoryUser = $repositoryUser;
        $this->service    = $service;
    }
    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        $user = $this->repositoryUser->findByUsername( $this->getIdentity()->getRoleId() );
        if($user->getRole() != "salesman"){
            return new ApiProblem(403, 'The user had not access to this info');
        }

        $result =  $this->service->insert($data);
        if($result == "error"){
            return new ApiProblem(405, 'Error processing order');
        }
        return $result;
        //return new ApiProblem(405, 'The POST method has not been defined');
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
        $user = $this->repositoryUser->findByUsername( $this->getIdentity()->getRoleId() );
         if($user->getRole() != "salesman"){
             return new ApiProblem(403, 'The user had not access to this info');
         }

        return $this->repository->find($id, $user->getId());
        //return new ApiProblem(405, 'The GET method has not been defined for individual resources');
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = array())
    {
        $user = $this->repositoryUser->findByUsername( $this->getIdentity()->getRoleId() );
        if($user->getRole() != "salesman"){
            return new ApiProblem(403, 'The user had not access to this info');
        }
        return $this->repository->findAll($user->getId());
        //return new ApiProblem(405, 'The GET method has not been defined for collections');
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        return ['success' => true];
        //return new ApiProblem(405, 'The PUT method has not been defined for individual resources');
    }
}

<?php
namespace CoderOrders\V1\Rest\Clients;

use CoderOrders\V1\Rest\Users\UsersRepository;
use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

class ClientsResource extends AbstractResourceListener
{
    private $repository;
    private $userRepository;

    public function __construct(ClientsRepository $repository, UsersRepository $userRepository)
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;
    }
    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        $user = $this->userRepository->findByUsername( $this->getIdentity()->getRoleId() );
        if($user->getRole() != "admin"){
            return new ApiProblem(403, 'The user had not access to this info');
        }
        return $this->repository->insert($data);
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
        $user = $this->userRepository->findByUsername( $this->getIdentity()->getRoleId() );
        if($user->getRole() != "admin"){
            return new ApiProblem(403, 'The user had not access to this info');
        }
        return $this->repository->delete($id);
        //return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
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
        $user = $this->userRepository->findByUsername( $this->getIdentity()->getRoleId() );
        if(!in_array($user->getRole(), array("admin", "salesman"))){
            return new ApiProblem(403, 'The user had not access to this info');
        }
        return $this->repository->find($id);
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
        $user = $this->userRepository->findByUsername( $this->getIdentity()->getRoleId() );
        if(!in_array($user->getRole(), array("admin", "salesman"))){
            return new ApiProblem(403, 'The user had not access to this info');
        }
        return $this->repository->findAll();
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
        $user = $this->userRepository->findByUsername( $this->getIdentity()->getRoleId() );
        if($user->getRole() != "admin"){
            return new ApiProblem(403, 'The user had not access to this info');
        }
        return $this->repository->update($data, $id);
        //return new ApiProblem(405, 'The PUT method has not been defined for individual resources');
    }
}

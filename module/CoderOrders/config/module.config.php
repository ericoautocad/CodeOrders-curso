<?php
return array(
    'router' => array(
        'routes' => array(
            'coder-orders.rest.ptypes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/ptypes[/:ptypes_id]',
                    'defaults' => array(
                        'controller' => 'CoderOrders\\V1\\Rest\\Ptypes\\Controller',
                    ),
                ),
            ),
            'coder-orders.rest.users' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:users_id]',
                    'defaults' => array(
                        'controller' => 'CoderOrders\\V1\\Rest\\Users\\Controller',
                    ),
                ),
            ),
            'coder-orders.rest.products' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/products[/:products_id]',
                    'defaults' => array(
                        'controller' => 'CoderOrders\\V1\\Rest\\Products\\Controller',
                    ),
                ),
            ),
            'coder-orders.rest.orders' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/orders[/:orders_id]',
                    'defaults' => array(
                        'controller' => 'CoderOrders\\V1\\Rest\\Orders\\Controller',
                    ),
                ),
            ),
            'coder-orders.rest.clients' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/clients[/:clients_id]',
                    'defaults' => array(
                        'controller' => 'CoderOrders\\V1\\Rest\\Clients\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'coder-orders.rest.ptypes',
            1 => 'coder-orders.rest.users',
            3 => 'coder-orders.rest.products',
            4 => 'coder-orders.rest.orders',
            5 => 'coder-orders.rest.clients',
        ),
    ),
    'zf-rest' => array(
        'CoderOrders\\V1\\Rest\\Ptypes\\Controller' => array(
            'listener' => 'CoderOrders\\V1\\Rest\\Ptypes\\PtypesResource',
            'route_name' => 'coder-orders.rest.ptypes',
            'route_identifier_name' => 'ptypes_id',
            'collection_name' => 'ptypes',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '2',
            'page_size_param' => null,
            'entity_class' => 'CoderOrders\\V1\\Rest\\Ptypes\\PtypesEntity',
            'collection_class' => 'CoderOrders\\V1\\Rest\\Ptypes\\PtypesCollection',
            'service_name' => 'ptypes',
        ),
        'CoderOrders\\V1\\Rest\\Users\\Controller' => array(
            'listener' => 'CoderOrders\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'coder-orders.rest.users',
            'route_identifier_name' => 'users_id',
            'collection_name' => 'users',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '1',
            'page_size_param' => null,
            'entity_class' => 'CoderOrders\\V1\\Rest\\Users\\UsersEntity',
            'collection_class' => 'CoderOrders\\V1\\Rest\\Users\\UsersCollection',
            'service_name' => 'users',
        ),
        'CoderOrders\\V1\\Rest\\Products\\Controller' => array(
            'listener' => 'CoderOrders\\V1\\Rest\\Products\\ProductsResource',
            'route_name' => 'coder-orders.rest.products',
            'route_identifier_name' => 'products_id',
            'collection_name' => 'products',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '1',
            'page_size_param' => null,
            'entity_class' => 'CoderOrders\\V1\\Rest\\Products\\ProductsEntity',
            'collection_class' => 'CoderOrders\\V1\\Rest\\Products\\ProductsCollection',
            'service_name' => 'products',
        ),
        'CoderOrders\\V1\\Rest\\Orders\\Controller' => array(
            'listener' => 'CoderOrders\\V1\\Rest\\Orders\\OrdersResource',
            'route_name' => 'coder-orders.rest.orders',
            'route_identifier_name' => 'orders_id',
            'collection_name' => 'orders',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'CoderOrders\\V1\\Rest\\Orders\\OrdersEntity',
            'collection_class' => 'CoderOrders\\V1\\Rest\\Orders\\OrdersCollection',
            'service_name' => 'Orders',
        ),
        'CoderOrders\\V1\\Rest\\Clients\\Controller' => array(
            'listener' => 'CoderOrders\\V1\\Rest\\Clients\\ClientsResource',
            'route_name' => 'coder-orders.rest.clients',
            'route_identifier_name' => 'clients_id',
            'collection_name' => 'clients',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'CoderOrders\\V1\\Rest\\Clients\\ClientsEntity',
            'collection_class' => 'CoderOrders\\V1\\Rest\\Clients\\ClientsCollection',
            'service_name' => 'clients',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'CoderOrders\\V1\\Rest\\Ptypes\\Controller' => 'HalJson',
            'CoderOrders\\V1\\Rest\\Users\\Controller' => 'HalJson',
            'CoderOrders\\V1\\Rest\\Products\\Controller' => 'HalJson',
            'CoderOrders\\V1\\Rest\\Orders\\Controller' => 'HalJson',
            'CoderOrders\\V1\\Rest\\Clients\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'CoderOrders\\V1\\Rest\\Ptypes\\Controller' => array(
                0 => 'application/vnd.coder-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'CoderOrders\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.coder-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'CoderOrders\\V1\\Rest\\Products\\Controller' => array(
                0 => 'application/vnd.coder-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'CoderOrders\\V1\\Rest\\Orders\\Controller' => array(
                0 => 'application/vnd.coder-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'CoderOrders\\V1\\Rest\\Clients\\Controller' => array(
                0 => 'application/vnd.coder-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'CoderOrders\\V1\\Rest\\Ptypes\\Controller' => array(
                0 => 'application/vnd.coder-orders.v1+json',
                1 => 'application/json',
            ),
            'CoderOrders\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.coder-orders.v1+json',
                1 => 'application/json',
            ),
            'CoderOrders\\V1\\Rest\\Products\\Controller' => array(
                0 => 'application/vnd.coder-orders.v1+json',
                1 => 'application/json',
            ),
            'CoderOrders\\V1\\Rest\\Orders\\Controller' => array(
                0 => 'application/vnd.coder-orders.v1+json',
                1 => 'application/json',
            ),
            'CoderOrders\\V1\\Rest\\Clients\\Controller' => array(
                0 => 'application/vnd.coder-orders.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'CoderOrders\\V1\\Rest\\Ptypes\\PtypesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'coder-orders.rest.ptypes',
                'route_identifier_name' => 'ptypes_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'CoderOrders\\V1\\Rest\\Ptypes\\PtypesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'coder-orders.rest.ptypes',
                'route_identifier_name' => 'ptypes_id',
                'is_collection' => true,
            ),
            'CoderOrders\\V1\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'coder-orders.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'CoderOrders\\V1\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'coder-orders.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => true,
            ),
            'CoderOrders\\V1\\Rest\\Products\\ProductsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'coder-orders.rest.products',
                'route_identifier_name' => 'products_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'CoderOrders\\V1\\Rest\\Products\\ProductsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'coder-orders.rest.products',
                'route_identifier_name' => 'products_id',
                'is_collection' => true,
            ),
            'CoderOrders\\V1\\Rest\\Orders\\OrdersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'coder-orders.rest.orders',
                'route_identifier_name' => 'orders_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'CoderOrders\\V1\\Rest\\Orders\\OrdersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'coder-orders.rest.orders',
                'route_identifier_name' => 'orders_id',
                'is_collection' => true,
            ),
            'CoderOrders\\V1\\Rest\\Clients\\ClientsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'coder-orders.rest.clients',
                'route_identifier_name' => 'clients_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'CoderOrders\\V1\\Rest\\Clients\\ClientsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'coder-orders.rest.clients',
                'route_identifier_name' => 'clients_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'CoderOrders\\V1\\Rest\\Ptypes\\PtypesResource' => array(
                'adapter_name' => 'DbAdapter',
                'table_name' => 'ptypes',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'CoderOrders\\V1\\Rest\\Ptypes\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'CoderOrders\\V1\\Rest\\Ptypes\\PtypesResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'CoderOrders\\V1\\Rest\\Ptypes\\Controller' => array(
            'input_filter' => 'CoderOrders\\V1\\Rest\\Ptypes\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'CoderOrders\\V1\\Rest\\Ptypes\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
                'description' => 'Name of payment type',
                'error_message' => 'The name field is invalid',
            ),
        ),
        'CoderOrders\\V1\\Rest\\Clients\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '60',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'document',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'address',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '200',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'zipcode',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'city',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '60',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'state',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            6 => array(
                'name' => 'responsible',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '60',
                        ),
                    ),
                ),
            ),
            7 => array(
                'name' => 'email',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '100',
                        ),
                    ),
                ),
            ),
            8 => array(
                'name' => 'phone',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '15',
                        ),
                    ),
                ),
            ),
            9 => array(
                'name' => 'obs',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'CoderOrders\\V1\\Rest\\Users\\UsersResource' => 'CoderOrders\\V1\\Rest\\Users\\UsersResourceFactory',
            'CoderOrders\\V1\\Rest\\Users\\UsersRepository' => 'CoderOrders\\V1\\Rest\\Users\\UsersRepositoryFactory',
            'CoderOrders\\V1\\Rest\\Products\\ProductsResource' => 'CoderOrders\\V1\\Rest\\Products\\ProductsResourceFactory',
            'CoderOrders\\V1\\Rest\\Products\\ProductsRepository' => 'CoderOrders\\V1\\Rest\\Products\\ProductsRepositoryFactory',
            'CoderOrders\\V1\\Rest\\Orders\\OrdersResource' => 'CoderOrders\\V1\\Rest\\Orders\\OrdersResourceFactory',
            'CoderOrders\\V1\\Rest\\Orders\\OrdemItemTableGateway' => 'CoderOrders\\V1\\Rest\\Orders\\OrdemItemTableGatewayFactory',
            'CoderOrders\\V1\\Rest\\Orders\\OrdersRepository' => 'CoderOrders\\V1\\Rest\\Orders\\OrdersRepositoryFactory',
            'CoderOrders\\V1\\Rest\\Orders\\OrdersService' => 'CoderOrders\\V1\\Rest\\Orders\\OrdersServiceFactory',
            'CoderOrders\\V1\\Rest\\Clients\\ClientsResource' => 'CoderOrders\\V1\\Rest\\Clients\\ClientsResourceFactory',
            'CoderOrders\\V1\\Rest\\Clients\\ClientsRepository' => 'CoderOrders\\V1\\Rest\\Clients\\ClientsRepositoryFactory',
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'CoderOrders\\V1\\Rest\\Users\\Controller' => array(
                'collection' => array(
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ),
            ),
            'CoderOrders\\V1\\Rest\\Clients\\Controller' => array(
                'collection' => array(
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ),
            ),
        ),
    ),
);

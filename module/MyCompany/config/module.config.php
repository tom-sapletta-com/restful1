<?php
return array(
    'router' => array(
        'routes' => array(
            'my-company.rest.customers' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/customers[/:customers_id]',
                    'defaults' => array(
                        'controller' => 'MyCompany\\V1\\Rest\\Customers\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'my-company.rest.customers',
        ),
    ),
    'zf-rest' => array(
        'MyCompany\\V1\\Rest\\Customers\\Controller' => array(
            'listener' => 'MyCompany\\V1\\Rest\\Customers\\CustomersResource',
            'route_name' => 'my-company.rest.customers',
            'route_identifier_name' => 'customers_id',
            'collection_name' => 'customers',
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
            'entity_class' => 'MyCompany\\V1\\Rest\\Customers\\CustomersEntity',
            'collection_class' => 'MyCompany\\V1\\Rest\\Customers\\CustomersCollection',
            'service_name' => 'customers',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'MyCompany\\V1\\Rest\\Customers\\Controller' => 'Json',
        ),
        'accept_whitelist' => array(
            'MyCompany\\V1\\Rest\\Customers\\Controller' => array(
                0 => 'application/vnd.my-company.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'MyCompany\\V1\\Rest\\Customers\\Controller' => array(
                0 => 'application/vnd.my-company.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'MyCompany\\V1\\Rest\\Customers\\CustomersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'my-company.rest.customers',
                'route_identifier_name' => 'customers_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'MyCompany\\V1\\Rest\\Customers\\CustomersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'my-company.rest.customers',
                'route_identifier_name' => 'customers_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'MyCompany\\V1\\Rest\\Customers\\CustomersResource' => array(
                'adapter_name' => 'DB\\Customers',
                'table_name' => 'customers',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'MyCompany\\V1\\Rest\\Customers\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'MyCompany\\V1\\Rest\\Customers\\CustomersResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'MyCompany\\V1\\Rest\\Customers\\Controller' => array(
            'input_filter' => 'MyCompany\\V1\\Rest\\Customers\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'MyCompany\\V1\\Rest\\Customers\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
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
                            'max' => null,
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'location',
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
                            'max' => null,
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'activity',
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
                            'max' => null,
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'phone',
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
                            'max' => null,
                        ),
                    ),
                ),
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'MyCompany\\V1\\Rest\\Customers\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
            ),
        ),
    ),
);

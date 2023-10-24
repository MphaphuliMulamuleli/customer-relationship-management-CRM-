<?php 
$moduleVardefs['lt_customer'] = [
    'label' => 'Customer',
    'detail_view_class' => 'CustomerDetailView',
    'edit_view_class' => 'CustomerEditView',
    'related_modules' => [
     
        'lt_policy' => [
            'relationship_type' => 'one-to-many',
            'relation_key_rhs' => 'customer_id',
        ]
    ],

    'fields' => [
        'id' => [],
        'first_name' => [
            'type' => 'string',
            'null' => true,
            'length' => 255,
            'default' => ''
        ],
        'last_name' => [
            'type' => 'string',
            'null' => true,
            'length' => 255,
            'default' => ''
        ],
        'id_number' => [
            'type' => 'string',
            'null' => true,
            'length' => 255,
            'default' => ''
        ],
        'phone' => [
            'type' => 'string',
            'null' => true,
            'length' => 20,
            'default' => ''
        ],
        'id_number_status' => [
            'type' => 'string',
            'null' => true,
            'length' => 50,
            'default' => ''
        ]
    ],
    'detail_view_fields' => [
        ['first_name', 'last_name'],
        ['id_number', 'phone'],
        ['id_number_status'],
    ],
    'edit_view_fields' => [
        ['first_name', 'last_name'],
        ['id_number', 'phone'],
        ['id_number_status'],
    ],
    'list_view_fields' => ['first_name', 'last_name', 'id_number']
];

<?php 

$moduleVardefs['lt_case'] = [
    'label' => 'Case',
    'detail_view_class' => 'CaseDetailView',
    'edit_view_class' => 'CaseEditView',
    'related_modules' => [
        'lt_customer' => [
            'relationship_type' => 'many-to-one',
            'relation_key_lhs' => 'customer_id',
        ],
        'lt_policy' => [
            'relationship_type' => 'many-to-one',
            'relation_key_lhs' => 'policy_id',
        ],
    ],

    'fields' => [
        'id' => [],
        'case_id' => [
            'type' => 'string',
            'null' => true,
            'length' => 255,
            'default' => ''
        ],
        'customer_id' => [
            'type' => 'id', 
            'name' => 'customer_id',
            'link' => 'lt_customer', 
            'reportable' => true,
            'vname' => 'LBL_CUSTOMER', 
        ],
        'policy_id' => [
            'type' => 'id',
            'name' => 'policy_id',
            'link' => 'lt_policy', 
            'reportable' => true,
            'vname' => 'LBL_POLICY',
        ],
        'type' => [
            'type' => 'string',
            'null' => true,
            'length' => 255,
            'default' => ''
        ],
        'status' => [
            'type' => 'string',
            'null' => true,
            'length' => 255,
            'default' => ''
        ],
    ],

    'detail_view_fields' => [
        ['case_id', 'policy_id'],
        ['type', 'status'],
    ],

    'edit_view_fields' => [
        ['case_id', 'policy_id'],
        ['type', 'status'],
    ],

    'list_view_fields' => ['case_id', 'policy_id', 'type', 'status'],
];


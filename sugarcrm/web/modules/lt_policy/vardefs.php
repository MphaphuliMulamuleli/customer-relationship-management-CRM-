<?php

$moduleVardefs['lt_policy'] = [
    'label' => 'Policy',
    'detail_view_class' => 'PolicyDetailView',
    'edit_view_class' => 'PolicyEditView',
    'related_modules' => [
        'lt_premium_payer' => [
            'relationship_type' => 'many-to-one',
            'relation_key_lhs' => 'premium_payer_id',
        ],
        'lt_dependant' => [
            'relationship_type' => 'many-to-many',
            'join_table' => 'policy_dependant',
            'join_key_lhs' => 'policy_id',
            'join_key_rhs' => 'dependant_id',
        ],
        'lt_benefit' => [
            'relationship_type' => 'one-to-many',
            'relation_key_rhs' => 'policy_id',
        ]
    ],

    'fields' => [
        'id' => [],
        'customer_id' => [
            'type' => 'integer',
            'null' => true,
            'length' => null,
            'default' => ''
        ],
        'premium_payer_id' => [
            'type' => 'integer',
            'null' => true,
            'length' => null,
            'default' => ''
        ],
        'active' => [
            'type' => 'boolean',
            'null' => false,
            'length' => null,
            'default' => true
        ]
    ],

    'detail_view_fields' => [
        ['name', 'description'],
        ['active'],
    ],
    'edit_view_fields' => [
        ['name', 'description'],
        ['active'],
    ],
    'list_view_fields' => ['name', 'description']
];

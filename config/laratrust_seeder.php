<?php

return [
    'role_structure' => [
        'super_admin' => [
            'products' => 'c,r,u,d',
            'slider' => 'c,r,u,d',
            'users' => 'c,r,u,d',
        ],
        'admin' => []

    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];

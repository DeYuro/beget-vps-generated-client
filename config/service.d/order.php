<?php

return [
    'name'       => 'OrderServiceFactory',
    'class'      => \app\lib\order\OrderServiceFactory::class,
    'singleton'  => true,
    'components' => [
        'creator' => [
            'class' => \app\lib\order\actions\Creator::class,
        ],
    ],
];


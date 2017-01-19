<?php

return [

    'list' => [
        'columns' => [
            'id',
            'short_string',
            'enum',
            'date',
            'location',
            'color',
        ],

        'filters' => [
            'enum',
            'string',
            'text',
        ]
    ],

    'form' => [

        'fields' => [
            'string',
            'short_string',
            'text' => [
                'display_strategy' => 'textarea',
                'options' => [
                    'rows' => 5,
                ]
            ],
            'richtext',
            'boolean',
            'integer',
            'decimal',
            'enum',
            'date',
            'datetime',
            'color' => 'colorpicker',
            'location' => [
                'store_strategy'   => 'location-fields',
                'display_strategy' => 'locationpicker',
                'options' => [
                    'default'    => true,
                    'longitude_name' => 'longitude',
                    'latitude_name'  => 'latitude',
                    'location_name'  => 'location',
                ],
            ],
            'tags' => [
                'display_strategy' => 'taggable',
                'store_strategy'   => 'taggable',
            ]
        ]
    ],

];

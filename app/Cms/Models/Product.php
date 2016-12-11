<?php

return [

    'form' => [

        'layout' => [
            'tab-main' => [
                'type' => 'tab',
                'label' => 'Main',
                'children' => [
                    'set-main' => [
                        'type' => 'fieldset',
                        'label' => 'Main',
                        'children' => [
                            'model_name',
                            'brand',
                        ],
                    ],
                    'set-price' => [
                        'type' => 'fieldset',
                        'label' => 'Price',
                        'children' => [
                            'price',
                            'sale',
                        ],
                    ],
                    'set-special' => [
                        'type' => 'fieldset',
                        'label' => 'Special Status',
                        'children' => [
                            'special',
                            'special_free',
                        ],
                    ],
                ],
            ],
            'tab-description' => [
                'type' => 'tab',
                'label' => 'Description',
                'children' => [
                    'title',
                    'description',
                    'description_long',
                ],
            ],
        ],

        'fields' => [
            'model_name',
            'brand',
            'price',
            'sale',
            'special',
            'special_free',
            'title',
            'description' => [
                'options' => [
                    'config' => 'minimal',
                ],
            ],
            'description_long' => [
                'options' => [
                    'collapse_toolbar' => true,
                ],
            ],
        ],
    ],

];

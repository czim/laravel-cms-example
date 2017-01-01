<?php

return [

    'list' => [

        'columns' => [
            'id',
            'model_name',
            'title',
            'brand' => \Czim\CmsModels\Support\Enums\ListDisplayStrategy::RELATION_REFERENCE,
            'price',
            'sale',
        ],

        'filters' => [
            'special',
            'sale',
            'any' => [
                'strategy'         => 'string-split',
                'label_translated' => 'models.filter.anything-label',
                'target'           => '*',
            ],
        ],

        'parents' => [
            'categories',
        ],
    ],

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
                            [
                                'type' => 'group',
                                'label' => 'Special',
                                'label_for' => 'special',
                                'columns' => [ 3, 2, 5 ],
                                'children' => [
                                    'special',
                                    [
                                        'type' => 'label',
                                        'label' => 'Custom',
                                        'label_for' => 'special_free',
                                    ],
                                    'special_free',
                                ]
                            ]
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

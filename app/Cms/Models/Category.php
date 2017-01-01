<?php

return [

    'list' => [

        'default_action' => [
            [
                'strategy'    => \Czim\CmsModels\Support\Enums\ActionReferenceType::CHILDREN,
                'permissions' => 'models.app-models-product.show',
                'options'     => [
                    'model'    => \App\Models\Product::class,
                    'relation' => 'categories',
                ]
            ],
            [
                'strategy'    => \Czim\CmsModels\Support\Enums\ActionReferenceType::EDIT,
                'permissions' => 'models.app-models-category.edit',
            ],
            [
                'strategy'    => \Czim\CmsModels\Support\Enums\ActionReferenceType::SHOW,
                'permissions' => 'models.app-models-category.show',
            ],
        ],

        'columns' => [
            'id',
            'name',
            'products' => [
                'strategy' => 'relation-count-link',
                'options' => [
                    'relation' => 'categories'
                ]
            ],
            'created_at',
            'updated_at',
        ],
    ],

    'form' => [

        'fields' => [
            'slug' => [
                // left out 'slug' for updates since it should only be set once
                'update' => false,
            ],
            'name',
            'description',
        ],

    ],

];

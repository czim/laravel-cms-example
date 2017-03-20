<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Modules
    |--------------------------------------------------------------------------
    |
    | The CMS is set up to be modular. Custom modules may be defined here.
    | This list may include FQNs for implementations of either the
    | ModuleInterface or the ModuleGeneratorInterface.
    |
    | The order in which modules will be processed for dispay (in the menu)
    | is determined by their order in the list. Any modules not present in
    | this list will be drawn below/after these, in their natural order.
    |
    */

    'modules' => [
        App\Cms\Modules\Dashboard\CustomDashboardModule::class,
        Czim\CmsAclModule\AclModule::class,
        Czim\CmsModels\Modules\ModelModuleGenerator::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu
    |--------------------------------------------------------------------------
    |
    | The menu is composed of module presences, which may be configured,
    | ordered, or even assigned in a specific nested, grouped layout.
    |
    */

    'menu' => [

        // A menu layout with groups may be defined here, along with the order in which they appear.
        // Groups are represented by arrays. Menu items for modules are referenced by module key.
        //
        // Example:
        //
        //  'layout' => [
        //      [
        //          'label' => 'Group label for display',
        //          'children' => [
        //              'another.module-key',
        //              'yet-another.module-key',
        //          ]
        //      ],
        //      'some.module-key',
        //  ]

        'layout' => [
            'example-custom-dashboard',
            [
                'label'    => 'Product Structure',
                'icon'     => 'folder-open-o',
                'children' => [
                    'models.app-models-category',
                    'models.app-models-brand',
                ]
            ],
            [
                'label'    => 'Products',
                'icon'     => 'shopping-cart',
                'children' => [
                    'models.app-models-product',
                    'models.app-models-variant',
                ]
            ],
            'acl-simple',
        ],

        // Module menu presence configuration and default order of appearance.
        //
        // Entries in this array may be either module keys, or key value pairs with
        // further configuration for a module's menu presence.
        //
        // Note that the order of appearance defined in the layout key above overrules
        // the order of the module keys below.
        //
        // Example:
        //
        //  'modules' => [
        //      'first-module-key',
        //      'second-module-key',
        //      'third-module-key' => [
        //          'label' => 'Custom Label',
        //          'icon'  => 'home',
        //      ],
        //      'some.module-key',
        //  ]

        'modules' => [
            'example-custom-dashboard' => [
                'icon' => 'dashboard',
            ],
            'acl-simple' => [
                'icon' => 'user-circle',
            ],
            'models.app-models-category' => [
                'icon' => 'sitemap',
            ],
            'models.app-models-brand' => [
                'icon' => 'star-o',
            ],
            'models.app-models-product' => [
                'icon' => 'shopping-cart',
            ],
            'models.app-models-variant' => [
                'icon' => 'shopping-bag',
            ],
        ],

    ],

];

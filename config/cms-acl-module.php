<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Custom Permissions
    |--------------------------------------------------------------------------
    |
    | Permissions are generally defined and introduced by modules.
    | Custom permissions added otherwise, should be listed here.
    |
    */

    'permissions' => [
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Permission Grouping
    |--------------------------------------------------------------------------
    |
    | Permissions may be grouped in ways that override or amend module
    | set presences, and to group custom permissions.
    |
    */

    'group' => [
    ],

    /*
    |--------------------------------------------------------------------------
    | ACL Views
    |--------------------------------------------------------------------------
    |
    | The views that the ACL module web controllers should use for each action.
    |
    */

    'views' => [

        'users' => [
            'index'  => 'cms-acl::users.index',
            'show'   => 'cms-acl::users.show',
            'create' => 'cms-acl::users.edit',
            'edit'   => 'cms-acl::users.edit',
            'delete' => 'cms-acl::users.delete',
        ],

        'roles' => [
            'index'  => 'cms-acl::roles.index',
            'show'   => 'cms-acl::roles.show',
            'create' => 'cms-acl::roles.edit',
            'edit'   => 'cms-acl::roles.edit',
            'delete' => 'cms-acl::roles.delete',
        ],
    ],

];

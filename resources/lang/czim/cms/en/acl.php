<?php

return [

    'permission'  => 'permission',
    'permissions' => 'permissions',

    'ungrouped-permissions' => 'Miscellaneous',

    'users' => [
        'single' => 'user',
        'plural' => 'users',

        'index' => [
            'title'      => 'Users',
            'empty_list' => 'No users',
        ],

        'form' => [
            'email'              => 'Email Address',
            'password'           => 'Password',
            'password-new'       => 'New Password',
            'password-repeat'    => 'Repeat Password',
            'name'               => 'Name',
            'first-name'         => 'First Name',
            'last-name'          => 'Last Name',
            'roles'              => 'Roles',
            'current-roles'      => 'Current Roles',
            'available-roles'    => 'Available Roles',
            'select-all-roles'   => 'Assign all roles to user',
            'select-roles'       => 'Assign selected roles to user',
            'deselect-all-roles' => 'Unassign all roles from user',
            'deselect-roles'     => 'Unassign selected roles from user',
        ],

        'columns' => [
            'email' => 'Email',
            'roles' => 'Roles',
        ],

        'flash' => [
            'success-message-create' => 'User :record successfully created.',
            'success-message-edit'   => 'User :record successfully edited.',
            'success-message-delete' => 'User :record successfully deleted.',
        ],
    ],

    'roles' => [
        'single' => 'role',
        'plural' => 'roles',

        'index' => [
            'title'      => 'Roles',
            'empty_list' => 'No roles',
        ],

        'form' => [
            'key'                      => 'Key',
            'name'                     => 'Name',
            'permissions'              => 'Permissions',
            'current-permissions'      => 'Current Permissions',
            'available-permissions'    => 'Available Permissions',
            'select-all-permissions'   => 'Add all permissions to role',
            'select-permissions'       => 'Add selected permissions to role',
            'deselect-all-permissions' => 'Remove all permissions from role',
            'deselect-permissions'     => 'Remove selected permissions from role',
        ],

        'columns' => [
            'key'         => 'Key',
            'in-use'      => 'In Use',
            'permissions' => 'Permissions',
        ],

        'flash' => [
            'success-message-create' => 'Role :record successfully created.',
            'success-message-edit'   => 'Role :record successfully edited.',
            'success-message-delete' => 'Role :record successfully deleted.',
        ],
    ],

];

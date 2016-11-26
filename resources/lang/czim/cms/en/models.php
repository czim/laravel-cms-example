<?php

return [

    'no-records-found' => 'no :name found.',

    'button' => [
        'new-record' => 'New :name',
    ],

    'pagination' => [
        'page-size' => 'page size',
    ],

	'filter' => [
	    'title'        => 'Filter:',
	    'button-label' => 'Filter',
    ],

    'scope' => [
        'all' => 'All',
    ],

    'counts' => [
        'out-of' => '/',
        'total'  => 'total',
    ],

    'activatable' => [
        'activated'   => 'activated',
        'deactivated' => 'deactivated',
        'activate'    => 'activate',
        'deactivate'  => 'deactivate',
    ],

    'orderable' => [
        'drag-to-order'            => 'drag and drop to reorder',
        'drag-disabled-for-column' => 'drag and drop reorder only possible when the list is sorted for this column',
        'move'                     => 'move',
        'move-one-up'              => 'move up',
        'move-one-down'            => 'move down',
        'move-to-top'              => 'move to top',
        'move-to-bottom'           => 'move to bottom',
        'move-to-position'         => 'move to position',
        'position'                 => 'position',
        'not-in-list'              => 'not in list',
        'none'                     => 'none',
        'add-to-list-at-top'       => 'insert at top',
        'add-to-list-at-bottom'    => 'append to bottom',
        'insert-at-position'       => 'insert at position',
    ],

    'upload' => [
        'browse'           => 'browse',
        'remove'           => 'clear the current upload',
        'nothing-uploaded' => 'No upload yet',
    ],

    'delete' => [
        'success-message' => ':record successfully deleted.',
        'failure' => [
            'not-authorized' => 'No authorization to delete records of this type',
            'disallowed'     => 'Not allowed to delete records of this type',
            'in-use'         => 'This record is still in use and may not be deleted',
            'is-active'      => 'This record is active and may not be deleted',
            'unknown'        => 'The record could not be deleted',
        ],
    ],

    'store' => [
        'success-message-create'     => ':record successfully created.',
        'success-message-edit'       => ':record successfully edited.',
        'success-message-position'   => ':record succesfully moved.',
        'success-message-activate'   => ':record activated.',
        'success-message-deactivate' => ':record deactivated.',
        'general-error'              => 'Error saving model. Please try again.',
    ],

];

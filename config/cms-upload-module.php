<?php

return [

    /*
    |--------------------------------------------------------------------------
    | File Uploading
    |--------------------------------------------------------------------------
    |
    | How and where files will be uploaded.
    |
    */

    'upload' => [

        // Where file are uploaded
        'path' => storage_path('cms_uploads'),

        // Restrictions on uploaded content.
        //
        // Use this to globally block uploading certain content.
        // IMPORTANT: Do NOT rely on this for *real* security.
        //            These measures can always be bypassed.
        //            Make sure that no uploaded content can be executed.
        //
        'restrict' => [

            // Whether session-guarding should be enabled.
            // This is a security measure that only allows file manipulation/deletion
            // within the Laravel session in which the file was uploaded.
            'session' => true,

            // Extensions must be exact matches, no wildcards are allowed.
            'extensions' => [
                // To allow anything, set to null.
                'allow' => null,
                // This blacklist will override the allow whitelist.
                'block' => [
                    'exe',
                    'php',
                    'sh'
                ],
            ],

            // Mimetypes may be checked against wildcards (? and *; f.i.: 'image/*').
            'mimetypes' => [
                // To allow anything, set to null.
                'allow' => null,
                // This blacklist will override the allow whitelist.
                'block' => [
                    'application/x-bsh',
                    'application/x-sh',
                    'application/x-shar',
                    'text/x-script.sh',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Garbage Collection
    |--------------------------------------------------------------------------
    |
    | Garbage collection settings for cleaning up old uploads automatically.
    |
    */

    'gc' => [

        // Whether automatic garbage collection is enabled.
        'enabled' => true,

        // Probability (x out of y) that garbage collection takes place on new stores.
        'lottery' => [1, 100],

        // Uploads must be at least this many minutes old to be cleaned up.
        'age-minutes' => 24 * 60,
    ],

];

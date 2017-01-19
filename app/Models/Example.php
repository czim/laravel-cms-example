<?php
namespace App\Models;

use Conner\Tagging\Taggable;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use Taggable;

    protected $fillable = [
        'string',
        'short_string',
        'text',
        'richtext',
        'boolean',
        'integer',
        'decimal',
        'enum',
        'date',
        'datetime',
        'color',
        'location',
        'latitude',
        'longitude',
    ];

    protected $casts = [
        'boolean'   => 'boolean',
        'integer'   => 'integer',
        'decimal'   => 'float',
        'date'      => 'date',
        'datetime'  => 'date',
        'latitude'  => 'float',
        'longitude' => 'float',
    ];

}

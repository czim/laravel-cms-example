<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    protected $fillable = [
        'title',
        'description',
        'description_long',
    ];
}

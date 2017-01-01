<?php
namespace App\Models;

use Czim\Listify\Listify;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Listify,
        Translatable;

    protected $fillable = [
        'slug',
        'name',
        'position',
    ];

    public $translatedAttributes = [
        'name',
        'description',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}

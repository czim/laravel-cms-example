<?php
namespace App\Models;

use App\Models\Scopes\ActiveScope;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Translatable;

    protected $fillable = [
        'title',
        'description',
        'description_long',
        'price',
        'special',
        'special_free',
        'sale',
        'active',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'description_long',
    ];

    protected $casts = [
        'price' => 'float',
        'sale'  => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ActiveScope());
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)
            ->orderBy('position');
    }
}

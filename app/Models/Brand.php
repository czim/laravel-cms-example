<?php
namespace App\Models;

use Czim\Listify\Listify;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use Listify;

    protected $fillable = [
        'name',
        'description',
        'position',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

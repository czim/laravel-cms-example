<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = [
        'name',
        'price',
    ];

    protected $casts = [
        'price' => 'float',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

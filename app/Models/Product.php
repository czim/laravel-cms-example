<?php
namespace App\Models;

use App\Models\Scopes\ActiveScope;
use Codesleeve\Stapler\ORM\EloquentTrait;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements StaplerableInterface
{
    use Translatable,
        EloquentTrait
    {
        Translatable::getAttribute as translatableGetAttribute;
        Translatable::setAttribute as translatableSetAttribute;
        EloquentTrait::getAttribute as staplerGetAttribute;
        EloquentTrait::setAttribute as staplerSetAttribute;
    }

    protected $fillable = [
        'title',
        'description',
        'description_long',
        'price',
        'special',
        'special_free',
        'sale',
        'active',
        'image',
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

    /**
     * {@inheritdoc}
     */
    public function __construct(array $attributes = [])
    {
        $this->hasAttachedFile('image', [
            'styles' => [
                'medium' => '300x300',
                'thumb'  => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }

    protected static function boot()
    {
        parent::boot();

        static::bootStapler();
        static::addGlobalScope(new ActiveScope());
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)
            ->orderBy('category_product.position');
    }

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute($key)
    {
        if (in_array($key, $this->translatedAttributes)) {
            return $this->translatableGetAttribute($key);
        }

        if (array_key_exists($key, $this->attachedFiles)) {
            return $this->staplerGetAttribute($key);
        }

        return parent::getAttribute($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->translatedAttributes)) {
            return $this->translatableSetAttribute($key, $value);
        }

        if (array_key_exists($key, $this->attachedFiles)) {
            $this->staplerSetAttribute($key, $value);
            return $this;
        }

        return parent::setAttribute($key, $value);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductSku
 * @package App\Models
 */
class ProductSku extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'description', 'price', 'stock'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CartItem
 * @package App\Models
 */
class CartItem extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['amount'];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }
}

<?php

namespace App\Models;

use App\Exceptions\CouponCodeUnavailableException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * Class CouponCode
 * @package App\Models
 */
class CouponCode extends Model
{

    /**
     *优惠券类型
     */
    const TYPE_FIXED = 'fixed';
    /**
     *优惠券类型
     */
    const TYPE_PERCENT = 'percent';

    /**
     * @var array
     */
    public static $typeMap = [
        self::TYPE_FIXED   => '固定金额',
        self::TYPE_PERCENT => '比例',
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'type',
        'value',
        'total',
        'used',
        'min_amount',
        'not_before',
        'not_after',
        'enabled',
    ];
    /**
     * @var array
     */
    protected $casts = [
        'enabled' => 'boolean',
    ];

    /**
     * @var array
     */
    protected $dates = ['not_before', 'not_after'];

    /**
     * @var array
     */
    protected $appends = ['description'];

    /**
     * @param int $length
     * @return string
     */
    public static function findAvailableCode($length = 16)
    {
        do {
            // 生成一个指定长度的随机字符串，并转成大写
            $code = strtoupper(Str::random($length));
            // 如果生成的码已存在就继续循环
        } while (self::query()->where('code', $code)->exists());

        return $code;
    }

    /**
     * @return string
     */
    public function getDescriptionAttribute()
    {
        $str = '';

        if ($this->min_amount > 0) {
            $str = '满'.str_replace('.00', '', $this->min_amount);
        }
        if ($this->type === self::TYPE_PERCENT) {
            return $str.'优惠'.str_replace('.00', '', $this->value).'%';
        }

        return $str.'减'.str_replace('.00', '', $this->value);
    }

    /**
     * @param null $orderAmount
     * @throws CouponCodeUnavailableException
     */
    public function checkAvailable($orderAmount = null)
    {
        if (!$this->enabled) {
            throw new CouponCodeUnavailableException('优惠券不存在');
        }

        if ($this->total - $this->used <= 0) {
            throw new CouponCodeUnavailableException('该优惠券已被兑完');
        }

        if ($this->not_before && $this->not_before->gt(Carbon::now())) {
            throw new CouponCodeUnavailableException('该优惠券现在还不能使用');
        }

        if ($this->not_after && $this->not_after->lt(Carbon::now())) {
            throw new CouponCodeUnavailableException('该优惠券已过期');
        }

        if (!is_null($orderAmount) && $orderAmount < $this->min_amount) {
            throw new CouponCodeUnavailableException('订单金额不满足该优惠券最低金额');
        }
    }

    /**
     * @param $orderAmount
     * @return mixed|string
     */
    public function getAdjustedPrice($orderAmount)
    {
        // 固定金额
        if ($this->type === self::TYPE_FIXED) {
            // 为了保证系统健壮性，我们需要订单金额最少为 0.01 元
            return max(0.01, $orderAmount - $this->value);
        }

        return number_format($orderAmount * (100 - $this->value) / 100, 2, '.', '');
    }

    /**
     * @param bool $increase
     * @return int
     */
    public function changeUsed($increase = true)
    {
        // 传入 true 代表新增用量，否则是减少用量
        if ($increase) {
            // 与检查 SKU 库存类似，这里需要检查当前用量是否已经超过总量
            return $this->newQuery()->where('id', $this->id)->where('used', '<', $this->total)->increment('used');
        } else {
            return $this->decrement('used');
        }
    }

}

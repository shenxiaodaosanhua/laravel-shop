<?php

namespace App\Http\Controllers;

use App\Exceptions\CouponCodeUnavailableException;
use App\Models\CouponCode;

/**
 * Class CouponCodesController
 * @package App\Http\Controllers
 */
class CouponCodesController extends Controller
{
    /**
     * @param $code
     * @return mixed
     * @throws CouponCodeUnavailableException
     */
    public function show($code)
    {
        if (!$record = CouponCode::where('code', $code)->first()) {
            throw new CouponCodeUnavailableException('优惠券不存在');
        }

        $record->checkAvailable();

        return $record;
    }
}

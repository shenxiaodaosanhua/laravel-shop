<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRefundRequest extends Request
{
    public function rules()
    {
        return [
            'reason' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'reason' => '原因',
        ];
    }
}

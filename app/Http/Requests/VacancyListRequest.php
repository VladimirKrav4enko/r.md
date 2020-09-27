<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacancyListRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'query'       => 'nullable|min:1',
            'city_id'     => 'nullable|integer|gte:0',
            'category_id' => 'nullable|integer|gte:0',
            'start_date'  => 'nullable|date|before_or_equal:today',
            'end_date'    => 'nullable|date|before_or_equal:today',
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Auth\Access\AuthorizationException;

class CategoryDestroyRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !($this->route('category') == config('cms.default_category_id'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}

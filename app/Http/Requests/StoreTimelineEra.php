<?php


namespace App\Http\Requests;


use App\Traits\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreTimelineEra extends FormRequest
{
    use ApiRequest;

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
        $rules = [
            'name' => 'required|string',
            'abbreviation' => 'nullable|string',
            'start_date' => 'nullable|integer',
            'end_date' => 'nullable|integer',
        ];

        return $this->clean($rules);
    }

}

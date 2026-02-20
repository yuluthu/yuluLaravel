<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Club;

class UpdateClubRequest extends FormRequest
{
    /**
     * Determine if t\he user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'requestType' => 'required|in:updateClub',
            'data' => 'required',
            'data.name' => [
                'required',
                Rule::unique('clubs', 'name')->ignore($this->club->id),
                'between:5,255'
            ],
            'data.clubType' => 'sometimes|required|integer'
        ];
    }

    public function messages()
    {
        return [
            'data.name' => 'Another club with that name already exists',
            'data.name.between' => 'Club name must be between :min and :max characters',
            'data.clubType.required' => 'No club type was specified'
        ];
    }
}

<?php

namespace App\Http\Requests\Clubs;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Club;

class BaseClubRequest extends FormRequest
{
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

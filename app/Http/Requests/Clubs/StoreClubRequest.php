<?php

namespace App\Http\Requests;

use App\Http\Requests\Clubs\BaseClubRequest;

class StoreClubRequest extends BaseClubRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
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

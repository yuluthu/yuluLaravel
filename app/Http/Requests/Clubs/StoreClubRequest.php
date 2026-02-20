<?php

namespace App\Http\Requests\Clubs;

class StoreClubRequest extends BaseClubRequest
{
    public const REQUEST_TYPE = 'storeClub';

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}

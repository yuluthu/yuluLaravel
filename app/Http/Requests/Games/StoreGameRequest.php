<?php

namespace App\Http\Requests\Games;

class StoreGameRequest extends GameRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }
}

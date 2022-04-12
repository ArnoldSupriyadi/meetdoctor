<?php

namespace App\Http\Requests\Specialist;
use App\Models\MasterData\Specialist;

// this rule only at update request
use Illuminate\Validation\Rule;

// UseGate
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;


class UpdateSpecialistRequest extends FormRequest
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
            'name' =>[
                'required', 'string', 'max:255', Rule::unique('specialist')->ignore($this->specialist),
            ],
            'price' =>[
                'required', 'string', 'max:255',
            ],
        ];
    }
}

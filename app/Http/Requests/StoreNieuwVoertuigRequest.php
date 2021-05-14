<?php

namespace App\Http\Requests;

use App\NieuwVoertuig;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class StoreNieuwVoertuigRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('nieuw_voertuig_create');
    }

    public function rules()
    {
        return [
            'kenteken' => [
                'string',
                'required',
            ],
            'datum_aanschaf' => [
                'date_format:' . config('project.datetime_format'),
                'required',
            ],
            'soort_voertuig' => [
                'nullable',
                'in:' . implode(',', Arr::pluck(NieuwVoertuig::SOORT_VOERTUIG_SELECT, 'value')),
            ],
        ];
    }
}

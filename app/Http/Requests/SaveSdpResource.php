<?php

namespace App\Http\Requests;

use App\Spd;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveSdpResource extends FormRequest
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
        $rules = [
           'TitleShort'=> ['required', 'string', 'max:80','min:3']
        ];

       if ($this->method() === 'PUT') {
         $rules['TitleShort'] = ['required', 'string', 'max:80'];
         $rules['TitleLong'] = ['required', 'string', 'max:200'];
         $rules['DescriptionShort'] = ['required', 'string', 'max:1000'];
         $rules['DescriptionLong'] = ['required', 'string', 'max:2000'];
         $rules['Bullet1'] = ['required', 'string', 'max:150'];
         $rules['Bullet2'] = ['required', 'string', 'max:150'];
         $rules['Bullet3'] = ['required', 'string', 'max:150'];
         $rules['Bullet4'] = ['required', 'string', 'max:150'];
         $rules['Bullet5'] = ['required', 'string', 'max:150'];
         $rules['Category'] = ['required', 'string', 'max:150'];
         $rules['SubCategory'] = ['required', 'string', 'max:50'];
         $rules['Keywords'] = ['required', 'string', 'max:200'];
         $rules['Language'] = ['required', 'string', 'max:50'];
        }

        return $rules;
    }

    public function createSpd()
    {

        $spd = Spd::create($this->all());

        return $spd;
    }

    public function updateSpd($spd)
    {

        $spd->update($this->all());

        return $spd;
    }
}

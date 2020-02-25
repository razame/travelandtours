<?php

namespace App\Http\Requests;

use App\Locale;
use Illuminate\Foundation\Http\FormRequest;

class UpdateItineraryFeature extends FormRequest
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
        $locales = Locale::all();

        foreach ($locales as $locale){

            $locale = $locale->locale;

            $rules[$locale.'.text']        =  'required';
        }

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        $locales = Locale::all();

        foreach ($locales as $locale){

            $localeMessagePrefix = $locale->locale == 'en' ? '' : ' in '.$locale->locale_name;
            $locale = $locale->locale;

            $messages[$locale.'.text.required']        =  "Text".$localeMessagePrefix." is required";
        }

        return $messages;
    }
}

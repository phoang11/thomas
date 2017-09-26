<?php

namespace App\Http\Requests;

use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CreateStudentForm extends FormRequest
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
            'first_name' => 'required|max:255|alpha_dash',
            'last_name' => 'required|max:255|alpha_dash',
            'middle_name' => 'max:100|alpha_dash',
            'date_of_birth'=> 'date|before:today',
            'father_name' => 'max:255|alpha_dash',
            'mother_name' => 'max:255|alpha_dash',
            'address' => 'alpha_dash',
            'address2' => 'alpha_dash',
            'city' => 'max:100|alpha',
            'zipcode' => 'digits:5',
            'phone1' => 'digits:10',
            'phone2' => 'digits:10',
        ];
    }

    public function persist()
    {
        $this->user()->students()->create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'middle_name' => $this->middle_name,
            'date_of_birth'=> Carbon::create(2017,9,23),
            'father_name' => $this->father_name,
            'mother_name' => $this->mother_name,
            'address' => $this->address,
            'address2' => $this->address2,
            'city' => $this->city,
            'zipcode' => $this->zipcode,
            'phone1' => $this->phone1,
            'phone2' => $this->phone2,
        ]);
    }
}

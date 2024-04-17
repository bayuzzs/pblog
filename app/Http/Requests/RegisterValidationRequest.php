<?php

namespace App\Http\Requests;

use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class RegisterValidationRequest extends FormRequest
    {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize() : bool
        {
        return true;
        }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules() : array
        {
        return [
            'npwp'              => 'required|unique:pengimpor|numeric|digits:16',
            'namaPerusahaan'    => 'required|',
            'alamatPerusahaan'  => 'required|',
            'teleponPerusahaan' => 'required|numeric|digits:12',
            'username'          => 'required|unique:pengimpor',
            'password'          => 'required|confirmed',
            'nama'              => 'required|',
            'email'             => 'required|unique:pengimpor|email:dns',
            'telepon'           => 'required|digits:12',
        ];
        }

    public function after() : array
        {
        return [
            function (Validator $validator) {
                if ( $validator->errors()->isNotEmpty() ) {
                    Session::flash('activeTab', 'register');
                    }
                return;
                }
        ];
        }


    }

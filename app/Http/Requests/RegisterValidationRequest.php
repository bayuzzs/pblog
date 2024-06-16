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
            'teleponPerusahaan' => 'required|numeric|digits_between:10,13',
            'username'          => 'required|unique:pengimpor',
            'password'          => 'required|confirmed|min:8',
            'nama'              => 'required|',
            'email'             => 'required|unique:pengimpor|email:dns',
            'telepon'           => 'required|digits_between:10,13',
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

    public function messages() : array
        {
        return [
            'required'           => 'Kolom :attribute wajib diisi.',
            'npwp.unique'        => 'NPWP sudah terdaftar.',
            'username.unique'    => 'Nama Pengguna sudah terdaftar.',
            'email.unique'       => 'Email sudah terdaftar.',
            'email.email'        => 'Email harus berupa alamat email yang valid.',
            'password.confirmed' => 'Konfirmasi sandi tidak cocok.',
            'digits'             => ':attribute harus :digits angka.',
            'numeric'            => ':attribute harus berupa angka.',
            'digits_between'     => ':attribute harus :min sampai :max angka.',
        ];
        }


    }

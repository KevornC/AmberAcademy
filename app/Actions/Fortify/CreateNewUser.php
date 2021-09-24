<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'firstname' => ['required', 'string', 'max:100','alpha'],
            'lastname' => ['required', 'string', 'max:100','alpha'],
            'gender' => ['required'],
            'day' => ['required'], 'month' => ['required'], 'year' => ['required'],
            'trn' => ['required','max:9','unique:users'],
            'address' => ['required','max:255'],
            'number' => ['required','max:13'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
//            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'Firstname' => $input['firstname'],
            'dob' => $input['month'].'-'.$input['day'].'-'.$input['year'],
            'lastname' => $input['lastname'],
            'gender' => $input['gender'],
            'trn' => $input['trn'],
            'address' => $input['address'],
            'phone_number' => $input['number'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }


}

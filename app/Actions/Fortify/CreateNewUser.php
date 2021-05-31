<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\VerifyMail;
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
        // validation
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'gender' => ['required', 'string',  'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();
// email notification
          $email = $input['email'];
          $username = $input['username'];
          $password = $input['password'];
          $details = [
              'title'=>'thank you for signing in',
              'body' => 'you have successfully singed in whith'. $email,
              'username' => 'your Username :' . $username,
              'password' => 'Password :' . $password
          ];
        // 
          Mail::to($email)->send(new VerifyMail($details));
// create data
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'address' => $input['address'],
            'username'=> $input['username'],
            'gender' => $input['gender'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
        ]);
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use App\Mail\WelcomeAgain;

class RegistrationRequest extends FormRequest
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
          'name' => 'required',
          'email' => 'required|email',
          'password' => 'required|confirmed'
        ];
    }

    public function persist() {

      // Create and save the User
      $user = User::create(
        $this->only(['name', 'email', 'password'])
      );

      // Sign then in
      auth()->login($user);

            // Sending email
      \Mail::to($user)->send(new WelcomeAgain($user));
    }
}

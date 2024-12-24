<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\DatosBasicos;
use App\Models\Afiliados;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

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
            'identificationNac' => ['required', 'string', 'max:1'],
            'identificationNumber' => ['required', 'string', 'max:12'],
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        if($input['role'] == 'delivery')
        {
            $active = 0;
        }else{
            $active = 1;
        }
        
        $user = User::create([
            'identificationNac' => $input['identificationNac'],
            'identificationNumber' => $input['identificationNumber'],
            'name' => $input['name'],
            'email' => $input['email'],
            'role' => $input['role'],
            'active' => $active,
            'password' => Hash::make($input['password']),
        ]);

        DatosBasicos::create([
            'user_id' => $user->id,
            'cellphonecode' => $input['cellphonecode'],
            'cellphone' => $input['cellphone'],
        ]);
        
        return $user;
        
    }
}






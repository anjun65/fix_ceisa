<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Auth;

class Login extends Component
{
    public $email = '';
    public $password = '';
    

    protected $rules = [
        'email' => 'required',
        'password' => 'required',
    ];

    public function login()
    {
        $credentials = $this->validate();

        $data = array(
                "username" => $credentials['email'],
                "password" => $credentials['password'],
                "token" => '4bwqxKTBRuVNxuRRwlo9h7KtNsEcwpk9',
        );

        $ch = curl_init('http://sid.polibatam.ac.id/apilogin/web/api/auth/login');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = json_decode(curl_exec($ch));

        if(!empty($result->code)){
            $this->addError('email', trans('auth.failed'));
        }
        
        if($result->status == "success") {
            $user = User::where('username', $credentials['email'])->first();
            
            if (!$user) {
                
                $newUser = User::create([                    
                    'nomorInduk' => $result->data->nim_nik_unit,
                    'username' => $result->data->username,
                    'name' => $result->data->name,
                    'email' => $result->data->email,
                    'roles' => $result->data->jabatan,
                ]);

                Auth::login($newUser);
                $request->session()->regenerate();

                return redirect('/');
            } else {

                Auth::login($user);

                return redirect('/');
            }

        }  
        
        else {
            $this->addError('email', trans('auth.failed'));
        }
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('layouts.auth');
    }
}

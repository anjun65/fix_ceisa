<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

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

        $response = Http::withOptions(['verify' => false])->asForm()->post('https://sid.polibatam.ac.id/api/v1.php', [
            'act' => 'Login',
            'username' => $credentials['email'],
            'password' => $credentials['password'],
        ]);

        if ($response->successful()) {
            $data = $response->json();

            
            $error_code = $data['error_code'];
            if ($error_code === 0) {
                $secretKey = $data['data']['secretkey'];
                Session::put('secretkey', $secretKey);
                
                $response = Http::withOptions(['verify' => false])->asForm()->post('https://sid.polibatam.ac.id/api/v1.php', [
                    'act' => 'GetBiodata',
                    'secretkey' => $secretKey,
                ]);

                $user_data = $response->json();

                if (empty($user_data['data'])){
                    return back()->withErrors([
                        'username' => 'Username atau password salah.',
                    ]);
                } 
                
                $user = User::where('email', $user_data['data']['email'])->first();               

                if(!$user) {
                    $new_user = User::create([
                        'nomorInduk' => $user_data['data']['nik'],
                        'username' => $credentials['email'],
                        'name' => $user_data['data']['nama'],
                        'email' => $user_data['data']['email'],
                        'roles' => $user_data['data']['role'],
                    ]);

                    Auth::login($new_user);

                    return redirect('/');

                } else {

                    Auth::login($user);


                    return redirect('/');
                    
                }

            } else {
                $error_desc = $data['error_desc'];
                
                return back()->withErrors([
                    'username' => $error_desc,
                ]);
            }
            
        } else {
            $statusCode = $response->status();
            return back()->withErrors([
                    'username' => 'Sedang maintenance',
                ]);
        }

 
        return back()->withErrors([
            'username' => 'Username/password salah',
        ]);
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('layouts.auth');
    }
}

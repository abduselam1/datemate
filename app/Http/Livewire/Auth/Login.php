<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Services\SessionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;
    public $ip;

    protected $rules = [
        'email' => ['required','email'],
        'password' => ['required']
    ];
    protected $message = [
        'email.required'=>'Email is required',
        'email.email' => 'Please provide a valid email address',
        'password.required' => "Password is required"
    ];

    public function login(){
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password],$this->remember ?? false)) {
            SessionService::createSession($this->ip);
            return redirect('/');
        }else{
            return $this->addError('credential',"The credential do not match our records");
        }
        
        //  trim($this->email);
    }
    
    public function mount(Request $request){
        // dd(request()->input('name'));
        $this->ip = $request->ip();
        // dd($this->request->ip());
    }


    public function render()
    {
        return view('livewire.auth.login')->layout('auth-layout');
    }
}

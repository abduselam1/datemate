<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Services\SessionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Register extends Component
{

    public $name;
    public $last_name;
    public $email;
    public $password;
    private $request;

    protected $rules = [
        'name'=> ['required'],
        'last_name' => ['required'],
        'email' => ['required','email',],
        // 'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()]
    ];

    protected $messages = [
        'name.required' => 'Please fill your name',
        'last_name.required' => 'Please fill your last name',
        'email.required' => 'Email is required',
        'email.email' => 'Please provid a valid email address',
        'email.unique' => 'This email is already taken',
        'password.required' => 'Password is required',
        'password.min' => 'Password length should be atleast 8 character',
        
        
    ];

    public function register(){
        $this->validate();

        $this->validate([
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()]

        ]);
        $user = User::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        Auth::login($user);

        SessionService::createSession($this->request);

        return redirect(route('onboard'));

    }

    public function mount(Request $request){
        $this->request = $request;
        dd($this->request);
    }

    public function render()
    {
        return view('livewire.auth.register')->layout('auth-layout');
    }
}

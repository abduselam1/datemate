<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Validation\Rules\Password as ValidationPassword;

class ResetPassword extends Component
{
    public $token;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'email'=>'required|email',
        'token' => 'required'
    ];
    
    public function resetPassword(){
        // dd($this->token);
        $this->validate();
        $this->validate([
            'password' => ['required' , ValidationPassword::min(8)->mixedCase()->numbers()->symbols() , 'confirmed']

        ]);
        

        $status = Password::reset(
            ['email'=> $this->email, 'password'=>$this->password, 'password_confirmation'=>$this->password_confirmation, 'token'=>$this->token],
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : $this->addError('email',"The links was exprired please request another reset link");



    }
    

    public function mount(string $token,Request $request){
        $this->email = $request->email;
        // dd($request->only('email','name'));
        // $str = Str::random(10);
        // dd(Crypt::encryptString($str));
        // dd($this->token);
    }

    public function render()
    {
        return view('livewire.auth.reset-password')->layout('auth-layout');
    }
}

<?php

namespace App\Http\Livewire\Auth;

use App\Mail\ResetPasswordMail;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Security\PasswordReset;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class ForgotPassword extends Component
{

    public $email;

    public $isSent = false;

    protected $rules = [
        'email' => 'required|email'
    ];

    protected $messages = [
        'email.required' => 'Please provide your email address',
        'email.email' => 'Please provide a valid email address'
    ];

    public function forgot(){
        $this->validate();


        $status = Password::sendResetLink(
            ['email' => $this->email]    
        );
        return $status === Password::RESET_LINK_SENT
            ? $this->isSent = true
            : $this->addError('email', __($status));
        // $user = User::where('email',$this->email)->first();

        // if($user){
        //     $token = PasswordReset::where('email',$this->email)->where('created_at','>',now()->add('-1','minute'))->first();
        //     if($token){
        //         $this->addError('forgot',__('passwords.throttled'));
        //         return;
        //     }
        //     $this->createToken($user);
        //     $this->isSent = true;
        // }else
        //     $this->addError('forgot', __('passwords.user'));        
    }



    public function createToken(User $user){
        PasswordReset::where('email', $this->email)->delete();

        $str = Str::random(50);
        $token = PasswordReset::create([

            'token' => Hash::make($str),
            'email' => $this->email,
            'created_at' => now()
        ]);
        Mail::to($this->email)->send(new ResetPasswordMail($user,$token->token));
    }




    public function render()
    {
        return view('livewire.auth.forgot-password')->layout('auth-layout');
    }
}

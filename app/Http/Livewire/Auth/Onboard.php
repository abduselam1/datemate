<?php

namespace App\Http\Livewire\Auth;

use Agent;
use DateTime;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\User\UserInfo;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Countries\Package\Countries;
use Stevebauman\Location\Facades\Location;
use Karmendra\LaravelAgentDetector\AgentDetector;


class Onboard extends Component
{
    public $page = 1;

    protected $listeners = ['changePage'];

    public function changePage($page){
        $this->page = $page;
    }

    public function logout(){
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();
        return redirect(route('login'));
    }

    public function mount(){
        
        if (UserInfo::where('user_id',auth()->id())->first()) {
            return redirect('/');
        }
        return;
    }

    public function render()
    {
        return view('livewire.auth.onboard')->layout('auth-layout');
    }
}

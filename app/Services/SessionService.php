<?php

namespace App\Services;

use Agent;
use App\Models\Security\Session;
use Stevebauman\Location\Facades\Location;


class SessionService
{

    public static function createSession($ip)
    {
        
        
            $browser = Agent::browser();
            $browserVersion = Agent::version($browser);
            
            $position = Location::get($ip);
            $session = Session::create([
                'user_id' => auth()->id(),
                'ip_address' => $ip,
                'country' => $position ? $position->countryName : null,
                'city' => $position ? $position->cityName : null,
                'browser' => $browser.' '.$browserVersion,
                'payload' => session()->getId(),
                'last_activity' => now(),
            ]);
            return $session;
        

        // dd(Agent::version($browser));
    }

    public static function updateSession(){
        $session = Session::where('user_id',auth()->id())->where('payload',session()->getId())->first();
        if ($session) {
            return $session->update([
                'last_activity' => now(),
            ]);
        }
        return false;
    }
}

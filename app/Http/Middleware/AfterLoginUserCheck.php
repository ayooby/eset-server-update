<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
// use exception;
use App\User;
use Carbon\Carbon;
use App\Exception;
use App\Exceptions\UserAccountInvalidException;
use App\Exceptions\UserAccountExpiredException;


class AfterLoginUserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        try{
            $user = $this->getUser();
            if ($user->activated_at == 0){
                $user->activated_at = Carbon::now();
                $user->save();
            }
             return $next($request);
        }catch(UserAccountExpiredException $e){
            $id = Auth::id();
            $user = User::find($id);
            $user->status = 0;
            $user->save();
            Auth::logout();
            die($e->getMessage());
        }catch(UserAccountInvalidException $e){
            Auth::logout();
            die($e->getMessage());
        }
    }


    protected function getUser(){//check if user is expired
        $id = Auth::id();
        $user = User::find($id);
        $now = Carbon::now();
        $expire_date = Carbon::parse($user->activated_at)->addMonth($user->duration);

        if ($now->gte($expire_date) && $user->activated_at > 0){
            throw new UserAccountExpiredException("This account has been expired at number one ".$expire_date, 1);
        }

        if ($user->status == 0 ){
            throw new UserAccountInvalidException("This account has been expired ".$expire_date, 1);
        }


        return $user;
    }

}




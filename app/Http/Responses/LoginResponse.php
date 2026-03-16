<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = $request->user();

        if ($user->hasRole('admin')) {
            return redirect('/admin/dashboard');
        }

        if ($user->hasRole('mahasiswa')) {
            return redirect('/mahasiswa/dashboard');
        }

        return redirect('/');
    }
}

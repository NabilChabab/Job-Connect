<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

<<<<<<< HEAD
=======

>>>>>>> 249aa050b9e2c4682459d0d65f02806fdfb8d741

    public function authenticated(Request $request, $user)
    {

        $roleId = $user->roles()->pluck('role_id')->first();

        if ($roleId == 1) {
            return redirect('/admin/dashboard');
        } elseif ($roleId == 2) {
            return redirect('/user/profile');
        } elseif ($roleId == 3) {
            return redirect('/user/profile');
        }elseif($roleId == 4){
            return redirect('/company/home');
        }else {
            return redirect($this->redirectTo);
        }
    }
<<<<<<< HEAD

=======
>>>>>>> 249aa050b9e2c4682459d0d65f02806fdfb8d741
}

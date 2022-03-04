<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Rules\CheckSamePassword;
use App\Models\UserResetPassword;
use App\Models\AdminResetPassword;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function userPasswordReset(Request $request)
    {
        $data = UserResetPassword::where('token', $request->token)->latest()->first();
        $user = User::where('email' , $data->email)->first();
        $this->validate($request, [
            'password_confirmation' => ['required'],
            'password' => [
                'required', 
                'confirmed',
                Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised()
            ]
        ]);

        if ($data) {
            $user = User::where('email' , $data->email)->first();

            $user->update([
                "password" => bcrypt($request->password) 
            ]);

            UserResetPassword::where('email' , $data->email)->delete();
        }
    }

    public function adminPasswordReset(Request $request)
    {
        $data = AdminResetPassword::where('token', $request->token)->latest()->first();
        $user = Admin::where('email' , $data->email)->first();
        $this->validate($request, [
            'password_confirmation' => ['required'],
            'password' => [
                'required', 
                'confirmed',
                Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised()
            ]
        ]);

        if ($data) {
            $user = Admin::where('email' , $data->email)->first();

            $user->update([
                "password" => bcrypt($request->password) 
            ]);

            AdminResetPassword::where('email' , $data->email)->delete();
        }
    }
}

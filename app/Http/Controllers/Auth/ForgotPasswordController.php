<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UserResetPassword;
use App\Models\AdminResetPassword;
use App\Http\Controllers\Controller;
use App\Notifications\AdminPasswordReset;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function userPasswordEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $data = UserResetPassword::create([
                'email' => $request->email,
                'code' => $this->generateRandomString(),
                'token' => Str::random(60),
                'code_expires_at' => Carbon::now()->addMinutes(5)->timestamp,
            ]);

            //$this->sendMail($data);

            return response()->json(['data' => $data->token], 200);
        }else {
            return response()->json(['errors' => [
                'verification' => ["User does not exist"]
            ]], 422);
        }
    }

    public function userPasswordCode(Request $request)
    {
        $this->validate($request, [
            'token' => 'required|string',
            'code' => 'required|string'
        ]);

        $data = UserResetPassword::where('token', $request->token)->latest()->first();

        if ($data->code === $request->code) {
            return response()->json(['data' => $data->token], 200);
        }else {
            return response()->json(['errors' => [
                'verification' => ["Invalid code"]
            ]], 422);
        }
    }

    public function adminPasswordEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $user = Admin::where('email', $request->email)->first();

        if ($user) {
            $data = AdminResetPassword::create([
                'email' => $request->email,
                'code' => $this->generateRandomString(),
                'token' => Str::random(60),
                'code_expires_at' => Carbon::now()->addMinutes(5)->timestamp,
            ]);

            $this->sendMail($data);

            return response()->json(['data' => $data->token], 200);
        }else {
            return response()->json(['errors' => [
                'verification' => ["User does not exist"]
            ]], 422);
        }
    }

    public function adminPasswordCode(Request $request)
    {
        $this->validate($request, [
            'token' => 'required|string',
            'code' => 'required|string'
        ]);

        $data = AdminResetPassword::where('token', $request->token)->latest()->first();

        if ($data->code === $request->code) {
            return response()->json(['data' => $data->token], 200);
        }else {
            return response()->json(['errors' => [
                'verification' => ["Invalid code"]
            ]], 422);
        }
    }

    protected  function generateRandomString() {
        $numbers = substr(str_shuffle('0123456789'), 0, 3);
        $uc_letters = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 3);
        $lc_letters = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 3);
        return substr(str_shuffle($numbers."".$uc_letters."".$lc_letters), 0, 8);
    }

    protected function sendMail(AdminResetPassword $data)
    {
        $verification_data = [
            'body' => "Below is your OTP for password reset. If you never requested kindly ignore",
            'text' => $data->code,
            'url' => url('#'),
            'thankyou' => "Thank you"
        ];

        $data->notify(new AdminPasswordReset($verification_data));
    }
}

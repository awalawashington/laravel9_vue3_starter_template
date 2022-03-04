<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UserVerifyEmail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Notifications\AdminPasswordReset;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function userRegistrationEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            $data = UserVerifyEmail::create([
                'email' => $request->email,
                'code' => $this->generateRandomString(),
                'token' => Str::random(60),
                'code_expires_at' => Carbon::now()->addMinutes(5)->timestamp,
            ]);

            //$this->sendMail($data);

            return response()->json(['data' => $data->token], 200);  
        }else {
            return response()->json(['errors' => [
                'verification' => ["User already registered"]
            ]], 422);
        }
    }

    public function userRegistrationCode(Request $request)
    {
        $this->validate($request, [
            'token' => 'required|string',
            'code' => 'required|string'
        ]);

        $data = UserVerifyEmail::where('token', $request->token)->latest()->first();

        if ($data->code === $request->code) {
            return response()->json(['data' => $data->token], 200);
        }else {
            return response()->json(['errors' => [
                'verification' => ["Invalid code"]
            ]], 422);
        }
    }

    public function register(Request $request)
    {
        $data = UserVerifyEmail::where('token', $request->token)->latest()->first();

        $request->request->add(['email' => $data->email]);
        
        $this->validator($request->all())->validate();


        if (event(new Registered($user = $this->create($request->all())))) {
            UserVerifyEmail::where('email' , $data->email)->delete();

            return response()->json(['data' => $user], 200);
        }
    }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'string', 'max:255', 'unique:users,id'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'user_id' => $data['user_id'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected  function generateRandomString() {
        $numbers = substr(str_shuffle('0123456789'), 0, 3);
        $uc_letters = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 3);
        $lc_letters = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 3);
        return substr(str_shuffle($numbers."".$uc_letters."".$lc_letters), 0, 8);
    }

    protected function sendMail(UserVerifyEmail $data)
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

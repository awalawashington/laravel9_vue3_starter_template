<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SettingsResource;
use App\Http\Requests\PasswordChangeRequest;
use App\Http\Requests\AdminAccountSettingsRequest;
use App\Http\Requests\AdminProfileSettingsRequest;

class SettingsController extends Controller
{
    /**
     * Update admin account.
     */
    
    public function updateAccount(AdminAccountSettingsRequest $request)
    {  
        $user = auth()->user();
        $user->update($request->validated());
        return new SettingsResource($user);
    }

     /**
     * Update admin profile.
     */

    public function updateProfile(AdminProfileSettingsRequest $request)
    {  
        $user = auth()->user();
        $user->update($request->validated());
        return new SettingsResource($user);
    }

    /**
     * Update admin password.
     */
    public function updatePassword(PasswordChangeRequest $request)
    {  
        $user = auth()->user();
        if ($request->validated()) {
            $request->user()->update([
                "password" => bcrypt($request->password) 
            ]);
        }
        return null;
    }
}

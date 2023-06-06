<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class AdminProfileController extends Controller
{
    //display profile controller
    public function create()
    {
        $id = Auth::user()->id;
        $userData = User::findOrFail($id);
        return view('backend.profile.profile', compact('userData'));
    }

    //update profile data
    public function update(Request $request, $id)
    {
        $userData = User::findOrFail($id);

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'address' => 'required|max:255',
        ]);

        if ($request->hasFile('image')) {
            $path = 'profile/' . $userData->image;
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
            $saveImage = $this->saveImage($request);
            $userData->name = $request->name;
            $userData->email = $request->email;
            $userData->address = $request->address;
            $userData->image = $saveImage['name'];
            $userData->image_url = $saveImage['image_url'];
            $userData->save();
            $notification = [
                'message' => 'Admin Profile Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('create.profile')
                ->with($notification);
        } else {
            $userData->name = $request->name;
            $userData->email = $request->email;
            $userData->address = $request->address;
            $userData->save();
            $notification = [
                'message' => 'Admin Profile Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('create.profile')
                ->with($notification);
        }
    }

    // save image
    public function saveImage($request)
    {
        $ext = $request->image->extension();
        $name = 'Profile-' . uniqid() . '.' . $ext;
        $save = $request->image->storeAs('profile', $name, 'public');
        $saveUrl = config('app.url') . 'storage/' . $save;
        return ['name' => $name, 'image_url' => $saveUrl];
    }

    // display edit password page
    public function editPassword()
    {
        $id = Auth::user()->id;
        $userData = User::findOrFail($id);
        return view('backend.profile.passwordUpdate', compact('userData'));
    }


    public function updatePassword(Request $request, $id)
    {
        $userData = User::find($id);
        $oldPass = $userData->password;

        $request->validate([
            'current_password' => 'required|max:255',
            'new_password' => 'required|max:255',
            'confirm_password' => 'required|max:255|same:new_password',
        ]);

        if(Hash::check($request->current_password, $oldPass))
        {
            $userData->password = Hash::make($request->new_password);
            $userData->save();
            $notification = [
                'message' => 'Admin Password Successfully Changed',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('edit.password')
                ->with($notification);
        }else{
            $notification = [
                'message' => 'Current Password didnot match',
                'alert-type' => 'error',
            ];
            return redirect()
                ->route('edit.password')
                ->with($notification);
        }
    }

    // logout 
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

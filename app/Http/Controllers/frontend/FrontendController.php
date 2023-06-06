<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //store user data method
    public function updateProfile(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|max:255',
            'dateofbirth' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required'
        ]);

        $user = User::find($id);
        $imgName = $user->email;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->date_of_birth = $request->dateofbirth;
        $user->phone = $request->phone;
        if($request->image)
        {
            $img = $this->saveImage($request);
            $user->image_url = $img['image_url'];
            $user->image = $img['name'];
        }
      
        $user->save();

        return back();
    }
   
     // save image
     public function saveImage($request)
     {
         $ext = $request->image->extension();
         $name = 'Profile-' . uniqid() . '.' . $ext;
         $save = $request->image->storeAs('user-profile', $name, 'public');
         $saveUrl = config('app.url') . 'storage/' . $save;
         return ['name' => $name, 'image_url' => $saveUrl];
     }

    //image url generator
    private function imgNameGenator($email, $ext)
    {
        $imageUrl = $email;
        $couunt = User::where('email', 'LIKE', '%' . $imageUrl . '%')->count();
        if($couunt > 0){
            $imageUrl = $imageUrl . $couunt++ . '.' . $ext;
        }
        return $imageUrl;
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function uploadimage(Request $request)
    {

        if ($request->hasFile("image")) {
             // Validate the image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);



        // Handle the file
        $image = $request->file("image");
        $imageExtension = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $imageExtension;

        // Move to uploads directory
        $image->move(public_path("uploads"), $imageName);

        // Return success response
        return back()->with('success', 'Image uploaded successfully.');
        }
       
    }
}

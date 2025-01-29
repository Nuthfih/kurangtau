<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user(); // Get the currently authenticated user
        return view('profile.update', compact('user')); // Pass the user data to the view
    }
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        'password' => 'nullable|string|min:6|confirmed',
    ]);

    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->password) {
        $user->password = Hash::make($request->password);
    }

    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully!');
}

public function destroy($id)
{

    $user = User::findOrFail($id);

    $user->delete();


    Auth::logout();
    return redirect('/')->with('success', 'Your account has been deleted successfully.');
}

}
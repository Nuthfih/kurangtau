<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProgrammingLanguage;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function attachLanguages(Request $request, User $user)
{
    // Validate the incoming request
    $validated = $request->validate([
        'languages' => 'required|array', // Ensure 'languages' is present and is an array
        'languages.*' => 'exists:programming_languages,name', // Validate each language name exists in the database
    ]);

    // Get the IDs for the language names provided
    $languages = ProgrammingLanguage::whereIn('name', $validated['languages'])->pluck('id');

    // Attach the language IDs to the user
    $user->programmingLanguages()->attach($languages);

    return response()->json(['message' => 'Languages attached successfully']);
}


}

<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
    Profile::create($request->only(['title', 'biography', 'website']));
        return redirect()->route('profiles.index');
    }

    public function show($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profiles.show', compact('profile'));
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profiles.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
    $profile = Profile::findOrFail($id);
    $profile->update($request->only(['title', 'biography', 'website']));
        return redirect()->route('profiles.index');
    }

    public function destroy($id)
    {
        Profile::destroy($id);
        return redirect()->route('profiles.index');
    }
}

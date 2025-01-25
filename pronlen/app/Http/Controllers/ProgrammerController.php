<?php

namespace App\Http\Controllers;

use App\Models\Programmer;
use Illuminate\Http\Request;

class ProgrammerController extends Controller
{
    public function index()
    {
        $programmers = Programmer::all();
        return view('programmers.index', compact('programmers'));
    }

    public function create()
    {
        return view('programmers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_programmer' => 'required',
            'keahlian' => 'required',
            'bahasa' => 'required',
        ]);

        Programmer::create($request->all());
        return redirect()->route('programmers.index')->with('success', 'Programmer berhasil ditambahkan.');
    }

    public function show($id)
    {
        $programmer = Programmer::findOrFail($id);
        return view('programmers.show', compact('programmer'));
    }

    public function edit($id)
    {
        $programmer = Programmer::findOrFail($id);
        return view('programmers.edit', compact('programmer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_programmer' => 'required',
            'keahlian' => 'required',
            'bahasa' => 'required',
        ]);

        $programmer = Programmer::findOrFail($id);
        $programmer->update($request->all());
        return redirect()->route('programmers.index')->with('success', 'Programmer berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $programmer = Programmer::findOrFail($id);
        $programmer->delete();
        return redirect()->route('programmers.index')->with('success', 'Programmer berhasil dihapus.');
    }
}

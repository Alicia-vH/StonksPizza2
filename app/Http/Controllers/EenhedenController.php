<?php

// app/Http/Controllers/EenhedenController.php

namespace App\Http\Controllers;

use App\Models\Eenheden;
use Illuminate\Http\Request;

class EenhedenController extends Controller
{
// app/Http/Controllers/EenhedenController.php

    public function index()
    {
        $eenheden = Eenheden::all();
        return view('eenheden.index', compact('eenheden'));
    }


    public function create()
    {
        return view('eenheden.create');
    }

    // EenhedenController.php
    // EenhedenController.php
    public function store(Request $request)
    {
        $request->validate([
            'eenhedens' => 'required|string',
        ]);

        Eenheden::create([
            'eenhedens' => $request->input('eenhedens'),
        ]);

        return redirect()->route('eenheden.index')->with('success', 'Eenheid succesvol aangemaakt.');
    }


    public function edit($id)
    {
        $eenheden = Eenheden::findOrFail($id);
        return view('eenheden.edit', compact('eenheden'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'eenhedens' => 'required|string',
        ]);

        $eenheden = Eenheden::findOrFail($id);
        $eenheden->update([
            'eenhedens' => $request->input('eenhedens'),
        ]);

        return redirect()->route('eenheden.index')->with('success', 'Eenheid succesvol bijgewerkt.');
    }

    public function destroy($id)
    {
        $eenheden = Eenheden::findOrFail($id);
        $eenheden->delete();

        return redirect()->route('eenheden.index')->with('success', 'Eenheid succesvol verwijderd.');
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredienten;

class IngredientenController extends Controller
{

    public function index()
    {
        $ingredienten = Ingredienten::all();
        return view('ingrediënten.index', compact('ingredienten'));
    }

    public function create()
    {
        return view('ingrediënten.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'topping' => 'required|string',
            'prijs' => 'required|numeric',
        ]);

        Ingredienten::create([
            'topping' => $request->input('topping'),
            'prijs' => $request->input('prijs'),
        ]);

        return redirect()->route('ingrediënten.index')->with('success', 'Ingrediënt succesvol aangemaakt.');
    }
    public function edit($id)
    {
        $ingredienten = Ingredienten::findOrFail($id);
        return view('ingrediënten.edit', compact('ingredienten'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'topping' => 'required|string',
            'prijs' => 'required|numeric',
        ]);

        $ingredienten = Ingredienten::findOrFail($id);
        $ingredienten->update([
            'topping' => $request->input('topping'),
            'prijs' => $request->input('prijs'),
        ]);

        return redirect()->route('ingrediënten.index')->with('success', 'Ingrediënt succesvol bijgewerkt.');
    }

    public function destroy($id)
    {
        $ingredienten = Ingredienten::findOrFail($id);
        $ingredienten->delete();

        return redirect()->route('ingrediënten.index')->with('success', 'Ingrediënt succesvol verwijdert.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{

    public function index()
    {
        $pizzas = Pizza::all();
        return view('menu.index', compact('pizzas'));
    }

    public function create()
    {
        return view('menukaart.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required|string',
            'prijs' => 'required|numeric',
            'beschrijving' => 'required|text',
            'afbeelding' => 'required|string',
        ]);

        Pizza::create([
            'naam' => $request->input('naam'),
            'prijs' => $request->input('prijs'),
            'beschrijving' => $request->input('beschrijving'),
            'afbeelding' => $request->input('afbeelding'),
        ]);

        return redirect()->route('menu.index')->with('success', 'Pizza item succesvol aangemaakt.');
    }
    public function edit($id)
    {
        $pizzas = Pizza::findOrFail($id);
        return view('menu.edit', compact('pizzas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'naam' => 'required|string',
            'prijs' => 'required|numeric',
            'beschrijving' => 'required|text',
            'afbeelding' => 'required|string',
        ]);

        $pizzas = Pizza::findOrFail($id);
        $pizzas->update([
            'naam' => $request->input('naam'),
            'prijs' => $request->input('prijs'),
            'beschrijving' => $request->input('beschrijving'),
            'afbeelding' => $request->input('afbeelding'),
        ]);

        return redirect()->route('menu.index')->with('success', 'Pizza item succesvol bijgewerkt.');
    }

    public function destroy($id)
    {
        $pizzas = Pizza::findOrFail($id);
        $pizzas->delete();

        return redirect()->route('menu.index')->with('success', 'Pizza item succesvol verwijdert.');
    }
}

<!-- resources/views/ingredients/index.blade.php -->

<x-nav-layout xmlns:X-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Ingrediënten Lijst
    </x-slot:title>
    <div>
        <div class="text-3xl object-center">
            <h1>Ingrediënten Lijst</h1>
            <br>
            <a href="{{ route('ingrediënten.create') }}">Maak een nieuw ingrediënt aan</a>
        </div>
        <table>
            <thead>
            <tr>
                <th>Ingrediënt</th>
                <th>Prijs</th>
            </tr>
            </thead>
            <tbody>
            <!-- resources/views/ingredients/index.blade.php -->

            @foreach ($ingredienten as $ingredient)
                <tr>
                    <td>{{ $ingredient->topping }}</td>
                    <td>€{{ $ingredient->prijs }}</td>
                    <td>
                        <a href="{{ route('ingrediënten.edit', $ingredient->id) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('ingrediënten.destroy', $ingredient->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?')">Verwijder</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</x-nav-layout>

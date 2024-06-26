<!-- resources/views/ingredients/index.blade.php -->

<x-nav-layout xmlns:X-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Ingrediënten Lijst
    </x-slot:title>
    <div>
        <div class="text-3xl object-center">
            <br>
            <br>
            <h1>Ingrediënten Lijst</h1>

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
                        <a href="{{ route('ingrediënten.edit', $ingredient->id) }}">Bijwerken</a>
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
        <br>
        <a href="{{ route('ingrediënten.create') }}" class="text-white bg-red-600 border-green-800 border-solid border-4 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-600 dark:focus:ring-green-800">Maak een nieuwe ingrediënt aan</a>
    </div>
</x-nav-layout>

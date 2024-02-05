<!-- resources/views/ingredients/create.blade.php -->

<x-nav-layout xmlns:X-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Maak een menu item aan
    </x-slot:title>
    <div>
        <div class="text-3xl object-center">
            <h1> Maak een menu item aan</h1>
            <br>
        </div>
        <form action="{{ route('menu.store') }}" method="post">
            @csrf
            <div>
                <label for="naam">Ingrediënt:</label>
                <input type="text" name="naam" id="naam" required>
            </div>
            <div>
                <label for="beschrijving">Beschrijving:</label>
                <input type="text" name="beschrijving" id="beschrijving" required>
            </div>
            <div>
                <label for="prijs">Prijs:</label>
                <input type="number" name="prijs" id="prijs" step="0.01" required>
            </div>
            <button type="submit">Maak menu item aan</button>
        </form>
    </div>
</x-nav-layout>

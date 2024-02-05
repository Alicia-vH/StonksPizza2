<!-- resources/views/ingredients/create.blade.php -->

<x-nav-layout xmlns:X-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Maak ingrediënt aan
    </x-slot:title>
    <div>
        <div class="text-3xl object-center">
            <h1> Maak ingrediënt aan</h1>
            <br>
        </div>
        <form action="{{ route('ingrediënten.store') }}" method="post">
            @csrf
            <div>
                <label for="topping">Ingrediënt:</label>
                <input type="text" name="topping" id="topping" required>
            </div>
            <div>
                <label for="prijs">Prijs:</label>
                <input type="number" name="prijs" id="prijs" step="0.01" required>
            </div>
            <button type="submit">Maak ingrediënt aan</button>
        </form>
    </div>
</x-nav-layout>

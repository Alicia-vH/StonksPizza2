<x-nav-layout xmlns:X-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Edit Ingredient
    </x-slot:title>
    <div>
        <div class="text-3xl object-center">
            <h1>Edit Ingredient</h1>
            <br>
        </div>
        <form action="{{ route('ingrediënten.update', $ingredienten->id) }}" method="post">
            @csrf
            @method('PUT')
            <div>
                <label for="topping">Ingrediënt:</label>
                <input type="text" name="topping" id="topping" value="{{ $ingredienten->topping }}" required>
            </div>
            <div>
                <label for="prijs">Prijs:</label>
                <input type="number" name="prijs" id="prijs" step="0.01" value="{{ $ingredienten->prijs }}" required>
            </div>
            <button type="submit">Bijwerken</button>
        </form>
    </div>
</x-nav-layout>

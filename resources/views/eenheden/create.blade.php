<!-- resources/views/units/create.blade.php -->

<x-nav-layout xmlns:X-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Maak een eenheid
    </x-slot:title>
    <div>
        <div class="text-3xl object-center">
            <h1>  Maak een eenheid</h1>
            <br>
        </div>
        <form method="POST" action="{{ route('eenheden.store') }}">
            @csrf
            <label for="eenhedens">Eenheid:</label>
            <input type="text" id="eenhedens" name="eenhedens" required>
            <button type="submit">Maak aan</button>
        </form>
    </div>
</x-nav-layout>

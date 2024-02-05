<!-- resources/views/units/edit.blade.php -->

<x-nav-layout xmlns:X-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Werk eenheid bij
    </x-slot:title>
    <div>
        <div class="text-3xl object-center">
            <h1>Werk eenheid bij</h1>
            <br>
        </div>
        <form method="POST" action="{{ route('eenheden.update', $eenheden->id) }}">
            @csrf
            @method('PUT')
            <label for="eenhedens">Eenheid:</label>
            <input type="text" id="eenhedens" name="eenhedens" value="{{ $eenheden->eenhedens}}" required>
            <button type="submit">Bijwerken</button>
        </form>
    </div>
</x-nav-layout>

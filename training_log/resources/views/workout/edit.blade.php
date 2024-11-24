@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Szerkesztés: {{ $workoutOne->name }}</h1>

    <form action="{{ route('workout.update', $workoutOne->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="wName" class="block text-sm font-medium mb-2">Tevékenység neve:</label>
            <input value="{{ old('wName', $workoutOne->name) }}" type="text" name="wName" id="wName"
                class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
            @error('wName')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="wTime" class="block text-sm font-medium mb-2">Időtartam percben:</label>
            <input value="{{ old('wTime', $workoutOne->time) }}" type="number" name="wTime" id="wTime"
                class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
            @error('wTime')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="wIntensity" class="block text-sm font-medium mb-2">Intenzitás:</label>
            <select name="wIntensity" id="wIntensity"
                class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                <option value="alacsony">alacsony</option>
                <option value="közepes">közepes</option>
                <option value="magas">magas</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="wAvg_pulse" class="block text-sm font-medium mb-2">Átlagos pulzusszám:</label>
            <input value="{{ old('wAvg_pulse', $workoutOne->avg_pulse) }}" type="number" name="wAvg_pulse"
                id="wAvg_pulse"
                class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
            @error('wAvg_pulse')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit"
            class="inline-block px-4 py-2 rounded-md bg-blue-500 text-white font-medium focus:outline-none hover:bg-blue-700">Módosítás</button>
    </form>
</div>
@endsection
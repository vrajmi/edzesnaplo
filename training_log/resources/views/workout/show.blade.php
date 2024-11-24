@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Részletek: {{ $workoutOne->name }}</h1>

    <ul class="list-disc">
        <li class="py-2">Tevékenység neve: {{ $workoutOne->name }}</li>
        <li class="py-2">Időtartam percben: {{ $workoutOne->time }}</li>
        <li class="py-2">Rögzítés dátuma: {{ $workoutOne->created_at }}</li>
        <li class="py-2">Utolsó módosítás: {{ $workoutOne->updated_at }}</li>
        <li class="py-2">Intenzitás: {{ $workoutOne->intensity }}</li>
        <li class="py-2">Átlagos pulzusszám: {{ $workoutOne->avg_pulse }}</li>
    </ul>
</div>
@endsection
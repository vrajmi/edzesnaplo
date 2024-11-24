@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <ul class="list-none divide-y divide-gray-200">
        @foreach ($allWorkout as $Workout)
            <li class="py-4 flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <h3 class="text-lg font-medium">{{ $Workout->name }} ( {{ $Workout->created_at }} --
                        {{$Workout->updated_at }} )
                    </h3>
                </div>
                <div class="flex space-x-2">
                    <a href="{{ route('workout.show', $Workout->id) }}" class="text-blue-500 hover:underline">Részletek</a>
                    <a href="{{ route('workout.edit', $Workout->id) }}" class="text-green-500 hover:underline">Módosítás</a>
                    <form action="{{ route('workout.destroy', $Workout->id) }}" method="post"
                        class="inline-flex items-center">
                        @csrf
                        @method('delete')
                        <button type="submit" class="text-red-500 hover:underline">Törlés</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection
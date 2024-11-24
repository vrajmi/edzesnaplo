<?php

namespace App\Http\Controllers;

use App\Models\WorkoutModel;
use Illuminate\Http\Request;

class Workout extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allWorkout = WorkoutModel::all();

        return view('workout.index', compact('allWorkout'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('workout.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'wName' => 'required',
                'wTime' => 'required|numeric|min:1',
                'wIntensity' => 'required',
                'wAvg_pulse' => 'required|numeric|min:60|max:200'
            ],
            [
                'wName.required' => 'Az név nem lehet üres!',
                'wTime.required' => 'Az idő nem lehet üres!',
                'wTime.min' => 'Az idő nem lehet kevesebb, mint 1 perc!',
                'wAvg_pulse.min' => 'A átlag pulzus nem lehet alacsonyabb, mint 60',
                'wAvg_pulse.required' => 'Az átlag pulzusszám nem lehet üres!',
                'wAvg_pulse.max' => 'A átlag pulzus nem lehet magasabb, mint 200'
            ]
        );

        $newWorkout = new WorkoutModel();
        $newWorkout->name = $request->wName;
        $newWorkout->time = $request->wTime;
        $newWorkout->intensity = $request->wIntensity;
        $newWorkout->avg_pulse = $request->wAvg_pulse;
        $newWorkout->save();

        return redirect()->route('workout.index')->with('success', 'Sikeres Mentés!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $workoutOne = WorkoutModel::find($id);

        return view('workout.show', compact('workoutOne'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $workoutOne = WorkoutModel::find($id);

        return view('workout.edit', compact('workoutOne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'wName' => 'required',
                'wTime' => 'required|numeric|min:1',
                'wIntensity' => 'required',
                'wAvg_pulse' => 'required|numeric|min:60|max:200'
            ],
            [
                'wName.required' => 'Az név nem lehet üres!',
                'wTime.required' => 'Az idő nem lehet üres!',
                'wTime.min' => 'Az idő nem lehet kevesebb, mint 1 perc!',
                'wAvg_pulse.min' => 'A átlag pulzus nem lehet alacsonyabb, mint 60',
                'wAvg_pulse.required' => 'Az átlag pulzusszám nem lehet üres!',
                'wAvg_pulse.max' => 'A átlag pulzus nem lehet magasabb, mint 200'
            ]
        );

        $workoutOne = WorkoutModel::find($id);
        $workoutOne->name = $request->wName;
        $workoutOne->time = $request->wTime;
        $workoutOne->intensity = $request->wIntensity;
        $workoutOne->avg_pulse = $request->wAvg_pulse;
        $workoutOne->save();

        return redirect()->route('workout.index')->with('success', 'Sikeres Módosítás!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $workoutOne = WorkoutModel::find($id);
        $workoutOne->delete();

        return redirect()->route('workout.index')->with('success', 'Sikeres Törlés!');
    }
}

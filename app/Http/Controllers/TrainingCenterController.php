<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index()
    {
        return response()->json(TrainingCenter::all(), 200);
    }

    public function store(Request $request)
    {
        $center = TrainingCenter::create([
            'name' => $request->name
            // Agrega más campos si tu tabla los tiene (ej. 'code' => $request->code)
        ]);

        return response()->json($center, 201);
    }

    public function show(TrainingCenter $trainingCenter)
    {
        return response()->json($trainingCenter, 200);
    }

    public function update(Request $request, TrainingCenter $trainingCenter)
    {
        $trainingCenter->update([
            'name' => $request->name
        ]);

        return response()->json($trainingCenter, 200);
    }

    public function destroy(TrainingCenter $trainingCenter)
    {
        $trainingCenter->delete();

        return response()->json([
            'message' => 'Centro de formación eliminado correctamente'
        ], 200);
    }
}
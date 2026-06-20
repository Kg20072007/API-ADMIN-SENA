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
        $trainingCenter = TrainingCenter::create([
            'name' => $request->name,
            'location' => $request->location
        ]);

        return response()->json($trainingCenter, 201);
    }

    public function show(TrainingCenter $trainingCenter)
    {
        return response()->json($trainingCenter, 200);
    }

    public function update(Request $request, TrainingCenter $trainingCenter)
    {
        $trainingCenter->update([
            'name' => $request->name,
            'location' => $request->location
        ]);

        return response()->json($trainingCenter, 200);
    }

  
    public function destroy(TrainingCenter $center)
    {
        $center->delete();

        return response()->json([
            'message' => 'Centro eliminado correctamente'
        ], 200);
    }
}
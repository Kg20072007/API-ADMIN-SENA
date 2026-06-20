<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        return response()->json(Area::all(), 200);
    }

    public function store(Request $request)
    {
        $area = Area::create([
            'name' => $request->name
        ]);

        return response()->json($area, 201);
    }

    public function show(Area $area)
    {
        return response()->json($area, 200);
    }

    public function update(Request $request, Area $area)
    {
        $area->update([
            'name' => $request->name
        ]);

        return response()->json($area, 200);
    }

    public function destroy(Area $area)
    {
        $area->delete();

        return response()->json([
            'mesage' => 'Área eliminada correctamente'
        ], 200);
    }
}
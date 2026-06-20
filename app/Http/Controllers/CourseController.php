<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return response()->json(Course::all(), 200);
    }

    public function store(Request $request)
    {
        $course = Course::create([
            'name' => $request->name,
            'code' => $request->code, // Código de la ficha (ej: 3393101)
            'training_center_id' => $request->training_center_id
        ]);

        return response()->json($course, 201);
    }

    public function show(Course $course)
    {
        return response()->json($course, 200);
    }

    public function update(Request $request, Course $course)
    {
        $course->update([
            'name' => $request->name,
            'code' => $request->code,
            'training_center_id' => $request->training_center_id
        ]);

        return response()->json($course, 200);
    }

    public function destroy($id)
{
    // Busca el curso por su ID y lo elimina de un solo golpe
    $course = Course::find();

    if (!$course) {
        return response()->json([
            'message' => 'Curso/Ficha no encontrado'
        ], 404);
    }

    $course->delete();

    return response()->json([
        'message' => 'Curso/Ficha eliminado correctamente'
    ], 200);
}
}
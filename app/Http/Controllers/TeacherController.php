<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // 1. LISTAR TODOS
    public function index()
    {
        $teachers = Teacher::all();
        return response()->json($teachers, 200);
    }

    // 2. CREAR UNO NUEVO
    public function store(Request $request)
    {
        $teacher = Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'area_id' => $request->area_id
        ]);
        return response()->json($teacher, 201);
    }

    // 3. MOSTRAR UNO SOLO
    public function show(int $id)
    {
        $teacher = Teacher::find($id);

        if (!$teacher) {
            return response()->json(['message' => 'Instructor no encontrado'], 404);
        }
        return response()->json($teacher, 200);
    }

    // 4. ACTUALIZAR
    public function update(Request $request, int $id)
    {
        $teacher = Teacher::find($id);

        if (!$teacher) {
            return response()->json(['message' => 'Instructor no encontrado'], 404);
        }

        $teacher->update([
            'name' => $request->name,
            'email' => $request->email,
            'area_id' => $request->area_id
        ]);

        return response()->json($teacher, 200);
    }

    // 5. ELIMINAR
    public function destroy(int $id)
    {
        $teacher = Teacher::find($id);

        if (!$teacher) {
            return response()->json(['message' => 'Instructor no encontrado'], 404);
        }

        $teacher->delete();
        return response()->json(['message' => 'Instructor eliminado correctamente'], 200);
    }
}
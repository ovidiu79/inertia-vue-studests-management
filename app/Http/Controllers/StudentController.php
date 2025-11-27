<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
    public function index()
    {
        $students = StudentResource::collection(Student::all());

        return Inertia::render('Students/Index', [
            'students' => $students,
        ]);
    }
}

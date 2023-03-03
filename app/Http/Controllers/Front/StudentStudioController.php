<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Studentsstudio;
use Illuminate\Http\Request;

class StudentStudioController extends Controller
{
    public function studentsStudio()
    {
        $studentsstudios = Studentsstudio::all();
        return view('front.studentsStudio', compact(
            'studentsstudios'
        ));
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Team;
use Illuminate\Http\Request;

class DepartmentsStaffController extends Controller
{
    public function list()
    {
        $departments = Department::all();
        return view('front.departmentsstaff.list', compact('departments'));
    }

    public function show($slug)
    {
        $department = Department::where('slug_uz', $slug)
            ->orWhere('slug_ru', $slug)
            ->orWhere('slug_en', $slug)
            ->first();
        $teams = Team::orderBy('created_at', 'DESC')->where('department_id',$department->id)->get();


        return view('front.departmentsstaff.show', compact(
            'department',
            'teams'
        ));
    }
}

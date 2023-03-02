<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class JobVacancyController extends Controller
{
    public function jobVacancies()
    {
        $vacancies = Vacancy::orderBy('created_at', 'DESC')->get();
        return view('front.jobVacancies', compact('vacancies'));
    }
}

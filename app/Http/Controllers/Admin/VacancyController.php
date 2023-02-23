<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateVacancy;
use App\Http\Requests\Admin\UpdateVacancy;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies = Vacancy::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.vacancy.index', compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vacancy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateVacancy  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVacancy $request)
    {
        $data = $request->all();

        if(Vacancy::create($data)) {
            return redirect()->route('vacancy.index')->with('message', "Careers created successfully!!!");
        }
        return redirect()->route('vacancy.index')->with('message', "Unable to created Careers!!!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacancy = Vacancy::find($id);
        return view('admin.vacancy.edit', compact('vacancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateVacancy  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vacancy = Vacancy::find($id);

        $data = $request->all();

        if ($vacancy->update($data)) {
            return redirect()->route('vacancy.index')->with('message', 'Careers changed successfully!!!');
        }

        return redirect()->route('vacancy.index')->with('message', 'Unable to update Careers!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacancy = Vacancy::find($id);

        if ($vacancy->delete()) {
            return redirect()->route('vacancy.index')->with('message', "Careers deleted successfully");
        }
        return redirect()->route('vacancy.index')->with('message', "unable to delete Careers");
    }
}

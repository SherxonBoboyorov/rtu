<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateScholarship;
use App\Http\Requests\Admin\UpdateScholarship;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scholarships = Scholarship::orderBy('created_at', 'DESC')->get();
        return view('admin.scholarship.index', compact('scholarships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.scholarship.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateScholarship  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateScholarship $request)
    {
        $data = $request->all();

        if(Scholarship::create($data)) {
            return redirect()->route('scholarship.index')->with('massage', "Scholarships created successfully!!!");
        }
        return redirect()->route('scholarship.index')->with('massage', "Unable to created Scholarships!!!");
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
        $scholarship = Scholarship::find($id);
        return view('admin.scholarship.edit', compact('scholarship'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateScholarship  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScholarship $request, $id)
    {
        if (!Scholarship::find($id)) {
            return redirect()->route('scholarship.index')->with('message', "Scholarships not fount");
        }

        $scholarship = Scholarship::find($id);

        $data = $request->all();

        if ($scholarship->update($data)) {
            return redirect()->route('scholarship.index')->with('message', "Scholarships changed successfully!!!");
        }
        return redirect()->route('scholarship.index')->with('message', "Unable to update Scholarships!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Scholarship::find($id)) {
            return redirect()->route('scholarship.index')->with('message', "Scholarships union not found");
        }

        $scholarship = Scholarship::find($id);

        if ($scholarship->delete()) {
            return redirect()->route('scholarship.index')->with('message', "Scholarships deleted successfully");
        }
        return redirect()->route('scholarship.index')->with('message', "unable to delete Scholarships");
    }
}

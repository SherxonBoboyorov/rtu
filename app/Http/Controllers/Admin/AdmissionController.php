<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAdmission;
use App\Http\Requests\Admin\UpdateAdmission;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissions = Admission::orderBy('created_at', 'DESC')->get();
        return view('admin.admission.index', compact('admissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateAdmission  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdmission $request)
    {
        $data = $request->all();

        if(Admission::create($data)) {
            return redirect()->route('admission.index')->with('message', "Admission created successfully!!!");
        }
        return redirect()->route('admission.index')->with('message', "Unable to created Admission!!!");
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
        $admission = Admission::find($id);
        return view('admin.admission.edit', compact('admission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateAdmission  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmission $request, $id)
    {
        if (!Admission::find($id)) {
            return redirect()->route('admission.index')->with('message', "Admission not fount");
        }

        $admission = Admission::find($id);

        $data = $request->all();

        if ($admission->update($data)) {
            return redirect()->route('admission.index')->with('message', "Admission update successfully!!!");
        }
        return redirect()->route('admission.index')->with('message', "Unable to update Admission!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Admission::find($id)) {
            return redirect()->route('admission.index')->with('message', "Admission not found");
        }

        $admission = Admission::find($id);

        if ($admission->delete()) {
            return redirect()->route('admission.index')->with('message', "Admission deleted successfully");
        }
        return redirect()->route('admission.index')->with('message', "unable to delete Admission");
    }
}

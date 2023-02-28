<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateStudentsstudio;
use App\Http\Requests\Admin\UpdateStudentsstudio;
use App\Models\Studentsstudio;
use Illuminate\Http\Request;

class StudentsstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentsstudios = Studentsstudio::orderBy('created_at', 'DESC')->get();
        return view('admin.studentsstudio.index', compact('studentsstudios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.studentsstudio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateStudentsstudio  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStudentsstudio $request)
    {
        $data = $request->all();

        if(Studentsstudio::create($data)) {
            return redirect()->route('studentsstudio.index')->with('massage', "Students studio created successfully!!!");
        }
        return redirect()->route('studentsstudio.index')->with('massage', "Unable to created Students studio!!!");
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
        $studentsstudio = Studentsstudio::find($id);
        return view('admin.studentsstudio.edit', compact('studentsstudio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateStudentsstudio  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentsstudio $request, $id)
    {
        if (!Studentsstudio::find($id)) {
            return redirect()->route('studentsstudio.index')->with('message', "Students studio not fount");
        }

        $studentsstudio = Studentsstudio::find($id);

        $data = $request->all();

        if ($studentsstudio->update($data)) {
            return redirect()->route('studentsstudio.index')->with('message', "Students studio changed successfully!!!");
        }
        return redirect()->route('studentsstudio.index')->with('message', "Unable to update Students studio!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Studentsstudio::find($id)) {
            return redirect()->route('studentsstudio.index')->with('message', "Students studio union not found");
        }

        $studentsstudio = Studentsstudio::find($id);

        if ($studentsstudio->delete()) {
            return redirect()->route('studentsstudio.index')->with('message', "Students studio deleted successfully");
        }
        return redirect()->route('studentsstudio.index')->with('message', "unable to delete Students studio");
    }
}

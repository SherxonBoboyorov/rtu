<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateFaculty;
use App\Http\Requests\Admin\UpdateFaculty;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::orderBy('created_at', 'DESC')->get();
        return view('admin.faculty.index', compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateFaculty  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFaculty $request)
    {
        $data = $request->all();

        if(Faculty::create($data)) {
            return redirect()->route('faculty.index')->with('message', "Faculty created successfully!!!");
        }
        return redirect()->route('faculty.index')->with('message', "unable to created Faculty!!!");
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
        $faculty = Faculty::find($id);
        return view('admin.faculty.edit', compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateFaculty  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaculty $request, $id)
    {
        if (!Faculty::find($id)) {
            return redirect()->route('faculty.index')->with('message', "Faculty not fount");
        }

        $faculty = Faculty::find($id);

        $data = $request->all();

        if ($faculty->update($data)) {
            return redirect()->route('faculty.index')->with('message', "Faculty changed successfully!!!");
        }
        return redirect()->route('faculty.index')->with('message', "Unable to update Faculty!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Faculty::find($id)) {
            return redirect()->route('faculty.index')->with('message', "Faculty not found");
        }

        $faculty = Faculty::find($id);

        if ($faculty->delete()) {
            return redirect()->route('faculty.index')->with('message', "Faculty deleted successfully");
        }
        return redirect()->route('faculty.index')->with('message', "unable to delete Faculty");
    }
}

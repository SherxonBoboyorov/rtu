<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCareer;
use App\Http\Requests\Admin\UpdateCareer;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::orderBy('created_at', 'DESC')->get();
        return view('admin.career.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateCareer  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCareer $request)
    {
        $data = $request->all();
        if(Career::created($data)) {
            return redirect()->route('career.index')->with('massage', 'Careers created successfully!!!');
        }
        return redirect()->route('career.index')->with('massage', 'Unable to created Careers!!!');

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
        $career = Career::find($id);
        return view('admin.career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateCareer  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCareer $request, $id)
    {
        if (!Career::find($id)) {
            return redirect()->route('career.index')->with('message', "Careers not fount");
        }

        $career = Career::find($id);

        $data = $request->all();

        if ($career->update($data)) {
            return redirect()->route('career.index')->with('message', "Careers changed successfully!!!");
        }
        return redirect()->route('career.index')->with('message', "Unable to update Careers!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Career::find($id)) {
            return redirect()->route('career.index')->with('message', "Careers union not found");
        }

        $career = Career::find($id);

        if ($career->delete()) {
            return redirect()->route('career.index')->with('message', "Careers deleted successfully");
        }
        return redirect()->route('career.index')->with('message', "unable to delete Careers");
    }
}

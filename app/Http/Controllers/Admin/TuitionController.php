<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateTuition;
use App\Http\Requests\Admin\UpdateTuition;
use App\Models\Tuition;
use Illuminate\Http\Request;


class TuitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tuitions = Tuition::orderBy('created_at', 'DESC')->get();
        return view('admin.tuition.index', compact('tuitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tuition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if(Tuition::create($data)) {
            return redirect()->route('tuition.index')->with('massage', "Tuition fees created successfully!!!");
        }
        return redirect()->route('tuition.index')->with('massage', "Unable to created Tuition fees!!!");
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
        $tuition = Tuition::find($id);
        return view('admin.tuition.edit', compact('tuition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Tuition::find($id)) {
            return redirect()->route('tuition.index')->with('message', "Tuition fees not fount");
        }

        $tuition = Tuition::find($id);

        $data = $request->all();

        if ($tuition->update($data)) {
            return redirect()->route('tuition.index')->with('message', "Tuition fees changed successfully!!!");
        }
        return redirect()->route('tuition.index')->with('message', "Unable to update Tuition fees!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Tuition::find($id)) {
            return redirect()->route('tuition.index')->with('message', "Tuition fees  not found");
        }

        $tuition = Tuition::find($id);

        if ($tuition->delete()) {
            return redirect()->route('tuition.index')->with('message', "Tuition fees deleted successfully");
        }
        return redirect()->route('tuition.index')->with('message', "unable to delete Tuition fees");
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateBachelor;
use App\Http\Requests\Admin\UpdateBachelor;
use App\Models\Bachelor;
use Illuminate\Http\Request;

class BachelorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bachelors = Bachelor::orderBy('created_at', 'DESC')->get();
        return view('admin.bachelor.index', compact('bachelors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bachelor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateBachelor  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBachelor $request)
    {
        $data = $request->all();

        if(Bachelor::create($data)) {
            return redirect()->route('bachelor.index')->with('message', "Bachelor created successfully!!!");
        }
        return redirect()->route('bachelor.index')->with('message', "Unable to created Bachelor!!!");
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
        $bachelor = Bachelor::find($id);
        return view('admin.bachelor.edit', compact('bachelor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requets\Admin\UpdateBachelor  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBachelor $request, $id)
    {
        if (!Bachelor::find($id)) {
            return redirect()->route('bachelor.index')->with('message', "Bachelor not fount");
        }

        $bachelor = Bachelor::find($id);

        $data = $request->all();

        if ($bachelor->update($data)) {
            return redirect()->route('bachelor.index')->with('message', "Bachelor update successfully!!!");
        }
        return redirect()->route('bachelor.index')->with('message', "Unable to update Bachelor!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Bachelor::find($id)) {
            return redirect()->route('bachelor.index')->with('message', "Bachelor union not found");
        }

        $bachelor = Bachelor::find($id);

        if ($bachelor->delete()) {
            return redirect()->route('bachelor.index')->with('message', "Bachelor deleted successfully");
        }
        return redirect()->route('bachelor.index')->with('message', "unable to delete Bachelor");
    }
}

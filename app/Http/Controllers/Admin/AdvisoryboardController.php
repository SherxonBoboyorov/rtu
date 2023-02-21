<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAdvisoryboard;
use App\Http\Requests\Admin\UpdateAdvisoryboard;
use App\Models\Advisoryboard;
use Illuminate\Http\Request;

class AdvisoryboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advisoryboards = Advisoryboard::orderBy('created_at', 'DESC')->get();
        return view('admin.advisoryboard.index', compact('advisoryboards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advisoryboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateAdvisoryboard  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdvisoryboard $request)
    {
        $data = $request->all();

         if(Advisoryboard::create($data)) {
             return redirect()->route('advisoryboard.index')->with('message', "Advisory Board created successfully");
        }
        return redirect()->route('advisoryboard.index')->with('message', "Unable to create Advisory Board");
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
        $advisoryboard = Advisoryboard::find($id);
        return view('admin.advisoryboard.edit', compact('advisoryboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateAdvisoryboard  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdvisoryboard $request, $id)
    {
        $advisoryboard = Advisoryboard::find($id);

        $data = $request->all();

        if ($advisoryboard->update($data)) {
            return redirect()->route('advisoryboard.index')->with('message', 'Advisory Board changed successfully!!!');
        }

        return redirect()->route('advisoryboard.index')->with('message', 'Unable to update Advisory Board!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advisoryboard = Advisoryboard::find($id);

        if ($advisoryboard->delete()) {
            return redirect()->route('advisoryboard.index')->with('message', "Advisory Board deleted successfully");
        }
        return redirect()->route('advisoryboard.index')->with('message', "unable to delete Advisory Board");
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateEveningEdication;
use App\Http\Requests\Admin\UpdateEveningEdication;
use App\Models\EveningEdication;
use Illuminate\Http\Request;

class EveningEdicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eveningedications = EveningEdication::orderBy('created_at', 'DESC')->get();
        return view('admin.eveningedication.index', compact('eveningedications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.eveningedication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateEveningEdication  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEveningEdication $request)
    {
        $data = $request->all();

        if(EveningEdication::create($data)) {
            return redirect()->route('eveningedication.index')->with('message', "created successfully!!!");
        }
        return redirect()->route('eveningedication.index')->with('message', "Unable to created!!!");
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
        $eveningedication = EveningEdication::find($id);
        return view('admin.eveningedication.edit', compact('eveningedication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateEveningEdication  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEveningEdication $request, $id)
    {
        if (!EveningEdication::find($id)) {
            return redirect()->route('eveningedication.index')->with('message', "not fount");
        }

        $eveningedication = EveningEdication::find($id);

        $data = $request->all();

        if ($eveningedication->update($data)) {
            return redirect()->route('eveningedication.index')->with('message', " update successfully!!!");
        }
        return redirect()->route('eveningedication.index')->with('message', "Unable to update!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!EveningEdication::find($id)) {
            return redirect()->route('eveningedication.index')->with('message', "not found");
        }

        $eveningedication = EveningEdication::find($id);

        if ($eveningedication->delete()) {
            return redirect()->route('eveningedication.index')->with('message', "deleted successfully");
        }
        return redirect()->route('eveningedication.index')->with('message', "unable to delete");
    }
}

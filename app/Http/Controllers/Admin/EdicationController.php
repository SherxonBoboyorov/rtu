<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateEdication;
use App\Http\Requests\Admin\UpdateEdication;
use App\Models\Edication;
use Illuminate\Http\Request;
use Psy\Command\EditCommand;

class EdicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edications = Edication::orderBy('created_at', 'DESC')->get();
        return view('admin.edication.index', compact('edications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.edication.create');
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

        if(Edication::create($data)) {
            return redirect()->route('edication.index')->with('message', 'created successfully!!!');
        }
        return redirect()->route('edication.index')->with('message', 'unable to created !!!');

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
        $edication = Edication::find($id);
        return view('admin.edication.edit', compact('edication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Request\Admin\UpdateEdication  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEdication $request, $id)
    {
        if (!Edication::find($id)) {
            return redirect()->route('edication.index')->with('message', "not fount");
        }

        $edication = Edication::find($id);

        $data = $request->all();

        if ($edication->update($data)) {
            return redirect()->route('edication.index')->with('message', "update successfully!!!");
        }
        return redirect()->route('edication.index')->with('message', "Unable to update!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Edication::find($id)) {
            return redirect()->route('edication.index')->with('message', "union not found");
        }

        $edication = Edication::find($id);

        if ($edication->delete()) {
            return redirect()->route('edication.index')->with('message', "deleted successfully");
        }
        return redirect()->route('edication.index')->with('message', "unable to delete");
    }
}

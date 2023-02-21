<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateInternational;
use App\Http\Requests\Admin\UpdateInternational;
use App\Models\International;
use Illuminate\Http\Request;

class InternationalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internationals = International::orderBy('created_at', 'DESC')->get();
        return view('admin.international.index', compact('internationals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.international.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateInternational  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInternational $request)
    {
        $data = $request->all();

        if(International::create($data)) {
            return redirect()->route('international.index')->with('message', "International created seccessfully!!!");
        }
        return redirect()->route('international.index')->with('message', "Unable to created International!!!");
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
        $international = International::find($id);
        return view('admin.international.edit', compact('international'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateInternational  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!International::find($id)) {
            return redirect()->route('international.index')->with('message', "International not fount");
        }

        $international = International::find($id);

        $data = $request->all();

        if ($international->update($data)) {
            return redirect()->route('international.index')->with('message', "International changed successfully!!!");
        }
        return redirect()->route('international.index')->with('message', "Unable to update International!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!International::find($id)) {
            return redirect()->route('international.index')->with('message', "International not found");
        }

        $international = International::find($id);

        if ($international->delete()) {
            return redirect()->route('international.index')->with('message', "International deleted successfully");
        }
        return redirect()->route('international.index')->with('message', "unable to delete International");
    }
}

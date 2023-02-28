<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateDormitory;
use App\Http\Requests\Admin\UpdateDormitory;
use App\Models\Dormitory;
use Illuminate\Http\Request;


class DormitoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dormitories = Dormitory::orderBy('created_at', 'DESC')->get();
        return view('admin.dormitory.index', compact('dormitories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dormitory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateDormitory  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDormitory $request)
    {
        $data = $request->all();

        if(Dormitory::create($data)) {
            return redirect()->route('dormitory.index')->with('massage', "dormitory created successfully!!!");
        }
        return redirect()->route('dormitory.index')->with('massage', "Unable to created dormitory!!!");
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
        $dormitory = Dormitory::find($id);
        return view('admin.dormitory.edit', compact('dormitory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateDormitory  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDormitory $request, $id)
    {
        if (!Dormitory::find($id)) {
            return redirect()->route('dormitory.index')->with('message', "Dormitory not fount");
        }

        $dormitory = Dormitory::find($id);

        $data = $request->all();

        if ($dormitory->update($data)) {
            return redirect()->route('dormitory.index')->with('message', "Dormitory changed successfully!!!");
        }
        return redirect()->route('dormitory.index')->with('message', "Unable to update Dormitory!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Dormitory::find($id)) {
            return redirect()->route('dormitory.index')->with('message', "Dormitory union not found");
        }

        $dormitory = Dormitory::find($id);

        if ($dormitory->delete()) {
            return redirect()->route('dormitory.index')->with('message', "Dormitory deleted successfully");
        }
        return redirect()->route('dormitory.index')->with('message', "unable to delete Dormitory");
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateEveningEdicationCategory;
use App\Http\Requests\Admin\UpdateEveningEdicationCategory;
use App\Models\EveningEdicationCategory;
use Illuminate\Http\Request;

class EveningEdicationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eveningedicationcategories = EveningEdicationCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.eveningedicationcategory.index', compact('eveningedicationcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.eveningedicationcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateEveningEdicationCategory $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEveningEdicationCategory $request)
    {
        $data = $request->all();

        if(EveningEdicationCategory::create($data)) {
            return redirect()->route('eveningedicationcategory.index')->with('message', "created seccessfully!!!");
        }
        return redirect()->route('eveningedicationcategory.index')->with('message', "unable to created!!!");
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
        $eveningedicationcategory = EveningEdicationCategory::find($id);
        return view('admin.eveningedicationcategory.edit', compact('eveningedicationcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateEveningEdicationCategory  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEveningEdicationCategory $request, $id)
    {
        if (!EveningEdicationCategory::find($id)) {
            return redirect()->route('eveningedicationcategory.index')->with('message', "not fount");
        }

        $eveningedicationcategory = EveningEdicationCategory::find($id);

        $data = $request->all();

        if ($eveningedicationcategory->update($data)) {
            return redirect()->route('eveningedicationcategory.index')->with('message', "changed successfully!!!");
        }
        return redirect()->route('eveningedicationcategory.index')->with('message', "Unable to update!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!EveningEdicationCategory::find($id)) {
            return redirect()->route('eveningedicationcategory.index')->with('message', "not found");
        }

        $eveningedicationcategory = EveningEdicationCategory::find($id);

        if ($eveningedicationcategory->delete()) {
            return redirect()->route('eveningedicationcategory.index')->with('message', "deleted successfully");
        }
        return redirect()->route('eveningedicationcategory.index')->with('message', "unable to delete");
    }
}

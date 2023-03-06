<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateEdicationCategory;
use App\Http\Requests\Admin\UpdateEdicationCategory;
use App\Models\EdicationCategory;
use Illuminate\Http\Request;

class EdicationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edicationcategories = EdicationCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.edicationcategory.index', compact('edicationcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.edicationcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateEdicationCategoryt  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEdicationCategory $request)
    {
        $data = $request->all();

        if(EdicationCategory::create($data)) {
            return redirect()->route('edicationcategory.index')->with('message', "Created successfully");
        }
        return redirect()->route('edicationcategory.index')->with('message', "Unable to created ");
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
        $edicationcategory = EdicationCategory::find($id);
        return view('admin.edicationcategory.edit', compact('edicationcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateEdicationCategory  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEdicationCategory $request, $id)
    {
        if (!EdicationCategory::find($id)) {
            return redirect()->route('edicationcategory.index')->with('message', "not fount");
        }

        $edicationcategory = EdicationCategory::find($id);

        $data = $request->all();

        if ($edicationcategory->update($data)) {
            return redirect()->route('edicationcategory.index')->with('message', "update successfully!!!");
        }
        return redirect()->route('edicationcategory.index')->with('message', "Unable to update!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!EdicationCategory::find($id)) {
            return redirect()->route('edicationcategory.index')->with('message', "not found");
        }

        $edicationcategory = EdicationCategory::find($id);

        if ($edicationcategory->delete()) {
            return redirect()->route('edicationcategory.index')->with('message', "deleted successfully");
        }
        return redirect()->route('edicationcategory.index')->with('message', "unable to delete");
    }
}

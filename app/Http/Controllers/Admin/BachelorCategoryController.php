<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateBachelorCategory;
use App\Http\Requests\Admin\UpdateBachelorCategory;
use App\Models\BachelorCategory;
use Illuminate\Http\Request;

class BachelorCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bachelorcategories = BachelorCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.bachelorcategory.index', compact('bachelorcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bachelorcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateBachelorCategory  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBachelorCategory $request)
    {
        $data = $request->all();

        if(BachelorCategory::create($data)) {
            return redirect()->route('bachelorcategory.index')->with('message', "Bachelor Category created seccessfully!!!");
        }
        return redirect()->route('bachelorcategory.index')->with('message', "unable to created Bachelor Category!!!");

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
        $bachelorcategory = BachelorCategory::find($id);
        return view('admin.bachelorcategory.edit', compact('bachelorcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateBachelorCategory  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBachelorCategory $request, $id)
    {
        if (!BachelorCategory::find($id)) {
            return redirect()->route('bachelorcategory.index')->with('message', "Bachelor Category not fount");
        }

        $bachelorcategory = BachelorCategory::find($id);

        $data = $request->all();

        if ($bachelorcategory->update($data)) {
            return redirect()->route('bachelorcategory.index')->with('message', "Bachelor Category changed successfully!!!");
        }
        return redirect()->route('bachelorcategory.index')->with('message', "Unable to update Bachelor Category!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!BachelorCategory::find($id)) {
            return redirect()->route('bachelorcategory.index')->with('message', "Bachelor Category not found");
        }

        $bachelorcategory = BachelorCategory::find($id);

        if ($bachelorcategory->delete()) {
            return redirect()->route('bachelorcategory.index')->with('message', "Bachelor Category deleted successfully");
        }
        return redirect()->route('bachelorcategory.index')->with('message', "unable to delete Bachelor Category");
    }
}

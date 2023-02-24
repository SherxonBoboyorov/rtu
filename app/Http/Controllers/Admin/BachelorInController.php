<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateBachelorIn;
use App\Http\Requests\Admin\UpdateBachelorIn;
use App\Models\BachelorIn;
use App\Models\BachelorCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BachelorInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bachelorins = BachelorIn::orderBy('created_at', 'DESC')->get();
        return view('admin.bachelorin.index', [
            'bachelorins' => $bachelorins
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bachelorcategories = BachelorCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.bachelorin.create', [
            'bachelorcategories' => $bachelorcategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateBachelorIn  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBachelorIn $request)
    {
        $data = $request->all();

        $data['image'] = BachelorIn::uploadImage($request);

        if (BachelorIn::create($data)) {
            return redirect()->route('bachelorin.index')->with('message', "Bachelor product created seccessfully");
        }
        return redirect()->route('bachelorin.index')->with('message', "unable to create Bachelor product");
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
    public function edit(BachelorIn $bachelorin)
    {
        $bachelorcategory = BachelorCategory::orderBy('created_at', 'DESC')->get();
        return view('admin.bachelorin.edit', [
            'bachelorcategory' => $bachelorcategory,
            'bachelorin' => $bachelorin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateBachelorIn  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBachelorIn $request, $id)
    {
        if (!BachelorIn::find($id)) {
            return redirect()->route('bachelorin.index')->with('message', 'Bachelor product not found');
        }

        $bachelorin = BachelorIn::find($id);

        $data = $request->all();
        $data['image'] = BachelorIn::updateImage($request, $bachelorin);

        if ($bachelorin->update($data)) {
            return redirect()->route('bachelorin.index')->with('message', 'Bachelor product changed successfully');
        }
        return redirect()->route('bachelorin.index')->with('message', 'Unable to update Bachelor product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!BachelorIn::find($id)) {
            return redirect()->route('bachelorin.index')->with('message', "Bachelor product not found");
        }

        $bachelorin = BachelorIn::find($id);

        if (File::exists(public_path() . $bachelorin->image)) {
            File::delete(public_path() . $bachelorin->image);
        }

        if ($bachelorin->delete()) {
            return redirect()->route('bachelorin.index')->with('message', "Bachelor product deleted successfully");
        }
        return redirect()->route('bachelorin.index')->with('message', "unable to delete Bachelor product");
    }
}

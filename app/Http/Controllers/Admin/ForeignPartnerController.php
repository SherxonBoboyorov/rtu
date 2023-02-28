<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateForeignPartner;
use App\Http\Requests\Admin\UpdateForeignPartner;
use App\Models\ForeignPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ForeignPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foreignpartners = ForeignPartner::orderBy('created_at', 'DESC')->get();
        return view('admin.foreignpartner.index', compact('foreignpartners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.foreignpartner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateForeignPartner  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateForeignPartner $request)
    {
        $data = $request->all();

        $data['image'] = ForeignPartner::uploadImage($request);

        if (ForeignPartner::create($data)) {
            return redirect()->route('foreignpartner.index')->with('message', "Foreign Partners created seccessfully");
        }
        return redirect()->route('foreignpartner.index')->with('message', "unable to create foreignpartner");
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
        $foreignpartner = ForeignPartner::find($id);
        return view('admin.foreignpartner.edit', compact('foreignpartner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateForeignPartner  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForeignPartner $request, $id)
    {
        if (!ForeignPartner::find($id)) {
            return redirect()->route('foreignpartner.index')->with('message', 'Foreign partners not found');
        }

        $foreignpartner = ForeignPartner::find($id);

        $data = $request->all();
        $data['image'] = ForeignPartner::updateImage($request, $foreignpartner);

        if ($foreignpartner->update($data)) {
            return redirect()->route('foreignpartner.index')->with('message', 'Foreign partners changed successfully');
        }
        return redirect()->route('foreignpartner.index')->with('message', 'Unable to update Foreign partners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!ForeignPartner::find($id)) {
            return redirect()->route('foreignpartner.index')->with('message', "Foreign partners not found");
        }

        $foreignpartner = ForeignPartner::find($id);

        if (File::exists(public_path() . $foreignpartner->image)) {
            File::delete(public_path() . $foreignpartner->image);
        }

        if ($foreignpartner->delete()) {
            return redirect()->route('foreignpartner.index')->with('message', "Foreign partners deleted successfully");
        }
        return redirect()->route('foreignpartner.index')->with('message', "unable to delete Foreign partners");
    }
}

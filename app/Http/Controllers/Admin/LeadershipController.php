<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateLeadership;
use App\Http\Requests\Admin\UpdateLeadership;
use App\Models\Leadership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LeadershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaderships = Leadership::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.leadership.index', compact('leaderships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.leadership.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateLeadership  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLeadership $request)
    {
        $data = $request->all();

        $data['image'] = Leadership::uploadImage($request);

        if(Leadership::create($data)) {
            return redirect()->route('leadership.index')->with('message', "Leadership created successfully!!!");
        }
        return redirect()->route('leadership.index')->with('message', "Unable to create Leadership!!!");

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
        $leadership = Leadership::find($id);
        return view('admin.leadership.edit', compact('leadership'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateLeadership  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeadership $request, $id)
    {
        if (!Leadership::find($id)) {
            return redirect()->route('leadership.index')->with('message', 'Slider not found');
        }

        $leadership = Leadership::find($id);

        $data = $request->all();
        $data['image'] = Leadership::updateImage($request, $leadership);

        if ($leadership->update($data)) {
            return redirect()->route('leadership.index')->with('message', 'Leadership changed successfully');
        }
        return redirect()->route('leadership.index')->with('message', 'Unable to update Leadership');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Leadership::find($id)) {
            return redirect()->route('leadership.index')->with('message', "Leadership not found");
        }

        $leadership = Leadership::find($id);

        if (File::exists(public_path() . $leadership->image)) {
            File::delete(public_path() . $leadership->image);
        }

        if ($leadership->delete()) {
            return redirect()->route('leadership.index')->with('message', "Leadership deleted successfully");
        }
        return redirect()->route('leadership.index')->with('message', "unable to delete Leadership");
    }
}

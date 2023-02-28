<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAdvantage;
use App\Http\Requests\Admin\UpdateAdvantage;
use App\Models\Advantage;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advantages = Advantage::orderBy('created_at', 'DESC')->get();
        return view('admin.advantage.index', compact('advantages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advantage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateAdvantage  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdvantage $request)
    {
        $data = $request->all();

        if(Advantage::create($data)) {
            return redirect()->route('advantage.index')->with('message', "Avdantages created successfully!!!");
        }
        return redirect()->route('advantage.index')->with('message', "Unable to created Avdantages!!!");

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
        $advantage = Advantage::find($id);
        return view('admin.advantage.edit', compact('advantage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateAdvantage  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdvantage $request, $id)
    {
        if (!Advantage::find($id)) {
            return redirect()->route('advantage.index')->with('message', 'Avdantages not found');
        }

        $advantage = Advantage::find($id);

        $data = $request->all();

        if ($advantage->update($data)) {
            return redirect()->route('advantage.index')->with('message', 'Avdantages changed successfully');
        }
        return redirect()->route('advantage.index')->with('message', 'Unable to update Avdantages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Advantage::find($id)) {
            return redirect()->route('advantage.index')->with('message', "Avdantages not found");
        }

        $advantage = Advantage::find($id);

        if ($advantage->delete()) {
            return redirect()->route('advantage.index')->with('message', "Avdantages deleted successfully");
        }
        return redirect()->route('advantage.index')->with('message', "unable to delete Avdantages");
    }
}

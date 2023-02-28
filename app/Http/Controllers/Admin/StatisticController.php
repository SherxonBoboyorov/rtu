<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateStatistic;
use App\Http\Requests\Admin\UpdateStatistic;
use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statistics = Statistic::orderBy('created_at', 'DESC')->get();
        return view('admin.statistic.index', compact('statistics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.statistic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateStatistic  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStatistic $request)
    {
        $data = $request->all();

        if(Statistic::create($data)) {
            return redirect()->route('statistic.index')->with('message', "Statistics created successfully!!!");
        }
        return redirect()->route('statistic.index')->with('message', "Unable to created Statistics!!!");
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
        $statistic = Statistic::find($id);
        return view('admin.statistic.edit', compact('statistic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateStatistic  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatistic $request, $id)
    {
        if (!Statistic::find($id)) {
            return redirect()->route('statistic.index')->with('message', 'Statistics not found');
        }

        $statistic = Statistic::find($id);

        $data = $request->all();

        if ($statistic->update($data)) {
            return redirect()->route('statistic.index')->with('message', 'Statistics changed successfully');
        }
        return redirect()->route('statistic.index')->with('message', 'Unable to update Statistics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Statistic::find($id)) {
            return redirect()->route('statistic.index')->with('message', "Statistics not found");
        }

        $statistic = Statistic::find($id);

        if ($statistic->delete()) {
            return redirect()->route('statistic.index')->with('message', "Statistics deleted successfully");
        }
        return redirect()->route('statistic.index')->with('message', "unable to delete Statistics");
    }
}

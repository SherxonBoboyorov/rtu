<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateResearchStatistic;
use App\Http\Requests\Admin\UpdateResearchStatistic;
use App\Models\ResearchStatistic;
use Illuminate\Http\Request;

class ResearchStatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $researchstatistics = ResearchStatistic::orderBy('created_at', 'DESC')->get();
        return view('admin.researchstatistic.index', compact('researchstatistics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.researchstatistic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateResearchStatistic  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateResearchStatistic $request)
    {
        $data = $request->all();

        if(ResearchStatistic::create($data)) {
            return redirect()->route('researchstatistic.index')->with('message', "Research Statistics created successfully!!!");
        }
        return redirect()->route('researchstatistic.index')->with('message', "Unable to created Research Statistics!!!");
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
        $researchstatistic = ResearchStatistic::find($id);
        return view('admin.researchstatistic.edit', compact('researchstatistic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateResearchStatistic  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResearchStatistic $request, $id)
    {
        if (!ResearchStatistic::find($id)) {
            return redirect()->route('researchstatistic.index')->with('message', 'Research Statistics not found');
        }

        $researchstatistic = ResearchStatistic::find($id);

        $data = $request->all();

        if ($researchstatistic->update($data)) {
            return redirect()->route('researchstatistic.index')->with('message', 'Research Statistics changed successfully');
        }
        return redirect()->route('researchstatistic.index')->with('message', 'Unable to update Research Statistics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!ResearchStatistic::find($id)) {
            return redirect()->route('researchstatistic.index')->with('message', "Research Statistics not found");
        }

        $researchstatistic = ResearchStatistic::find($id);

        if ($researchstatistic->delete()) {
            return redirect()->route('researchstatistic.index')->with('message', "Research Statistics deleted successfully");
        }
        return redirect()->route('researchstatistic.index')->with('message', "unable to delete Research Statistics");
    }
}

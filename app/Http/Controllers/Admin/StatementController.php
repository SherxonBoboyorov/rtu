<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateStatement;
use App\Http\Requests\Admin\UpdateStatement;
use App\Models\Statement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statements = Statement::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.statement.index', compact('statements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.statement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateStatement  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStatement $request)
    {
        $data = $request->all();

        $data['image'] = Statement::uploadImage($request);

        if(Statement::create($data)) {
            return redirect()->route('statement.index')->with('message', "Norms & Statements created successfully!!!");
        }
        return redirect()->route('statement.index')->with('message', "unable to created Norms & Statements!!!");

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
        $statement = Statement::find($id);
        return view('admin.statement.edit', compact('statement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateStatement  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatement $request, $id)
    {
        if (!Statement::find($id)) {
            return redirect()->route('statement.index')->with('message', 'Norms & Statements not found');
        }

        $statement = Statement::find($id);

        $data = $request->all();
        $data['image'] = Statement::updateImage($request, $statement);

        if ($statement->update($data)) {
            return redirect()->route('statement.index')->with('message', 'Norms & Statements changed successfully');
        }
        return redirect()->route('statement.index')->with('message', 'Unable to update Norms & Statements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Statement::find($id)) {
            return redirect()->route('statement.index')->with('message', "Norms & Statements not found");
        }

        $statement = Statement::find($id);

        if (File::exists(public_path() . $statement->image)) {
            File::delete(public_path() . $statement->image);
        }

        if ($statement->delete()) {
            return redirect()->route('statement.index')->with('message', "Norms & Statements deleted successfully");
        }
        return redirect()->route('statement.index')->with('message', "unable to delete Norms & Statements");
    }
}

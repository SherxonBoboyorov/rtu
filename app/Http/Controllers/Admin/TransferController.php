<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateTransfer;
use App\Http\Requests\Admin\UpdateTransfer;
use App\Models\Transfer;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transfers = Transfer::orderBy('created_at', 'DESC')->get();
        return view('admin.transfer.index', compact('transfers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transfer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateTransfer $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTransfer $request)
    {
        $data = $request->all();

        if(transfer::create($data)) {
            return redirect()->route('transfer.index')->with('massage', "Transfer created successfully!!!");
        }
        return redirect()->route('transfer.index')->with('massage', "Unable to created Transfer!!!");
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
        $transfer = Transfer::find($id);
        return view('admin.transfer.edit', compact('transfer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateTransfer  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransfer $request, $id)
    {
        if (!Transfer::find($id)) {
            return redirect()->route('transfer.index')->with('message', "Transfer not fount");
        }

        $transfer = Transfer::find($id);

        $data = $request->all();

        if ($transfer->update($data)) {
            return redirect()->route('transfer.index')->with('message', "Transfer changed successfully!!!");
        }
        return redirect()->route('transfer.index')->with('message', "Unable to update Transfer!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Transfer::find($id)) {
            return redirect()->route('transfer.index')->with('message', "Transfer union not found");
        }

        $transfer = Transfer::find($id);

        if ($transfer->delete()) {
            return redirect()->route('transfer.index')->with('message', "Transfer deleted successfully");
        }
        return redirect()->route('transfer.index')->with('message', "unable to delete Transfer");
    }
}

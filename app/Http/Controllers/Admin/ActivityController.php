<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActivityRequest;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.activity.index')
            ->with([
                'items' => Activity::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreActivityRequest
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivityRequest $request)
    {
        Activity::create($request->validated());

        return redirect()
            ->route('activity.index')
            ->with([
                'message' => __('Item saved!')
            ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.activity.edit')
            ->with([
                'item' => Activity::findOrFail($id)
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreActivityRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreActivityRequest $request, $id)
    {
        Activity::findOrFail($id)
            ->fill($request->validated())
            ->save();

        return redirect()
            ->route('activity.edit', $id)
            ->with([
                'message' => __('Item saved!')
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Activity::findOrFail($id)
            ->delete();

        return redirect()
            ->route('activity.index')
            ->with([
                'message' => __('Item deleted!')
            ]);
    }
}

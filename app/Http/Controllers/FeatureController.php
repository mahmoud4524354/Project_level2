<?php

namespace App\Http\Controllers;

use App\Models\feature;
use App\Http\Requests\StorefeatureRequest;
use App\Http\Requests\UpdatefeatureRequest;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = feature::paginate(5);
        return view('admin.features.index', get_defined_vars());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.features.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorefeatureRequest $request)
    {
        $data = $request->validated();
        feature::create($data);
        return redirect()->route('admin.features.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(feature $feature)
    {
        return view('admin.features.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(feature $feature)
    {
        return view('admin.features.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefeatureRequest $request, feature $feature)
    {
        $data = $request->validated();
        $feature->update($data);
        return redirect()->route('admin.features.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(feature $feature)
    {
        $feature->delete();
        return to_route('admin.features.index')->with('success',__('keywords.deleted_successfully'));
    }
}

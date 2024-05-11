<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outlets = Outlet::latest()->paginate(10);
        return view('outlets.index' , compact('outlets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('outlets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:255|unique:outlets',
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255'
        ]);

        $outlet = Outlet::create([
            'code' => $request->code,
            'name' => $request->name,
            'status' => $request->status,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect()
            ->route('outlets.index')
            ->with('message', 'New outlet created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Outlet $outlets)
    {
        return view('outlets.edit', compact('outlets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'code' => 'required|string|max:255|unique:outlets',
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);
        $outlets = Outlet::find($id);

        $outlets->update([
            'code' => $request->code,
            'name'     => $request->name,
            'status'   => $request->status,
            'address'   => $request->address,
            'phone'   => $request->phone
        ]);

        return redirect()
            ->route('outlets.index')
            ->with('message', 'Outlet updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $outlets = Outlet::find($id);
        $outlets->delete();

        //redirect to index
        return redirect()
        ->route('outlets.index')
        ->with('message', 'Outlet deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_supplier = Supplier::all();
        return view('supplier/index', compact('data_supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('supplier/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //  return 'nama = '.$request->input('nama_supplier');
        
        $input      = $request->all();
        $validator  = Validator::make($input, [
            'nama_supplier' => 'required|string|min:2|max:100',
            'alamat_supplier' => 'required|string|min:2|max:100',
            'telp_supplier' => 'required|numeric'
        ]);

        if($validator->fails()){
            return redirect()->route('supplier.create')->withErrors($validator)->withInput();
        }

        Supplier::create($request->all());

        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_supplier = Supplier::findOrFail($id);
        return view('supplier.show', compact('data_supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier   = Supplier::findOrFail($id);
        $input      = $request->all();
        $validator  = Validator::make($input, [
            'nama_supplier' => 'required|string|min:2|max:100',
            'alamat_supplier' => 'required|string|min:2|max:100',
            'telp_supplier' => 'required|numeric'
        ]);

        if($validator->fails()){
            return redirect()->route('supplier.edit', [$id])->withErrors($validator);
        }

        $supplier->update($request->all());

        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->route('supplier.index');
    }
}

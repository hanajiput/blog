<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $products = Product::all()->toArray();         
         return view('v1.index', compact('products')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Product = $this->validate(request(), [
      'nim' => 'required',
      'nama' => 'required',
      'fakultas' => 'required',
      'jurusan' => 'required',
      'username' => 'required',
      'password' => 'required']);
      Product::create($Product);
      return back()->with('success', 'Product has been added');;
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
         $product = Product::find($id);         
         return view('v1.edit',compact('product','id')); 
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
        $product = Product::find($id);         
        $this->validate(request(), [           
        'nim' => 'required',
        'nama' => 'required',
        'fakultas' => 'required',
        'jurusan' => 'required',
        'username' => 'required',
        'password' => 'required']); 
 
        $product->nim = $request->get('nim');         
        $product->nama = $request->get('nama');
        $product->fakultas = $request->get('fakultas');
        $product->jurusan = $request->get('jurusan');
        $product->username = $request->get('username');
        $product->password = $request->get('password');         
        $product->save();         
        return redirect('v1')->with('success','Product has been updated');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $product = Product::find($id);         
         $product->delete();         
         return redirect('v1')->with('success','Product has been  deleted');
    }
}

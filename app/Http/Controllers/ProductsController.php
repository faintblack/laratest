<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use DB;
use Datatables;

class ProductsController extends Controller
{
    public function index()
    {
        $data = Products::all();
        return view('index', compact('data'));
    }

    public function back()
    {
        return redirect('/');
    }

    public function create()
    {
        return view('create');
    }

    public function insert(Request $request)
    {
        $data = new Products();
        $data->name = $request->get('name_product');
        $data->stock = $request->get('product_stok');
        $data->save();
        return redirect('/');
    }

    public function delete($id)
    {
        $data = Products::find($id);
        $data->delete();
        return back();
    }

    public function edit($id)
    {
        $data = Products::find($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Products::findOrFail($id);
        $data->name = $request->get('name_product');
        $data->stock = $request->get('product_stok');
        $data->save();
        return redirect('/')->with('alert-success', 'Data berhasil Diubah.');
    }

    public function read($id)
    {
        $data = Products::find($id);
        return view('read', compact('data'));
    }
}

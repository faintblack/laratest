<?php

namespace App\Http\Controllers;

use App\Products;
use App\TransactionProduct;
use App\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeliController extends Controller
{
    public function index()
    {
        $data = Products::all();
        $data2 = Transactions::all();
        // print_r(date('Y-m-d H:i:s'));exit();
        return view('beli', compact('data', 'data2'));
    }

    public function beli_product(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");

        $model1 = new Transactions();
        $model1->waktu = date('Y-m-d H:i:s');
        $model1->save();

        $tes1 = DB::table('transaction')->orderBy('id_transaction', 'desc')->first();

        foreach ($request->list_product as $key => $id_product) {
            $model2 = new TransactionProduct();
            $model2->id_transaction = $tes1->id_transaction;
            $model2->id_product = $id_product;
            $model2->save();

            $model3 = Products::findOrFail($id_product);
            $model3->stock = $model3->stock - 1;
            $model3->save();
        }

        return redirect('beli');
    }

    public function detail_beli(Request $request, $id){
        $model = new TransactionProduct();
        $data = DB::table('transaction_product')->where('id_transaction', $id)->get();

        return view('detail_beli', compact('data'));
    }
}

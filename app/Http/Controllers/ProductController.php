<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $listProducts = Product::paginate(21);
        //dd($listProducts);




        return view ('products.index',['listProducts'=>$listProducts]);
    }

    public function create(){
        return view ('products.create');
    }
    public function show($id){
        //echo 'PRODUCTO: $name';
        $product = Product::find($id);
        return view('products.show',['product'=>$product]); //RETORNAR EL DETALLE DE UN PRODUCTO
    }

}


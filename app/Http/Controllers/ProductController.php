<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ProductController extends Controller
{
    //
    public function indexp()
    {
        $data = DB::table("products")->get();
        return view('product.index',['products'=>$data]);
    } 

    public function deletep($id)
    {
        $delete=DB::table("products")
        ->where("id","=",$id)
        ->delete();

        return redirect("/product")->with('deleted','Successfully Deleted Category !!!');
    }

    public function addProduct() 
    {
        return view('product.add');
    }

    public function saveProduct(Request $req)
    {
        $validated=$req->validate([
            "description"=>['required','min:4'],
            "quantity"=>['required','min:1'],
            "price"=>['required','min:1'],
            
        ]);

        $data=Product::create($validated);
        return redirect("/product")->with('success','Product added successfully');
    }

    public function editp($id)
    {
        $data=Product::findOrFail($id);
        return view('product.edit',['product'=>$data]);
    
    }

    public function updateProduct(Request $req)
    {
        $req->validate([
            "description"=>['required','min:4'],
            "quantity"=>['required','min:1'],
            "price"=>['required','min:1'],
            
        ]);

        $data=Product::find($req->id);
        $data->description=$req->description;
        $data->quantity=$req->quantity;
        $data->price=$req->price;

        $data->save();
        return redirect("/product")->with('success','Product edited successfully');
    }
    
}
